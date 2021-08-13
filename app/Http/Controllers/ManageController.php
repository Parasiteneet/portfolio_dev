<?php

namespace App;
namespace App\Http\Controllers;

use App\Book;

use Illuminate\Http\Request;
use Auth;

class ManageController extends Controller
{
     public function index()
     {
         $user = User::find($user->id);
         $book = Book::where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->first();

        //  if ($user === $id) {
        //      $book = Book::orderBy('created_at','desc')
        //      ->first();
        //  }

        // $book = Book::all();

         return view('/management/manage',compact('user','id'));
     }

     public function edit(Request $request) 
     {

        return view('/management/edit');
     }

     public function update(Request $request)
     {

     }
}
