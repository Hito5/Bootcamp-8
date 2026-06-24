<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

// --- 1. RUTE PUBLIK (Bebas diakses tanpa login) ---
Route::get('/', [PageController::class, 'home']);
Route::get('/products', [PageController::class, 'products']);
Route::get('/product/{id}', [PageController::class, 'productDetail']);
Route::get('/katalog', [PageController::class, 'products']);

// Note: Login, Register, Logout sudah dihandle otomatis oleh 'auth.php' di bawah.
// Gak perlu ditulis manual di sini biar nggak konflik.

// --- 2. RUTE USER BIASA (Wajib Login) ---
Route::middleware(['auth'])->group(function () {
    Route::get('/cart', [PageController::class, 'cart'])->name('cart.index');
    Route::post('/cart/add/{id}', [PageController::class, 'addToCart'])->name('cart.add');
    Route::delete('/cart/remove/{id}', [PageController::class, 'removeFromCart'])->name('cart.remove');
    Route::post('/checkout', [PageController::class, 'checkout'])->name('checkout');
    Route::get('/orders', [PageController::class, 'myOrders'])->name('orders.index');

    // Rute Profil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// --- 3. RUTE ADMIN (Hanya untuk Admin) ---
Route::middleware(['auth', 'verified', \App\Http\Middleware\AdminMiddleware::class])->group(function () {
    
    // Dashboard Admin
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Rute Products
    Route::get('/admin/products', [ProductController::class, 'index'])->name('admin.products');
    Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin.products.create');
    Route::post('/admin/products', [ProductController::class, 'store'])->name('product.store');
    Route::get('/admin/products/{id}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
    Route::put('/admin/products/{id}', [ProductController::class, 'update'])->name('admin.products.update');
    Route::delete('/admin/products/{id}', [ProductController::class, 'destroy'])->name('admin.products.destroy');

    // Rute Categories
    Route::get('/admin/categories', [CategoryController::class, 'index'])->name('admin.categories');
    Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
    Route::post('/admin/categories', [CategoryController::class, 'store'])->name('product-category.store'); 
    Route::get('/admin/categories/{id}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit'); 
    Route::put('/admin/categories/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
    Route::delete('/admin/categories/{id}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');

    // Rute Orders (Sudah saya rapikan, pakai PageController saja biar konsisten)
    Route::get('/admin/orders', [PageController::class, 'adminOrders'])->name('admin.orders');
    Route::post('/admin/orders/{id}/update', [PageController::class, 'updateStatus'])->name('admin.orders.update');

});

require __DIR__.'/auth.php';