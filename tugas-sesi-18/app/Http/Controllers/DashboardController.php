<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index()
    {
        // 1. Data Asli dari Database
        $totalProducts = Product::count();
        $totalCategories = Category::count();
        
        // 2. Data Dummy (Karena fiturnya belum dibuat)
        $totalOrders = 50;
        $totalUsers = 20;
        $totalClicks = 500;

        // 3. Data Dummy untuk Grafik (Chart)
        $chartLabels = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
        $chartOrders = [5, 10, 5, 2, 5, 2, 10]; // Titik-titik garis hijau (Orders)
        $chartRevenue = [400000, 800000, 400000, 200000, 500000, 300000, 900000]; // Titik-titik garis merah (Revenue)

        return view('dashboard', compact(
            'totalProducts', 'totalCategories', 'totalOrders', 
            'totalUsers', 'totalClicks', 'chartLabels', 
            'chartOrders', 'chartRevenue'
        ));
    }
}