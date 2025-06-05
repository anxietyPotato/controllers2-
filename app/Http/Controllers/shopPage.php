<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shopPage extends Controller
{
    public function index(){
        $products = [
            "iPhone 16","Redmi 11","samsung 52","iPhone 14"
        ];
        return view('shop',compact('products'));
    }
}
