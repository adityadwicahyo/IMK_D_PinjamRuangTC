<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function viewLogin(){
    	return view('main.login');
    }

    public function viewReset(){
    	return view('main.resetpassword');
    }

    public function viewKonfirmasi(){
    	return view('main.konfirmasireset');
    }

    public function viewRegistrasi(){
    	return view('main.registrasi');
    }

    public function dologin(Request $r)
    {
        if($r->username=="admin@gmail.com")
        {
            return redirect('/admin');
        }
        else
        {
            return redirect('/');
        }
    }
}
