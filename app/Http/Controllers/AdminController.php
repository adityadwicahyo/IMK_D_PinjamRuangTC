<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewAdmin(){
    	return view('main.admin');
    }
    public function viewAdminPermohonan(){
    	return view('main.adminlihatpermohonan');
    }
}
