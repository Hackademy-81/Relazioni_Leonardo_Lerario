<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
   public function home() {
    $products = Product::all()->sortDesc();
        return view('welcome', compact('products'));
    }
}
