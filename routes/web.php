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
    return view('layouts.master');
});

Route::get('/test', function () {
    return view('main.index');
});

Route::get('/ruangan','RuanganController@viewRuangan');
Route::get('/ruangan/pinjam','RuanganController@viewPinjam');
Route::post('/ruangan/pinjam','RuanganController@postPinjam');

Route::get('/peminjaman','PeminjamanController@viewPeminjaman');
Route::get('/peminjaman/lihatpermohonan','PeminjamanController@viewLihatPermohonan');
Route::get('/peminjaman/lihatpersetujuan','PeminjamanController@viewLihatPersetujuan');

Route::get('/alur','AlurController@viewAlur');