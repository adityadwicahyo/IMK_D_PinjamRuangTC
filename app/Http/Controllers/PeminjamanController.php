<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function viewPeminjaman(){
    	return view('main.peminjaman');
    }
    public function viewLihatPermohonan(){
    	return view('main.lihatpermohonan');
    }
    public function viewLihatPersetujuan(){
    	return view('main.lihatpersetujuan');
    }
}
