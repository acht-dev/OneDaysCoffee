@extends('layout.layout')

@section('menu')
<div class="container-fluid py-4 mt-4 rounded ">
  <div class="row d-flex justify-content-center">
      <div class="menu-content">
          <div class="title text-center">
              <h1 class="mb-10">Keranjang Anda</h1>
              <div class="font-weight-light">Siap Untuk membayar ?</div>
          </div>
      </div>
  </div>
</div>
<div class="container p-4 mb-3">
{{-- Keranjang item start --}}
      <div class="single-menu p-2 my-2">
          <div class="row">
            <div class="col-3">
              <img src="img/OREO CHOCO.jpg" class="img-fluid rounded" alt="detail gambar">
            </div>
            <div class="col-5 my-auto">
              <div class="h3" id="detail_judul">Oreo Milkshake</div>
              <div class="h5" id="detail_harga">12.000 IDR</div>
            </div>
            <div class="col-4 my-auto text-center">
              <div class="h4" id="detail_judul">Jumlah Barang</div>
              <div class="h5" id="detail_harga">X2</div>
            </div>
          </div>
        </div>
{{-- Keranjang item finish --}}
        
            <div class="row my-5">
              <div class="col-3"></div>
              <div class="col-5 my-auto">
                <div class="h5" id="detail_harga">Total Harga</div>
              </div>
              <div class="col-4 my-auto text-center">
                <div class="h5" id="text-success detail_harga">48.000</div>
              </div>
            </div>
            <div class="row my-5">
                <div class="col-12 "></div>
                <a href="/pembayaran" class="btn btn-danger btn-block">Lanjutkan ke Pembayaran</a>
                </div>
            </div>
  </div>
@endsection