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
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->
@endsection

@section('header')
    <div class="menu-content pb-60 col-lg-10">
        <div class="title text-center">
            <h1 class="mb-10">What kind of Coffee we serve for you</h1>
            <p>Who are in extremely love with eco friendly system.</p>
        </div>
    </div>
@endsection

@section('menu')
<div class="row">
        <div class="col-lg-4">
            <a href="">
                <div class="single-menu">
                    <div class="title-div justify-content-between d-flex">
                        <h4>Longblack</h4>
                        <p class="price float-right">
                            Rp. 7,000,00
                        </p>
                    </div>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advance.
                    </p>
                </div>
            </a>
            </div>
            <div class="col-lg-4">
            <a href="">
                <div class="single-menu">
                    <div class="title-div justify-content-between d-flex">
                        <h4>Vanilla Latte</h4>
                        <p class="price float-right">
                            Rp. 13,000,00
                        </p>
                    </div>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advance.
                    </p>
                </div>
            </a>
            </div>
            <div class="col-lg-4">
                <a href="">
                <div class="single-menu">
                    <div class="title-div justify-content-between d-flex">
                        <h4>Cappucino</h4>
                        <p class="price float-right">
                            Rp. 13,000,00
                        </p>
                    </div>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advance.
                    </p>
                </div>
            </a>
            </div>
</div>
@endsection