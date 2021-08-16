<?php

namespace App;
namespace App\Http\Controllers;

use Auth;
use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ManageController extends Controller
{
     public function index()
     {
         $name = auth()->user()->name;
         return view('/management/manage',compact('name'));
     }

     public function edit(Request $request) 
     {
        $user_id = auth()->user()->id;
        $booking = DB::table('books')
         ->where('user_id','=',$user_id)
         ->orderBy('created_at','desc')
         ->first();


      //   $booking = DB::table('books')
      //    ->where('user_id','=',$user_id)
      //    ->orderBy('created_at','desc')
      //    ->first();

        return view('/management/edit',compact('user_id','booking'));
     }

     public function update(Request $request)
     {
        $request->validate([
            'booking-name' => 'required|string',
            'booking-tel' => 'required|numeric',
            'booking-date' => 'required|date',
            'scheduled-time' => 'required',
        ]);

        $user = auth()->user()->id;
        $rsv = Book::where('user_id','=',$user)
        ->orderBy('created_at','desc')
        ->first();

        if ($user === $rsv->user_id) {
           $inputs = $request->all();
           $rsv->name = $request->input('booking-name');
           $rsv->tel = $request->input('booking-tel');
           $rsv->date = $request->input('booking-date');
           $rsv->time = $request->input('scheduled-time');
           $rsv->user_id = Auth::id();
           $rsv->save();
        } else {
         return redirect()
         ->route('manage');
        }
        return redirect()->route('mypage');
     }
}
