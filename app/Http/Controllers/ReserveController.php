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
            'booking-name' => 'required|string',
            'booking-tel' => 'required|numeric',
            'booking-date' => 'required|date',
            'scheduled-time' => 'required',
        ]);

        $inputs = $request->all();

        return view('/book.confirm', ['inputs' => $inputs]);

    }

    public function thanks(Request $request) 
    {
        return view('/book.thanks');
    }


}
