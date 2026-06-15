<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class PageController extends Controller
{
    // Fungsi ini yang tadi dicariin sama error-nya
    public function home()
    {
        // Nampilin halaman bawaan Laravel pas awal buka localhost:8000
        return view('welcome'); 
    }

    // Fungsi buat nampilin katalog produk yang barusan kita bikin
    public function products()
    {
        $categories = Category::all();
        $products = Product::all();

        return view('katalog_produk', compact('categories', 'products'));
    }
}