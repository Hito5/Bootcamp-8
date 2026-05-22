<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function products()
    {
        return view('products');
    }

    public function productDetail($id)
    {
        // Variabel $id ini buat nangkep barang nomor berapa yang diklik
        return view('product-detail', ['id' => $id]);
    }
}