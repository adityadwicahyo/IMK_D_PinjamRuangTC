<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;

class HomeController extends Controller
{
    public function viewHome(){
    	$notification = Notification::whereId(1)->first();
		return view('main.home', ['notification' => $notification]);
    }
}
