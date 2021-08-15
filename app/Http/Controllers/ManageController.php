<?php

namespace App;
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Book;
use Illuminate\Http\Request;
use Auth;

class ManageController extends Controller
{
     public function index()
     {
         $name = auth()->user()->name;
         return view('/management/manage',compact('name'));
     }

     public function edit(Request $request) 
     {
        $user_id = auth()->user()->id;;
        $booking = DB::table('books')
         ->where('user_id','=',$user_id)
         ->orderBy('created_at','desc')
         ->first();

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

        $inputs = $request->all();
     }
}
