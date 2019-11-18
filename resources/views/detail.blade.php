@extends('layout.layout')

@section('menu')
<div class="container p-4 my-3">
    {{-- Start Detail --}}
        <div class="row single-menu py-5 ">
            <div class="col-5">
                <img src="img/OREO CHOCO.jpg" class="img-fluid Detail_image rounded" id="detail_gambar" alt="detail gambar">
            </div>
            <div class="col-7 p-4">
                <div class="">
                    <div class="h3 my-2" >Oreo Milkshake</div>
                    <div class="h5 my-2" >12.000 IDR</div>
                    <div class="h6 my-2 font-weight-normal text-justify"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem sequi reprehenderit nulla eveniet a obcaecati voluptates quas repellendus alias? Possimus distinctio deserunt cupiditate, molestiae natus facilis eius consequuntur quo accusamus.</div>
                </div>
                <div class="input-group my-4">
                    <span class="input-group-btn">
                        <button type="button" class="btn bg-white btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                            <span class="fa fa-minus"></span>
                        </button>
                    </span>
                    <input type="text" name="quant[1]" class="form-control input-number col-2 mx-2 w-25 rounded" value="1" min="1" max="100">
                    <span class="input-group-btn">
                        <button type="button" class="btn bg-white btn-number" data-type="plus" data-field="quant[1]">
                            <span class="fa fa-plus"></span>
                        </button>
                    </span>
                </div>
                <div class="row my-3">
                    </div>
                    <div class="col-12 p-0">
                        <a href="/keranjang"><button type="button" class="btn btn-danger w-100">Masukan ke Keranjang</button></a>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Detail --}}
        <div class="h3 my-3 pt-5">Menu Rekomendasi Dari Kami</div>
        <div class="row my-1">
            <div class="col-3">
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