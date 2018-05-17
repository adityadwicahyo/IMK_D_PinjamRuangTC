<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;

class RuanganController extends Controller
{
    public function viewRuangan(){
    	$notification = Notification::whereId(1)->first();
        return view('main.ruangan', ['notification' => $notification]);
    }

    public function viewPinjam(){
    	$notification = Notification::whereId(1)->first();
        return view('main.pinjam', ['notification' => $notification]);
    }
    public function postPinjam(){
        Notification::whereId(1)->increment('tunggu');
    	return redirect('/ruangan')->withErrors(array('Success' => 'Berhasil mengajukan permohonan peminjaman.
    	'));
    }
}
