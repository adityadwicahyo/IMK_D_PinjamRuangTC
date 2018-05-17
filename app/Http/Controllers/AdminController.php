<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;

class AdminController extends Controller
{
    public function viewAdmin(){
    	Notification::whereId(1)->update([
			'tunggu' => 0,
		]);
    	$notification = Notification::whereId(1)->first();
		return view('main.admin', ['notification' => $notification]);
    }
    public function viewAdminPermohonan(){
    	$notification = Notification::whereId(1)->first();
		return view('main.adminlihatpermohonan', ['notification' => $notification]);
    }
    public function postKonfirmasi(Request $request){
        $data = $request->all();
        if($data['konfirmasi'] == 'setuju'){
            Notification::whereId(1)->increment('setuju');
        }
        if($data['konfirmasi'] == 'tolak'){
            Notification::whereId(1)->increment('tolak');
        }
        $notification = Notification::whereId(1)->first();
        return view('main.admin', ['notification' => $notification]);
    }
}
