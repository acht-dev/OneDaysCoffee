<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Barang;

class BarangController extends Controller
{
    public function liatkopi(){
        $kopi = Barang::where('kategori','kopi')->get();
        return view('coffee',['coffee' => $kopi]);
    }
}