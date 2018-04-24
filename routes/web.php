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

Route::get('/ruangan', function(){
	return view('main.ruangan');
});

Route::get('/ruangan/pinjam/{id}', function(){
	return view('main.pinjam');
});
