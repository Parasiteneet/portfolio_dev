<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{

    public function show()
    {
        return view('/book.test');
    }

    public function test() 
    {
        DB::table('books')->insert([
            'id' => '1',
            'name' => 'Yuma Teramoto',
            'tel' => '08032940624',
            'date' => date('Y-m-d H:i:s'),
            'time' => 1730,
            'user_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
