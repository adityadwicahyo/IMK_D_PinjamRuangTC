<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;

class ProfileController extends Controller
{
    public function viewEditProfile(){
    	$notification = Notification::whereId(1)->first();
        return view('main.editprofile', ['notification' => $notification]);
    }
    public function viewProfile(){
    	$notification = Notification::whereId(1)->first();
        return view('main.profile', ['notification' => $notification]);
    }
    public function postEditProfile(){
    	return redirect('/profile')->withErrors(array('Success' => 'Berhasil memperbarui informasi Anda.
    	'));
    }
}
