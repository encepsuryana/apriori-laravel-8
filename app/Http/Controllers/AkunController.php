<?php

namespace App\Http\Controllers;

use App\akun;
use App\product;
// use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

//import class verifyAkun
use App\VerifyAkun;
use App\Mail\VerifyMail;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.akun.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->has('nama')) {
            $data = [
                "nama" => $request->nama,
                "alamat" => $request->alamat,
                "email" => $request->email,
                "password" => md5($request->password)
            ];
            // Session::push("data",$data);
            // return view("frontend.akun.konfirmasi"); auth
            $check = akun::where('email', $request->email)->get();
            if (\count($check) > 0) {
                return back()->WithErrors("Akun sudah terdaftar");
            } else {
                akun::create($data);

                $verifyAkun = VerifyAkun::create([
                  'akun_id' => akun::where('email', $request->email)->first()->id,
                  'token' => sha1(time())
                ]);
                \Mail::to($request->email)->send(new VerifyMail($verifyAkun));

                // Session::push('nama', $request->nama);
                // Session::push('alamat', $request->alamat);
                // Session::push('email', $request->email);
                
                return view("frontend.akun.konfirmasi"); 
                //and logout 


                        }
        } else {
            $email = $request->email;
            $password = md5($request->password);
            $data = akun::where('email', $email)->where('password', $password)->get();
            // check verified 1
            if (\count($data) > 0) {
                if ($data[0]->verified == 1) {
                    Session::push('nama', $data[0]->nama);
                    Session::push('alamat', $data[0]->alamat);
                    Session::push('email', $data[0]->email);
                    return redirect('/');
                } else {
                    return view("frontend.akun.konfirmasi"); 
                }
                
            } else {
                return back()->WithErrors("Email atau password salah");
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function show($akun)
    {
        $id = $akun;
        if ($id == "register") {
            return view('frontend.akun.register');
        } else if ($id == "logout") {
            Session::forget('nama');
            Session::forget('alamat');
            Session::forget('email');
            return redirect('');
        } else {
            return abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function edit(akun $akun)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, akun $akun)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function destroy(akun $akun)
    {
        //
    }

    public function verifyAkun($token)
    {
        //get gata akun base on token from table akun
        $verifyAkun = VerifyAkun::where('token', $token)->first();
        
        if (isset($verifyAkun)) {
            $akun = akun::find($verifyAkun->akun_id);
            if (!$akun->verified) {
                $akun->verified = 1;
                $akun->save();
                $status = "Akun anda telah terverifikasi. Selamat berbelanja.";
            } else {
                $status = "Akun anda telah terverifikasi sebelumnya.";
            }
        } else {
            return redirect('/');
        }
        return view('frontend.akun.verify', ['status' => $status]);
    }


}