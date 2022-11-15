<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;
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


Route::middleware(['auth','verified'])->group(function(){
    Route::get('/', [PublicController::class, 'index'])->name('public.index');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/view/{product}', [PublicController::class, 'show'])->name('public.show');
    Route::get('/cart', [PublicController::class, 'cart'])->name('public.cart');
    Route::get('/cart/add/{product}', [ReservationController::class, 'addProduct'])->name('cart.add');
    Route::post('/reservations/make', [ReservationController::class, 'make'])->name('reservation.make');

    Route::middleware(['role:admin'])->group(function(){

        Route::resource('products', ProductController::class);
        Route::resource('users', UserController::class )->only(['index','show','edit','update']);
        Route::resource('reservations', ReservationController::class);

    });

});





Auth::routes(['verify' => true]);


