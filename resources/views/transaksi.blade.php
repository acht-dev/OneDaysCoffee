@extends('layout.layout')

@section('menu')
<div class="container-fluid py-4 mt-4 rounded ">
  <div class="row d-flex justify-content-center">
      <div class="menu-content">
          <div class="title text-center">
              <h1 class="mb-10">Transaksi Anda</h1>
              <div class="font-weight-light">Barang yang pernah anda beli</div>
          </div>
      </div>
  </div>
</div>
<div class="container p-4 mb-3">
{{-- Keranjang item start --}}
      <div class="single-menu p-2 my-2">
          <div class="row">
            <div class="col-lg-3 col-12">
              <img src="img/OREO CHOCO.jpg" class="img-fluid rounded" alt="detail gambar">
            </div>
            <div class="col-lg-5 col-12 my-auto">
              <div class="h5" >ID Pemesanan : DB1234422</div>
              <div class="h6 my-1">Rangkuman Belanja :</div>
              <!-- List belanja -->
              <div>Capuchino</div>
              <div>Capuchino</div>
              <div>Capuchino</div>
              <!-- list belanja end -->
            </div>
            <div class="col-lg-4 col-12 my-auto text-center">
              <div class="h4" >Total Pembayaran</div>
              <div class="h3" >Rp 24.000</div>
            </div>
          </div>
        </div>
{{-- Keranjang item finish --}}

{{-- Keranjang item start --}}
      <div class="single-menu p-2 my-2">
          <div class="row">
            <div class="col-lg-3 col-12">
              <img src="img/OREO CHOCO.jpg" class="img-fluid rounded" alt="detail gambar">
            </div>
            <div class="col-lg-5 col-12 my-auto">
              <div class="h5" >ID Pemesanan : DB1234422</div>
              <div class="h6 my-1">Rangkuman Belanja :</div>
              <!-- List belanja -->
              <div>Capuchino</div>
              <div>Capuchino</div>
              <div>Capuchino</div>
              <!-- list belanja end -->
            </div>
            <div class="col-lg-4 col-12 my-auto text-center">
              <div class="h4" >Total Pembayaran</div>
              <div class="h3" >Rp 24.000</div>
            </div>
          </div>
        </div>
{{-- Keranjang item finish --}}

{{-- Keranjang item start --}}
      <div class="single-menu p-2 my-2">
          <div class="row">
            <div class="col-lg-3 col-12">
              <img src="img/OREO CHOCO.jpg" class="img-fluid rounded" alt="detail gambar">
            </div>
            <div class="col-lg-5 col-12 my-auto">
              <div class="h5" >ID Pemesanan : DB1234422</div>
              <div class="h6 my-1">Rangkuman Belanja :</div>
              <!-- List belanja -->
              <div>Capuchino</div>
              <div>Capuchino</div>
              <div>Capuchino</div>
              <!-- list belanja end -->
            </div>
            <div class="col-lg-4 col-12 my-auto text-center">
              <div class="h4" >Total Pembayaran</div>
              <div class="h3" >Rp 24.000</div>
            </div>
          </div>
        </div>
{{-- Keranjang item finish --}}

@endsection