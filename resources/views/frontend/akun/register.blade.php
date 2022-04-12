@extends('layouts.frontend')
@section('content')
<div class="container" style="min-height: 66vh;">
    <form action="{{ url('akun', []) }}" method="POST">
        @csrf
        <div class='d-flex justify-content-center'>

            <div class="box-login" style="width: 400px;">

                <h3 class="text-center">Register</h3>
                <!-- Nama Required-->
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" required class="form-control" placeholder="John Doe">
                </div>

                <!-- email required -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" required class="form-control" placeholder="johndue@mail.com">
                    </input>
                </div>

                <!-- password required -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" required class="form-control" placeholder="*********">
                    </input>
                </div>

                <!-- alamat required -->
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea type="text" name="alamat" required class="form-control" placeholder="Jl. Kebon Kacang">
                    </textarea>
                </div>

                <!-- Button -->
                <div class="text-center">
                    <button type="submit" value="Register" id="btn-login" class="btn btn-success"
                        style="margin-bottom: 8px;">Register</button>
                    <span class="regiter-text">Sudah punya Akun? <a href="{{ url('akun', []) }}">Login</a></span>
                </div>
            </div>


        </div>
    </form>
</div>
@endsection