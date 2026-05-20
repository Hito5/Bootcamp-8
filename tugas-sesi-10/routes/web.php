<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return '<h1>Halo, ini Halaman Utama Toko Panca</h1>';
});

Route::get('/products', function () {
    return '<h1>Ini Halaman Daftar Produk</h1>';
});

Route::get('/cart', function () {
    return '<h1>Ini Halaman Keranjang Belanja</h1>';
});

Route::get('/checkout', function () {
    return '<h1>Ini Halaman Pembayaran</h1>';
});