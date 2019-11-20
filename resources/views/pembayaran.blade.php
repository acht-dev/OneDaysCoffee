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
<div class="alert alert-danger my-5 text-center" role="alert">
  Harap diperhatikan alamat pengiriman dan metode pembayaran secara teliti
</div>
<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12">
    <div class="h3 my-2 text-center">Data Pengiriman</div>
    <div class=" my-2 text-center text-muted">Tidak perlu dirubah jika sudah sesuai alamat anda</div>
    <div class="form-grup">
      <form action="">
        <input type="text" name="nama" class="form-control my-1" id="" placeholder="Nama">
        <input type="email" name="email" class="form-control my-1" id="" placeholder="Email">
        <input type="text" name="no_tlp" class="form-control my-1" id="" placeholder="No. Telepon">
        <textarea type="text" name="alamat" class="form-control my-1" rows="3" id="" placeholder="Alamat"></textarea>
        <button type="submit" value="Login" class="btn btn-danger btn-block my-1">Simpan Perubahan</button>
      </form>
    </div>
  </div>

  <div class="col-lg-6 col-md-6 col-sm-12">
    <div class="h3 my-2 text-center">Anda dapat melakukan pembayaran melalui beberapa pilihan dibawah</div>
    <div class="accordion" id="accordionExample">
      <div class="card my-1">
        <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseCOD">
          <div class="h5 mb-0">
          Cash On Delivery (COD)
          </div>
        </div>

        <div id="collapseCOD" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
            <!-- Content COD -->
            <div class="alert alert-success">Pembayaran COD hanya berlaku untuk pengiriman di daerah Bekasi dan Jakarta</div>
            <div>
              <div class="h6 my-2">Alur Pembayaran melalui COD</div>
              <div class="my-2 text-justify">
                Setelah melakukan pemesanan melalui web, tim kami akan mengirimkan pesan konfirmasi dan memberitahukan jadwal pengantaran.
              </div>
              <div class="my-2 text-justify">
                Diharapkan agar pelanggan untuk berada di alamat pengiriman saat jadwal pengantaran agar memudahkan dalam proses pembayaran.
              </div>
              <div class="my-2 text-justify">

              </div>
            </div>
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
            <div class="alert alert-success text-center">
              Lakukan pembayaran ke Rekening 
              <div class="font-weight-bold">BCA 3192341234</div>
               atas nama 
               <div class="font-weight-bold">Shyfa Andiantono</div>
               <div class="alert alert-warning text-center mt-2 mb-0">
                Harap konfirmasi bukti pembayaran ke no Whatsapp <div class="font-weight-bold">081214045009</div>
               </div>
            </div>
            <div>
              <div>
                *Untuk pengiriman keluar daerah Bekasi dan Jakarta akan dikenakan biaya tambahan untuk pembayaran kurir.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="d-flex justify-content-center my-5"> 
  <button type="submit" class="btn btn-danger w-25 my-1">Proses<i class="fa fa-arrow-right mx-2" aria-hidden="true"></i></button> 
</div>
@endsection