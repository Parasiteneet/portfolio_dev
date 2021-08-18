<?php

namespace App\Http\Controllers;

use Auth;
use App\Book;
use App\Mail\BookSendmail;
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;

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
    public function confirm(BookRequest $request) 
    {
        $inputs = $request->all();

        return view('/book.confirm', ['inputs' => $inputs]);
    }

    public function thanks(BookRequest $request) 
    {
        $action = $request->input('action');

        $inputs = $request->except('action');

        if($action !== 'submit') {
            return redirect()
            ->route('reserve')
            ->withInput($inputs);// セッション(_old_input)に入力値すべてを入れる
        } else {
            $booking = new Book;
            $booking->name = $request->input('booking-name');
            $booking->tel = $request->input('booking-tel');
            $booking->date = $request->input('booking-date');
            $booking->time = $request->input('scheduled-time');;
            $booking->user_id = Auth::id();

            $booking->save();

            $inputs = $request->all();
            $to = "wumabeatboxer@gmail.com";
            \Mail::to($to)->send(new BookSendmail($inputs));
        }

         $name = auth()->user()->name;
         return view('book.thanks',compact('name'));
        // return redirect()->route('manage');
    }
}
