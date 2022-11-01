<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PublicController::class, 'index']);
Route::get('/view/{product}', [PublicController::class, 'show'])->name('public.show');
Route::middleware('auth')->group(function(){
//    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
//    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
//    Route::post('/products/create', [ProductController::class, 'store'])->name('products.store');
//    Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
//    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
//    Route::post('/products/{product}', [ProductController::class, 'update'])->name('products.update');
//    Route::get('/products/{product}/delete', [ProductController::class, 'destroy'])->name('products.destroy');
    Route::resource('products', ProductController::class);

});



Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
