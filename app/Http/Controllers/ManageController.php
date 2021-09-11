<?php

namespace App;
namespace App\Http\Controllers;

use Auth;
use App\Book;
use Carbon\Carbon;
use App\Mail\BookSendmail;
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use Illuminate\Support\Facades\DB;


class ManageController extends Controller
{
      
     public function index()
     {
         $user_id = auth()->user()->id;
         $name = auth()->user()->name;
         $rsv = Book::where('user_id','=',$user_id)
         ->orderBy('updated_at','desc')
         ->first();
         $mail = auth()->user()->email;
         $today = Carbon::today('Asia/Tokyo');

         return view('/management/manage',compact('name','rsv','mail','today'));
     }

     public function edit() 
     {
           $user = auth()->user()->id;
           $rsv = Book::where('user_id','=',$user)
           ->orderBy('created_at','desc')
           ->first();
           
           if (isset($user,$rsv)) {
              return view('/management/edit',compact('user','rsv'));
             } else {
                return redirect()->route('top');
             }
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
        if (isset($user,$rsv)) {
           return view('/management/delete',compact('user','rsv'));
        } else {
         return redirect()->route('top');
        }
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
