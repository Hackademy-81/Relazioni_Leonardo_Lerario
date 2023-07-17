<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Product::create([
        //     'name'=>$request->input('name'),
        //     'body'=>$request->input('body'),
        //     'price'=>$request->input('price'),
        //     'img'=>$request->has('img') ? $request->file('img')->store('public/products') : '/img/default.png',
        //     'user_id'=> Auth::user()->id,
        // ]);

        Auth::user()->products()->create(
            [
                'name'=>$request->input('name'),
                'body'=>$request->input('body'),
                'price'=>$request->input('price'),
                'img'=>$request->has('img') ? $request->file('img')->store('public/products') : '/img/default.png',
            ]
        );

        return redirect()->route('welcome')->with('message', 'prodotto inserito correttamente');
    }

    public function getProductsByUser(User $user){
        return view('product.productByUser', compact('user'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
