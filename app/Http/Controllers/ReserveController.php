<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReserveController extends Controller
{
    public function index() 
    {
        return view('/book/reserve');
    }
    
    public function confirm(Request $request) 
    {
        return view('/book/confirm');
    }

    public function thanks(Request $request) 
    {
        return view('/book/thanks');
    }


}
