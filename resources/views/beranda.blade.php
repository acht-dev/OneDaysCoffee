@extends('layout.layout')

@section('banner')
<!-- start banner Area -->
<section class="banner-area" id="home">
    <div class="container-fluid">
        <div class="row d-flex align-items-center justify-content-start">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-caption d-block">
                            <p class="h1 my-3 home_title" style="font-size: 50px;">One Days Coffee Shop</p>
                            <p style="font-size: 20px;">Untuk para pencinta kopi dan penikmat senja</p>
                        </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/etalase1.jpg" class="slider-home d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/etalase3.jpg" class="slider-home d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>
<!-- End banner Area -->
@endsection

@section('header')
    <div class="menu-content pb-60 col-lg-10">
        <div class="title text-center">
            <h1 class="mb-10">Our Coffee Selection</h1>
            <p>Untuk Penikmat Senja</p>
        </div>
    </div>
@endsection

@section('menu')
<div class="row">
    {{-- Item Start --}}
        <div class="col-3">
            <a href="">
                    <figure class="single-menu p-1">                            
                        <img src="img/OREO CHOCO.jpg" class="rounded w-100 card-img-top"> 
                        <div class="min-artikel-height">
                        <figcaption class="title-div justify-content-between d-flex py-3">
                            <div class="h4 text-muted mx-auto">Sweet Tea</div>
                            <p class="h4 price float-right mx-auto">12000 IDR</p>
                        </figcaption>
                        <p class="p-3">
                            Choco Milkshake with oreo topping 
                        </p>
                        </div>
                    </figure>
            </a>
        </div>
    {{-- item Finish --}}
      {{-- Item Start --}}
      <div class="col-3">
            <a href="">
                    <figure class="single-menu p-1">                            
                        <img src="img/OREO CHOCO.jpg" class="rounded w-100 card-img-top"> 
                        <div class="min-artikel-height">
                        <figcaption class="title-div justify-content-between d-flex py-3">
                            <div class="h4 text-muted mx-auto">Sweet Tea</div>
                            <p class="h4 price float-right mx-auto">12000 IDR</p>
                        </figcaption>
                        <p class="p-3">
                            Choco Milkshake with oreo topping 
                        </p>
                        </div>
                    </figure>
            </a>
        </div>
    {{-- item Finish --}}
      {{-- Item Start --}}
      <div class="col-3">
            <a href="">
                    <figure class="single-menu p-1">                            
                        <img src="img/OREO CHOCO.jpg" class="rounded w-100 card-img-top"> 
                        <div class="min-artikel-height">
                        <figcaption class="title-div justify-content-between d-flex py-3">
                            <div class="h4 text-muted mx-auto">Sweet Tea</div>
                            <p class="h4 price float-right mx-auto">12000 IDR</p>
                        </figcaption>
                        <p class="p-3">
                            Choco Milkshake with oreo topping 
                        </p>
                        </div>
                    </figure>
            </a>
        </div>
    {{-- item Finish --}}
      {{-- Item Start --}}
      <div class="col-3">
            <a href="">
                    <figure class="single-menu p-1">                            
                        <img src="img/OREO CHOCO.jpg" class="rounded w-100 card-img-top"> 
                        <div class="min-artikel-height">
                        <figcaption class="title-div justify-content-between d-flex py-3">
                            <div class="h4 text-muted mx-auto">Sweet Tea</div>
                            <p class="h4 price float-right mx-auto">12000 IDR</p>
                        </figcaption>
                        <p class="p-3">
                            Choco Milkshake with oreo topping 
                        </p>
                        </div>
                    </figure>
            </a>
        </div>
    {{-- item Finish --}}
</div>
@endsection