<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Rute yang nyambungin URL ke Controller tadi
Route::get('/', [PageController::class, 'home']);
Route::get('/products', [PageController::class, 'products']);
Route::get('/product/{id}', [PageController::class, 'productDetail']);
Route::get('/cart', [PageController::class, 'cart']);
Route::get('/checkout', [PageController::class, 'checkout']);