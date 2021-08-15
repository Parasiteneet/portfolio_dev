<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MypageController extends Controller
{
    public function index() 
    {

        $user_id = auth()->user()->id;;
        $booking = DB::table('books')
         ->where('user_id','=',$user_id)
         ->orderBy('updated_at','desc')
         ->first();


            $name = auth()->user()->name;
            $mail = auth()->user()->email;
    
            return view('mypage', compact('name', 'mail','booking'));
    }

}
