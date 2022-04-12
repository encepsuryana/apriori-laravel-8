@extends('layouts.frontend')
@section('content')
<div class="container" style="height: 66vh; text-align: center;">
       <h2 style='margin-top: 12vh;'>Selamat Datang!!
    </h2>
       <!-- show status -->
         <p>{{ $status }}</p>
       <a href="{{ url('/akun', []) }}" class="btn btn-success">Login Sekarang</a>

</div>
@endsection