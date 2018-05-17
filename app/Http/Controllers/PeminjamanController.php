<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;

class PeminjamanController extends Controller
{
	// public $setuju;
	// public $tolak;
	public function viewPeminjaman(){
		Notification::whereId(1)->update([
			'setuju' => 0,
			'tolak' => 0,
		]);
		$notification = Notification::whereId(1)->first();
		return view('main.peminjaman', ['notification' => $notification]);
	}
    public function viewLihatPermohonan(){
    	$notification = Notification::whereId(1)->first();
		return view('main.lihatpermohonan', ['notification' => $notification]);
    }
    public function viewLihatPersetujuan(){
    	$notification = Notification::whereId(1)->first();
		return view('main.lihatpersetujuan', ['notification' => $notification]);
    }
}
