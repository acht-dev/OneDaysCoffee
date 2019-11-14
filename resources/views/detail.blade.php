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
<div class="container p-4 my-3">

        <div class="row">
            <div class="col-5">
                <img src="img/OREO.jpg" class="img-fluid Detail_image rounded" id="detail_gambar" alt="detail gambar">
            </div>
            <div class="col-7 p-4 card">
                <div class="h3" id="detail_judul">Oreo Milkshake</div>
                <div class="h5" id="detail_harga">12.000 IDR</div>
                <div class="h6 font-weight-normal" id="detail_desc"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem sequi reprehenderit nulla eveniet a obcaecati voluptates quas repellendus alias? Possimus distinctio deserunt cupiditate, molestiae natus facilis eius consequuntur quo accusamus.</div>
                <div class="input-group my-auto">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-number"  data-type="minus" data-field="quant[1]">
                            <i class="fa fa-minus" aria-hidden="true"></i>
                        </button>
                    </span>
                    <input type="text" name="quant[1]" class="form-control col-2 input-number rounded mx-1 w-50" value="0" min="1" max="100">
                    <span class="input-group-btn">
                        <button type="button" class="btn  btn-number" data-type="plus" data-field="quant[1]">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </button>
                    </span>
                </div>
                <div class="row my-auto">
                    <div class="col-6">
                      <a href="keranjang.html" role="button" class="title_link">
                        <button type="button" class="btn btn-outline-danger w-100">
                            Beli
                        </button>
                      </a>
                    </div>
                    <div class="col-6">
                        <a href="/keranjang"><button type="button" class="btn btn-danger w-100">Masukan ke Keranjang</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="h3 my-3">Menu Rekomendasi Dari Kami</div>
        
        <div class="row">
            <div class="col-3">
                    <figure class="rounded bg-white shadow-sm Item border">                            
                              <img src="img/SWEET TEA.jpg" alt="" class="artikel-thumbnail w-100 card-img-top"> 
                          <div class="min-artikel-height">
                            <figcaption class="p-4 card-img-bottom d-block">
                              <div class="h6 mb-0 text-small text-muted">Sweet Tea</div>
                            </figcaption>
                          </div>
                              <figcaption class="pl-4 pb-2 card-img-bottom d-block">
                                <p class="h6 text-secondary">12000 IDR</p>
                              </figcaption>
                        </figure>
            </div>
            <div class="col-3">
                    <figure class="rounded bg-white shadow-sm Item border">                            
                              <img src="img/OREO CHOCO.jpg" alt="" class="artikel-thumbnail w-100 card-img-top"> 
                          <div class="min-artikel-height">
                            <figcaption class="p-4 card-img-bottom d-block">
                              <div class="h6 mb-0 text-small text-muted">Sweet Tea</div>
                            </figcaption>
                          </div>
                              <figcaption class="pl-4 pb-2 card-img-bottom d-block">
                                <p class="h6 text-secondary">12000 IDR</p>
                              </figcaption>
                        </figure>
            </div>
            <div class="col-3">
                    <figure class="rounded bg-white shadow-sm Item border">                            
                              <img src="img/MILKSHAKE CARAMEL.jpg" alt="" class="artikel-thumbnail w-100 card-img-top"> 
                          <div class="min-artikel-height">
                            <figcaption class="p-4 card-img-bottom d-block">
                              <div class="h6 mb-0 text-small text-muted">Sweet Tea</div>
                            </figcaption>
                          </div>
                              <figcaption class="pl-4 pb-2 card-img-bottom d-block">
                                <p class="h6 text-secondary">12000 IDR</p>
                              </figcaption>
                        </figure>
            </div>
            <div class="col-3">
                    <figure class="rounded bg-white shadow-sm Item border">                            
                              <img src="img/MILK TEA.jpg" alt="" class="artikel-thumbnail w-100 card-img-top"> 
                          <div class="min-artikel-height">
                            <figcaption class="p-4 card-img-bottom d-block">
                              <div class="h6 mb-0 text-small text-muted">Sweet Tea</div>
                            </figcaption>
                          </div>
                              <figcaption class="pl-4 pb-2 card-img-bottom d-block">
                                <p class="h6 text-secondary">12000 IDR</p>
                              </figcaption>
                        </figure>
            </div>
        </div>
    </div>
    {{-- <div class="col-md-12">
        <div class="row">
        <div class="col-md-3">
            <h1>ini foto</h1>
        </div>
        <div class="col-md-7">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis explicabo aliquam, dolorum facere cum accusamus unde consectetur ea illo rem, dignissimos beatae eveniet dolorem neque autem quas delectus odio error.</p>
            <h4>Mau Pesan Berapa?</h4>
            <input type="number" name="jumlah">
            <div class="row" style="margin-top:20px;">
                <div class="col-md-6">
                    <center><input type="submit" value="Masukkan Keranjang"></center>
                </div>
                <div class="col-md-6">
                    <center><input type="submit" value="Menuju Pembayaran"></center>
                </div>
            </div>
        </div>
    </div> --}}
@endsection