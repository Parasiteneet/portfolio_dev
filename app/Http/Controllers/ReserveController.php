<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\BookSendmail;

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
        $request->validate([
            'booking-name' => 'required|string',
            'booking-tel' => 'required|numeric',
            'booking-date' => 'required|date',
            'scheduled-time' => 'required',
        ]);

        $action = $request->input('action');

        $inputs = $request->except('action');

        if($action !== 'submit') {
            return redirect()
            ->route('reserve')
            ->withInput($inputs);// セッション(_old_input)に入力値すべてを入れる
        } else {
            $inputs = $request->all();
            $to = "wumabeatboxer@gmail.com";
            \Mail::to($to)->send(new BookSendmail($inputs));
        }

        return view('/book.thanks');
    }


}
