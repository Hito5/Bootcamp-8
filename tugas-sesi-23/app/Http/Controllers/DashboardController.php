<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order; // <-- Panggil Model Order
use App\Models\User;  // <-- Panggil Model User
use Carbon\Carbon;    // <-- Panggil library waktu Laravel

class DashboardController extends Controller
{
    public function index()
    {
        // 1. Data Kotak (Cards) pakai Data Asli Database
        $totalProducts = Product::count();
        $totalCategories = Category::count();
        $totalOrders = Order::count(); 
        $totalUsers = User::count();   
        $totalClicks = \App\Models\Product::sum('views');
        // 2. Data Grafik (Chart) 7 Hari Terakhir
        $chartLabels = [];
        $chartOrders = [];
        $chartRevenue = [];

        // Looping untuk narik data dari 6 hari yang lalu sampai hari ini
        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::now()->subDays($i)->format('Y-m-d');
            $dayName = Carbon::now()->subDays($i)->translatedFormat('l'); // 'l' kecil = nama hari lengkap
            
            $chartLabels[] = $dayName;

            $chartOrders[] = Order::whereDate('created_at', $date)->count();

            $chartRevenue[] = Order::whereDate('created_at', $date)->sum('total');
        }

        return view('dashboard', compact(
            'totalProducts', 'totalCategories', 'totalOrders', 
            'totalUsers', 'totalClicks', 'chartLabels', 
            'chartOrders', 'chartRevenue'
        ));
    }
}