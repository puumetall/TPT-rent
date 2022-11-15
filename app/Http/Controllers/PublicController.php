<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function index(){
        $products = Product::latest()->paginate(12);
        return view('index', compact('products'));
    }
    public function show(Product $product){
        return view('show', compact('product'));
    }
    public function cart(){
        $cart = Auth::user()->reservations()->where('status','cart')->first();
        $products = [];
        $reservations = [];
        if($cart) {
            $products = $cart->products()->with('activeReservations')->get();
            $reservations = $products->pluck('activeReservations')
                                    ->flatten(1)
                                    ->map(fn($reserv) => [$reserv->reserved_start, $reserv->reserved_end]);

        }
        return view('cart', compact('products', 'reservations'));
    }
}
