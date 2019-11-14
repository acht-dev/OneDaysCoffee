<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Pengguna;

class UserController extends Controller
{
    //
    public function tambah()
    {
        return view('register');
    }

    public function store(Request $request){
        $this->validate($request,[
            'nama'=>'required',
            'email'=>'required',
            'no_tlp'=>'required',
            'username'=>'required',
            'pass'=>'required',
            'alamat'=>'required'
        ]);

        Pengguna::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_tlp' => $request->no_tlp,
            'username' => $request->username,
            'pass'=> $request->pass,
            'alamat'=>$request->alamat
        ]);
        return redirect('/home');
    }

    public function masuk(Request $request){
        $user = Pengguna::where('username',$request->username)->get();
        if(count($user)>0){
                Session::put('nama', $user[0]->nama);
                return redirect('/home');
        }else{
            return back()->with('salahlagi','Akun Tidak Ada');
        }
    }

    public function keluar(){
        Session::flush();
        return redirect('/login');
    }
}