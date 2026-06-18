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
        $totalOrders = Order::count(); // Narik total pesanan asli
        $totalUsers = User::count();   // Narik total akun asli
        $totalClicks = 500; // Biarkan dummy karena tabel clicks belum ada

        // 2. Data Grafik (Chart) 7 Hari Terakhir
        $chartLabels = [];
        $chartOrders = [];
        $chartRevenue = [];

        // Looping untuk narik data dari 6 hari yang lalu sampai hari ini
        for ($i = 6; $i >= 0; $i--) {
            // Ambil format tanggal (misal: 2026-06-15) dan Nama Hari (misal: Senin)
            $date = Carbon::now()->subDays($i)->format('Y-m-d');
            $dayName = Carbon::now()->subDays($i)->translatedFormat('l'); // 'l' kecil = nama hari lengkap
            
            $chartLabels[] = $dayName;

            // Hitung total jumlah pesanan pada tanggal tersebut
            $chartOrders[] = Order::whereDate('created_at', $date)->count();

            // Hitung total uang masuk (sum dari kolom 'total') pada tanggal tersebut
            $chartRevenue[] = Order::whereDate('created_at', $date)->sum('total');
        }

        return view('dashboard', compact(
            'totalProducts', 'totalCategories', 'totalOrders', 
            'totalUsers', 'totalClicks', 'chartLabels', 
            'chartOrders', 'chartRevenue'
        ));
    }
}