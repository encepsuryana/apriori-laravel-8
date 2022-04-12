<?php

namespace App\Http\Controllers;

use App\transaction;
use App\product;
use App\akun;
use Session;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $harga = [];
        if(Session::has("nama")){
            $id_user = akun::where('email',Session::get('email')[0])->get();
            // return Session::get('email')[0];
            $id_user = $id_user[0]['id'];
        }
        else{
            $id_user = 0;
        }
        $data = transaction::where('id_user',$id_user)->groupBy('id_transaksi')->orderBy('id','desc')->paginate(4);
        foreach($data as $d){
           $temp = transaction::where('id_user',$id_user)->where('id_transaksi',$d->id_transaksi)->get();
           $count = 0;
           foreach($temp as $t){
               $zz = product::find($t->id_barang);
               $count = $count+$zz->harga;
           }
           array_push($harga,$count);
        }
    
        return view("frontend.history.index",compact('data','harga'));

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(transaction $transaction)
    {
        //
    }
}
