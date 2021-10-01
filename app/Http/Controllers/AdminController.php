<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Book;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showLoginForm() {
        return view('admin.admin_login');
    }
 
    public function login(Request $request) {
        $user_email = $request->input('email');
        $pin = $request->input('pin');

        if ($user_email == "admin@gmail.com" && $pin == '00000000') {
            $request->session()->put('admin_auth', true);

            return redirect()->route('admin');
        }

        return redirect()->route('admin_login')->withErrors([
            'login' => 'ユーザIDまたはパスワードが間違っています'
        ]);
    }
    
    public function logout(Request $request) {
        $request->session()->forget('admin_auth');
       
        return redirect()->route('top');
    }

    public function index() {
        return view('.admin.index');
    }

    public function userList() {
        $user_list = User::orderBy('id','desc')->paginate(5);

        return view('.admin.user_list', compact('user_list'));
    }

    public function rsvList() {
        $infos = User::with('books')
        ->paginate(5);

        return view('.admin.rsv_list', compact('infos'));
    }

    public function userDetail($id) {
        $user = User::find($id);

        return view('.admin.user_detail', compact('user'));
    }

    public function userDelete(Request $request) {
        
        try {
            $user = User::find($request->input('delete'));
            $user_id = auth()->user()->id;
            $rsv = Book::where('user_id','=',$user_id)->delete();
            $user->delete();
    
            return view('.admin.cancel');
        } catch (\Exception $e) {
            return redirect()->route('admin');
        }
    }
}
