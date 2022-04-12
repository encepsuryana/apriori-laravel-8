@extends('layouts.frontend')
@section('content')
<div class="container" style="min-height: 56vh; margin-top: 10vh;">

    <form action="{{ url('akun', []) }}" method="POST">
        @csrf
        <div class='d-flex justify-content-center'>
            <div>
                <!-- error message -->
                @if($errors->any())
                <h6 class="text-center" style="color:white; padding: 5px; background: red; border-radius: 3px;">
                    {{$errors->first()}}</h6>
                @endif

                <div class="box-login">
                    <h3 class="text-center">Login</h3>
                    <!-- email -->
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="johndue@mail.com">
                    </div>

                    <!-- password -->
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="*********">
                    </div>

                    <!-- button -->
                    <div class="text-center">
                        <button type="submit" value="Login" id="btn-login" class="btn btn-success"
                            style="margin-bottom: 8px;">Login</button>
                        <span class="regiter-text">Belum punya Akun? <a
                                href="{{ url('akun/register', []) }}">Register</a></span>
                    </div>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection