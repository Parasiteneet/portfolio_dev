<?php

namespace App;
namespace App\Http\Controllers;

use Auth;
use App\Book;
use App\Mail\BookSendmail;
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use Illuminate\Support\Facades\DB;


class ManageController extends Controller
{
      
     public function index()
     {
         $name = auth()->user()->name;
         return view('/management/manage',compact('name'));
     }

     public function edit() 
     {
        $user = auth()->user()->id;
        $rsv = Book::where('user_id','=',$user)
        ->orderBy('created_at','desc')
        ->first();
        return view('/management/edit',compact('user','rsv'));
     }

     public function update(BookRequest $request)
     {
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

           $inputs = $request->all();
           $to = "wumabeatboxer@gmail.com";
           \Mail::to($to)->send(new BookSendmail($inputs));
        } else {
         return redirect()->route('manage');
        }
        return redirect()->route('mypage');
     }

     public function delete(Request $request) 
     {
         $user = auth()->user()->id;
         $rsv = Book::where('user_id','=',$user)
         ->orderBy('created_at','desc')
         ->first();
         return view('/management/delete',compact('user','rsv'));
      } 

      public function erase(Request $request) 
      {
         $user = auth()->user()->id;
         $rsv = Book::where('user_id','=',$user)
         ->orderBy('created_at','desc')
         ->first();

         if ($user === $rsv->user_id) {
            $rsv->delete();
         } else {
            return redirect()->route('manage');
         }
         return redirect()->route('mypage');
      }
}
