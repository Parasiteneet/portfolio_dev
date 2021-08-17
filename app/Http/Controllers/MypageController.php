<?php

namespace App\Http\Controllers;

use Auth;
use Carbon\Carbon;
use App\Book;
use Illuminate\Http\Request;

class MypageController extends Controller
{
    public function index() 
    {

        $user_id = auth()->user()->id;;
        $rsv = Book::where('user_id','=',$user_id)
         ->orderBy('updated_at','desc')
         ->first();
        $name = auth()->user()->name;
        $mail = auth()->user()->email;
        $today = Carbon::today('Asia/Tokyo');

    
            return view('mypage', compact('name', 'mail','rsv','today'));
    }

}
