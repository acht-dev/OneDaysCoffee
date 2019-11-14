@extends('layout.layout')
@section('banner')
<!-- start banner Area -->
<section class="banner-area" id="home">
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-start">
            <div class="banner-content col-lg-7">
                <h6 class="text-white text-uppercase">Now you can feel the Energy</h6>
                <h1>
                    Start your day with <br>
                    a black Coffee
                </h1>
                <a href="#" class="primary-btn text-uppercase">Buy Now</a>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->
@endsection
@section('header')
<div class="menu-content pb-60 col-lg-10">
    <div class="title text-center">
        <h1 class="mb-10">Pendaftaran Member</h1>
        <p>Yuk Registrasi Diri Kamu!</p>
    </div>
</div>
@endsection

@section('menu')
<div class="col-lg-8 offset-lg-3">
    <form action="/login" method="POST">
        {{ csrf_field() }}
    <div class="row">
        <div class="col-md-3">
            <h4 style="margin-right: 10px">Username</h4>
        </div>
        <div class="col-md-9">
            <input type="text" style="width: 300px;" name="username">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <h4 style="margin-right: 10px">Password</h4>
        </div>
        <div class="col-md-9">
            <input type="password" style="width: 300px;" name="pass">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <p>Belum Ada Akun?<a href="/register"> Register Aja!</a></p>
        </div>
        <div class="col-md-9">
            <input type="submit" value="Login">
        </div>
    </div>
</form>
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
