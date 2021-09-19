<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Book;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $users = User::all();
        return view('.admin.index', compact('users'));
    }
}
