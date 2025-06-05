<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\ProductModel; // ✅ Correct namespace for the model
class WelcomePage extends Controller
{

    public function index(){


        $hour = Carbon::now()->format('H'); // Using Carbon for accurate time retrieval

        $currentTime = date("h:i:s");

        $latestProducts = ProductModel::orderBy('updated_at', 'desc') // Sort by latest updated
        ->orderBy('created_at', 'desc') // Sort by latest inserted
        ->take(6) // Get only last 6 entries
        ->get();

        return view('welcome', compact('currentTime', 'hour', 'latestProducts'));



    }

}
