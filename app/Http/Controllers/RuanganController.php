<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RuanganController extends Controller
{
    public function viewRuangan(){
    	return view('main.ruangan');
    }

    public function viewPinjam(){
    	return view('main.pinjam');
    }
    public function postPinjam(){
    	return redirect('/ruangan')->withErrors(array('Success' => 'Berhasil mengajukan permohonan peminjaman. Silahkan pilih menu Peminjaman untuk perkembangan permohonan pinjam ruang Anda.
    	'));
    }
}
