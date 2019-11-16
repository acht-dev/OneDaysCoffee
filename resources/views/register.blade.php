@extends('layout.layout')

@section('header')
<div class="menu-content mt-5 col-lg-10">
    <div class="title text-center">
        <h1 class="mb-10">Pendaftaran Member</h1>
        <p>Yuk Registrasi Diri Kamu!</p>
    </div>
</div>
@endsection

@section('menu')

<div class="container w-50 my-4">
    <form method="POST" action="/store">
        {{ csrf_field() }}
    <div class="h6 p-2">Biodata</div>
      <input type="text" name="nama" class="form-control my-1" id="" aria-describedby="emailHelpId" placeholder="Nama">
      <input type="email" name="email" class="form-control my-1" id="" aria-describedby="emailHelpId" placeholder="Email">
      <input type="text" name="no_tlp" class="form-control my-1" id="" aria-describedby="emailHelpId" placeholder="No. Telepon">
      <textarea type="text" name="alamat" class="form-control my-1" rows="3" id="" aria-describedby="emailHelpId" placeholder="Alamat"></textarea>
      <div class="h6 mt-4 p-2">Akun</div>
      <input type="text" name="username" class="form-control my-1" id="" aria-describedby="emailHelpId" placeholder="Username Akun">
      <input type="password" name="pass" class="form-control my-1" id="" aria-describedby="emailHelpId" placeholder="Password Akun">
        <button type="submit" class="btn btn-danger btn-block" value="register">Registrasi</button>
        <p class="h5 mt-5 text-center">Sudah punya Akun ?</p>
        <a  class="btn btn-outline-danger btn-block my-1" href="/login">Login</a>
    </form>
</div>

{{-- <div class="col-lg-8 offset-lg-3">
    <form method="POST" action="/store">
        {{ csrf_field() }}
    <div class="row">
        <div class="col-md-3">
            <h4 style="margin-right: 10px">Nama</h4>
        </div>
        <div class="col-md-9">
            <input type="text" style="width: 300px;" name="nama">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <h4 style="margin-right: 10px">Email</h4>
        </div>
        <div class="col-md-9">
            <input type="email" style="width: 300px;" name="email">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <h4 style="margin-right: 10px">No. Telepon</h4>
        </div>
        <div class="col-md-9">
            <input type="text" style="width: 300px;" name="no_tlp">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <h4 style="margin-right: 10px">Username Akun</h4>
        </div>
        <div class="col-md-9">
            <input type="text" style="width: 300px;" name="username">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <h4 style="margin-right: 10px">Password Akun</h4>
        </div>
        <div class="col-md-9">
            <input type="password" style="width: 300px;" name="pass">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <h4 style="margin-right: 10px">Alamat</h4>
        </div>
        <div class="col-md-9">
            <textarea style="width: 300px;" name="alamat">
            </textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <p>Sudah Ada Akun?<a href="/login">Login</a></p>
        </div>
        <div class="col-md-9">
            <input type="submit" value="register">
        </div>
    </div>
</form>
</div> --}}
@endsection