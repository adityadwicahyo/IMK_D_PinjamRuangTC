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
}
