@extends('layout.layout')

<!-- Start video-sec Area -->

<!-- End video-sec Area -->

<!-- Start menu Area -->
@section('menu')
<div class="container-fluid bg-coffee py-5 my-4 rounded" style="background:url({{asset('/img/banner-02.jpg')}})">
    <div class="row d-flex justify-content-center">
        <div class="menu-content">
            <div class="title text-center">
                <h1 class="mb-10 text-white">One Days Roasted Beans</h1>
            </div>
        </div>
    </div>
</div>
<section class="menu-area" id="coffee">
    <div class="container">
        <div class="row">
            {{-- @foreach($coffee as $k) --}}
            <div class="col-4">
                    <a href="/detail">
                        <figure class="single-menu p-2">                            
                            <img src="img/OREO CHOCO.jpg" class="rounded w-100 card-img-top"> 
                            <div class="min-artikel-height">
                            <figcaption class="title-div justify-content-between d-flex py-3">
                                {{-- <div class="h4 text-muted mx-auto">{{$k->nama_barang}}</div>
                                <p class="h4 price float-right mx-auto">Rp. {{$k->harga}}</p> --}}
                            </figcaption>
                            <p class="p-3 text-dark">
                                {{-- {{$k->deskripsi}}  --}}
                            </p>
                            </div>
                        </figure>
                    </a>
            </div>
            {{-- @endforeach --}}
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