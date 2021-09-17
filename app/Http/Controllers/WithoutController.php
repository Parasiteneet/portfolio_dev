<?php

namespace App\Http\Controllers;

use Auth;
use App\Book;
use App\Mail\BookSendmail;
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;

class WithoutController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('mypage');
          } else {
            return view('/without.input');
          }
    }

    public function check(BookRequest $request) 
    {
        $inputs = $request->all();

        return view('/without.check', ['inputs' => $inputs]);
    }

    public function done(BookRequest $request) 
    {
        {
            $action = $request->input('action');
    
            $inputs = $request->except('action');
    
                if($action !== 'submit') {
                    return redirect()
                    ->route('input')
                    ->withInput($inputs);// セッション(_old_input)に入力値すべてを入れる
                } else {
                    $booking = new Book;
                    $booking->name = $request->input('booking-name');
                    $booking->tel = $request->input('booking-tel');
                    $booking->date = $request->input('booking-date');
                    $booking->time = $request->input('scheduled-time');;
                    $booking->user_id = NULL;
        
                    $booking->save();
        
                    $inputs = $request->all();
                    $to = "wumabeatboxer@gmail.com";
                    \Mail::to($to)->send(new BookSendmail($inputs));
                }
           return view('without.done');
        }
    }
}
