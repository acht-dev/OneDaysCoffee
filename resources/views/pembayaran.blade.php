@extends('layout.layout')

@section('menu')
<div class="container-fluid py-4 mt-4 rounded ">
  <div class="row d-flex justify-content-center">
      <div class="menu-content">
          <div class="title text-center">
              <h1 class="mb-10">Pembayaran</h1>
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
              <div class="h5" >ID Pemesanan : DB1234422</div>
              <div class="h3" >Total Pembayaran :</div>
            </div>
            <div class="col-4 my-auto text-center">
              <div class="h5" ></div>
              <div class="h3" >Rp 24.000</div>
            </div>
          </div>
        </div>
{{-- Keranjang item finish --}}
        
<div class="alert alert-danger my-5 text-center" role="alert">
  Segera lakukan pembayaran paling lambat 2x24 Jam
</div>

<div class="h3 my-2 text-center">Anda dapat melakukan pembayaran melalui beberapa pilihan dibawah</div>

<div class="accordion" id="accordionExample">
  <div class="card my-1">
    <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseCOD">
      <div class="h5 mb-0">
       Cash On Delivery (COD)
      </div>
    </div>

    <div id="collapseCOD" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <!-- Content COD -->
      </div>
    </div>
  </div>
  <div class="card my-1">
    <div class="card-header" id="headingTwo" data-toggle="collapse" data-target="#collapseATM">
      <div class="h5 mb-0">
       Transfer ATM (BCA)
      </div>
    </div>

    <div id="collapseATM" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <!-- Content TF -->
      </div>
    </div>
  </div>
 </div>
@endsection