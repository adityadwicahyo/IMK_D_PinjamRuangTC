<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function viewEditProfile(){
    	return view('main.editprofile');
    }
    public function viewProfile(){
    	return view('main.profile');
    }
    public function postEditProfile(){
    	return redirect('/profile')->withErrors(array('Success' => 'Berhasil memperbarui informasi Anda.
    	'));
    }
}
