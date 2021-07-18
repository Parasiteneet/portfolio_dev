<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class CalendarController extends Controller
{   
    public function show()
    {
        $dt = Carbon::now();
        $dt->timezone = 'Asia/Tokyo';

        return view('calendar')->with('dt', $dt);
    }

}
