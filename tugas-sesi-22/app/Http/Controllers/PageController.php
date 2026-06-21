<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class PageController extends Controller
{
    public function home()
    {
        return view('welcome'); 
    }
    public function products(Request $request)
    {
        $categories = Category::all();

        $query = Product::query();

        if ($request->has('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        if ($request->has('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $products = $query->get();

        return view('products', compact('products', 'categories'));
    }
    public function productDetail($id)
    {
        $product = Product::findOrFail($id);

        return view('product_detail', compact('product'));
    }
}