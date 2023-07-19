<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[PublicController::class, 'home'])->name('welcome');
Route::middleware(['auth'])->group(function(){
    Route::get('product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('products/category{category}', [ProductController::class, 'productsByCategory'], )->name('product.category');
});

Route::get('/product.edit/{product}' , [ProductController::class, 'edit'], )->name('product.edit');
Route::post('/product.update/{product}' , [ProductController::class, 'update'], )->name('product.update');

Route::get('/user/products/{user}', [ProductController::class, 'getProductsByUser'])->name('user.products');
Route::get('/product/show/{product}' , [ProductController::class, 'show'])->name('product.show');
Route::delete('/user/destroy', [PublicController::class, 'destroy'])->name('user.destroy');