@extends('layout.layout')

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
        <div class="h1 my-4">Keranjang</div>
      <div class="card my-2">
        <div class="row">
          <div class="col-2">
            <img src="img/OREO.jpg" class="img-fluid keranjang_image rounded" id="detail_gambar" alt="detail gambar">
          </div>
          <div class="col-5 my-auto">
            <div class="h3" id="detail_judul">Oreo Milkshake</div>
            <div class="h5" id="detail_harga">12.000 IDR</div>
          </div>
          <div class="col-4 my-auto text-center">
            <div class="h3" id="detail_judul">Jumlah Barang</div>
            <div class="h5" id="text-success detail_harga">X2</div>
          </div>
        </div>
      </div>  

      <div class="card my-2">
          <div class="row">
            <div class="col-2">
              <img src="img/OREO CHOCO.jpg" class="img-fluid keranjang_image rounded" id="detail_gambar" alt="detail gambar">
            </div>
            <div class="col-5 my-auto">
              <div class="h3" id="detail_judul">Oreo Milkshake</div>
              <div class="h5" id="detail_harga">12.000 IDR</div>
            </div>
            <div class="col-4 my-auto text-center">
              <div class="h3" id="detail_judul">Jumlah Barang</div>
              <div class="h5" id="text-success detail_harga">X2</div>
            </div>
          </div>
        </div>

        
            <div class="row my-5">
              <div class="col-2"></div>
              <div class="col-5 my-auto">
                <div class="h5" id="detail_harga">Total Harga</div>
              </div>
              <div class="col-4 my-auto text-center">
                <div class="h5" id="text-success detail_harga">48.000</div>
              </div>
            </div>
            <div class="row my-5">
                <div class="col-12 "></div>
                <button type="button" class="btn btn-danger btn-block">Lanjutkan ke Pembayaran</button>
                </div>
              </div>
  </div>
@endsection