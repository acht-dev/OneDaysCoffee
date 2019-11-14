<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('beranda');
});
Route::get('home', function(){
    return view('beranda');
});
Route::get('coffee', function(){
    return view('coffee');
});
Route::get('bubuk', function(){
    return view('bubuk');
});
Route::get('bijih', function(){
    return view('bijih');
});
Route::get('about', function(){
    return view('about');
});
Route::get('register', function(){
    return view('register');
});
Route::get('login', function(){
    return view('login');
});
Route::get('detail', function(){
    return view('detail');
});
Route::get('keranjang', function(){
    return view('keranjang');
});

Route::get('/register', 'UserController@tambah');
Route::post('/store', 'UserController@store');

Route::get('/coffee','BarangController@liatkopi');

Route::post('/login', 'UserController@masuk');

Route::get('logout', 'UserController@keluar');