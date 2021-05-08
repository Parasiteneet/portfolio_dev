<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MypageController extends Controller
{
    public function index() 
    {
            $name = auth()->user()->name;
            $mail = auth()->user()->email;
    
            return view('mypage', compact('name', 'mail'));
    }

}
