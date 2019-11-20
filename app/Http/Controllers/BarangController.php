<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Barang;

class BarangController extends Controller
{
    public function liatkopi(){
        $kopi = Barang::where('kategori','Kopi')->get();
        return view('coffee',['coffee' => $kopi]);
    }
    public function liatbiji(){
        $bijih = Barang::where('kategori','Biji')->get();
        return view('bijih',['bijih' => $bijih]);
    }
    public function liatbubuk(){
        $bubuk = Barang::where('kategori','Bubuk')->get();
        return view('bubuk',['bubuk' => $bubuk]);
    }
}