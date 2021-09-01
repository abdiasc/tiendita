<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function welcome(){

        $products = Product::all();
        return view('frontend.inicio', compact('products'));
    }
}
