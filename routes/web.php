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

// Route::get('/', function () {
//     return view('main.home');
// });

Route::get('/','HomeController@viewHome');

Route::post('/','LoginController@dologin');

Route::get('/test', function () {
    return view('main.index');
});

Route::get('/ruangan','RuanganController@viewRuangan');
Route::get('/ruangan/pinjam','RuanganController@viewPinjam');
Route::post('/ruangan/pinjam','RuanganController@postPinjam');

Route::get('/peminjaman','PeminjamanController@viewPeminjaman');
Route::get('/peminjaman/lihatpermohonan','PeminjamanController@viewLihatPermohonan');
Route::get('/peminjaman/lihatpersetujuan','PeminjamanController@viewLihatPersetujuan');

Route::get('/logins','LoginController@viewLogin');
Route::get('/reset', 'LoginController@viewReset');
Route::get('/registrasi', 'LoginController@viewRegistrasi');
Route::get('/reset/konfirmasi', 'LoginController@viewKonfirmasi');

Route::get('/alur','AlurController@viewAlur');

Route::get('/profile/edit','ProfileController@viewEditProfile');
Route::get('/profile','ProfileController@viewProfile');
Route::post('/profile','ProfileController@postEditProfile');

Route::get('/admin','AdminController@viewAdmin');
Route::post('/admins','AdminController@postKonfirmasi');
Route::get('/admin/permohonan','AdminController@viewAdminPermohonan');