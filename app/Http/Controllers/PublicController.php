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
        if($cart) {
            $products = $cart->products;
        }
        return view('cart', compact('products'));
    }
}
