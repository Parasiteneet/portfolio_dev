<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Book;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('.admin.index');
    }

    public function userList() {
        $user_list = User::orderBy('id','desc')->paginate(5);

        return view('.admin.user_list', compact('user_list'));
    }

    public function rsvList() {
        $infos = Book::with('users')->get('date','name');

        return view('.admin.rsv_list', compact('infos'));
    }

    public function userDetail($id) {
        $user = User::find($id);

        return view('.admin.user_detail', compact('user'));
    }

    public function userDelete(Request $request) {
        $user = User::find($request->input('delete'));
        $user_id = auth()->user()->id;
        $rsv = Book::where('user_id','=',$user_id)
        ->firstOrFail();
        ->delete();


        // $user->delete();

        return redirect()->route('user_list');
    }
}
