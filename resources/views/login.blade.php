@extends('layout.layout')

@section('header')
<div class="container-fluid mt-5">
    <div class="title text-center">
        <h1 class="mb-10">Pendaftaran Member</h1>
        <p>Yuk Registrasi Diri Kamu!</p>
    </div>
</div>
@endsection

@section('menu')

<div class="container w-50 my-4">
<form action="/login" method="POST">
    {{ csrf_field() }}
    <input name="username" type="text" class="form-control my-1" placeholder="Username">
    <input name="pass" type="password" class="form-control my-1" id="exampleInputPassword1" placeholder="Password">
    <button type="submit" value="Login" class="btn btn-danger btn-block my-1">Login</button>
    <p class="h5 mt-5 text-center">Belum punya Akun ?</p>
    <a  class="btn btn-outline-danger btn-block my-1" href="/register">Register</a>
</form>
</div>

    {{-- <script>
        // $('#myModal').modal('show')
        if({{session::has('salahlagi')}}){
            alert({{session::get('salahlagi')}});
        }
    </script> --}}
    <script>
            var msg = '{{Session::get('salahlagi')}}';
            var exist = '{{Session::has('salahlagi')}}';
            if(exist){
              alert(msg);
            }
          </script>
@endsection
