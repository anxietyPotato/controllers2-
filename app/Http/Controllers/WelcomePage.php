<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
class WelcomePage extends Controller
{

    public function index(){


        $hour = Carbon::now()->format('H'); // Using Carbon for accurate time retrieval

        $currentTime = date("h:i:s");

return view('welcome',compact('currentTime','hour',));


    }
}

