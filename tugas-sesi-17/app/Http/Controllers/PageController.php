<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; 

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

   public function products()
    {
    $data_produk = Product::paginate(10); 

    return view('products', compact('data_produk'));
    }

    public function productDetail($id)
    {
        $produk = Product::findOrFail($id);

        return view('product-detail', compact('produk'));
    }

    public function cart()
    {
        return view('cart');
    }

    public function checkout()
    {
        return view('checkout');
    }
}