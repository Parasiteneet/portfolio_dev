<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReserveController extends Controller
{
       /**
     * 予約画面の表示
     *
     * 
     */
    public function index() 
    {
        return view('/book.reserve');
    }
    
     /**
     * 予約画面で入力された画面を確認
     *
     * @param  Request  $request
     */
    public function confirm(Request $request) 
    {

        $request->validate([
            'booking-name' => 'required',
            'booking-tel' => 'required|unique',
            'booking-day' => 'required',
            'scheduled-time' => 'required',
            'form-comment' => 'max:100',
        ]);

        $inputs = $request->all();

        return view('/book.confirm', ['inputs' => $inputs,]);

    }

    public function thanks(Request $request) 
    {
        return view('/book/thanks');
    }


}
