@extends('layout.layout')

@section('banner')
<!-- start banner Area -->
<section class="banner-area" style="background:url({{asset('/img/etalase3.jpg')}})" id="home">
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-start">
            <div class="banner-content col-lg-7">
                <h6 class="text-white text-uppercase">Now you can feel the Energy</h6>
                <h1>
                    Start your day with <br>
                    a black Coffee
                </h1>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->
@endsection
<!-- Start video-sec Area -->

<!-- End video-sec Area -->

<!-- Start menu Area -->
@section('menu')
<section class="menu-area section-gap" id="coffee">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">Menu Coffee One's Day</h1>
                    <br>
                    <h3>Espresso Based</h3>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($coffee as $k)
            <div class="col-lg-4">
                <a href="/detail">
                    <div class="single-menu">
                        <div class="title-div justify-content-between d-flex">
                            <h4>{{$k->nama_barang}}</h4>
                            <p class="price float-right">
                                Rp. {{$k->harga}}
                            </p>
                        </div>
                        <p>
                            {{$k->deskripsi}}
                        </p>
                    </div>
                </a>
                </div>
            @endforeach
            
            <div class="col-lg-12" style="margin-top:20px; margin-bottom:20px">
                <h3 align="center">Non Coffee</h3>
            </div>
            <div class="col-lg-4">
                <a href="/detail">
                    <div class="single-menu">
                        <div class="title-div justify-content-between d-flex">
                            <h4>Oreo</h4>
                            <p class="price float-right">
                                Rp. 14,000,00
                            </p>
                        </div>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advance.
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
<!-- End menu Area -->

<!-- Start gallery Area -->

<!-- End gallery Area -->

<!-- Start review Area -->

<!-- End review Area -->

<!-- Start blog Area -->

<!-- End blog Area -->