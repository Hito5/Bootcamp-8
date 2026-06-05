<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home']);
Route::get('/products', [PageController::class, 'products']);
Route::get('/product/{id}', [PageController::class, 'productDetail']);

Route::middleware(['auth'])->group(function () {
    Route::get('/cart', [PageController::class, 'cart']);
    Route::get('/checkout', [PageController::class, 'checkout']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin/products', function () {
        return view('admin.products');
    })->name('admin.products');

    Route::get('/admin/categories', function () {
        return view('admin.categories');
    })->name('admin.categories');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';