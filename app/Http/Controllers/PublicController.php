<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
   public function home() {
    $products = Product::all()->sortDesc();
        return view('welcome', compact('products'));
    }

    public function destroy(){
        $user_products = Auth::user()->products;
        foreach ($user_products as $user_product) {
            $user_product->update([
                'user_id'=>Null,
            ]);
        }
        Auth::user()->delete();
        return redirect()->route('welcome')->with('message', 'Utente cancellato');
    }
}
