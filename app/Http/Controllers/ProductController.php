<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function productsByCategory(Category $category){
        return view('product.category', compact('category'));
    }
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
        // if (Auth::user()) {
        //     return view('product.create');
        // }else{
        //     abort(403);
        // } reindirizzarlo alla register con un messaggio
        // $categories=Category::all();
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
            
       $product = Auth::user()->products()->create(
            [
                'name'=>$request->input('name'),
                'body'=>$request->input('body'),
                'price'=>$request->input('price'),
                'img'=>$request->has('img') ? $request->file('img')->store('public/products') : '/img/default.png',
                'category_id' => $request->input('category_id'),
            ]
        );

        foreach ($request->input('tag_id') as $tag) {
            $product->tags()->attach($tag);
        }

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
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->update(

            [
                'name'=>$request->input('name'),
                'body'=>$request->input('body'),
                'price'=>$request->input('price'),
                'img'=>$request->has('img') ? $request->file('img')->store('public/products') : '/img/default.png',
                'category_id' => $request->input('category_id'), 
            ]



        );
//         $exTags = $product->tags->pluck('id');
//         $selTags = $request->input('tag_id');

// foreach ($exTags as $tag) {
//     $product->tags()->detach($tag);

// }
        $product->tags()->sync($request->input('tag_id'));

        return redirect()->route('welcome')->with('message', 'prodotto modificato');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
