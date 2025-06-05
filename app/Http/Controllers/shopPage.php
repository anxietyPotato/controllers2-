<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;

class shopPage extends Controller
{
    public function index(){
  $product = ProductModel::all();
        return view('shop',compact('product'));

    }
}
