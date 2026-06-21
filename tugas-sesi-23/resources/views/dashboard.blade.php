<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4 mb-8">
                
                <div class="bg-indigo-100 rounded-lg p-5 flex items-center shadow-sm">
                    <div class="mr-4 text-indigo-500 text-3xl"><i class="fas fa-box"></i></div>
                    <div>
                        <div class="text-xs font-semibold text-gray-600 uppercase">Product</div>
                        <div class="text-3xl font-extrabold text-gray-900">{{ $totalProducts }}</div>
                    </div>
                </div>

                <div class="bg-blue-100 rounded-lg p-5 flex items-center shadow-sm">
                    <div class="mr-4 text-blue-500 text-3xl"><i class="fas fa-sitemap"></i></div>
                    <div>
                        <div class="text-xs font-semibold text-gray-600 uppercase">Product Category</div>
                        <div class="text-3xl font-extrabold text-gray-900">{{ $totalCategories }}</div>
                    </div>
                </div>

                <div class="bg-green-100 rounded-lg p-5 flex items-center shadow-sm">
                    <div class="mr-4 text-green-500 text-3xl"><i class="fas fa-shopping-cart"></i></div>
                    <div>
                        <div class="text-xs font-semibold text-gray-600 uppercase">Order</div>
                        <div class="text-3xl font-extrabold text-gray-900">{{ $totalOrders }}</div>
                    </div>
                </div>

                <div class="bg-slate-100 rounded-lg p-5 flex items-center shadow-sm">
                    <div class="mr-4 text-slate-500 text-3xl"><i class="fas fa-users"></i></div>
                    <div>
                        <div class="text-xs font-semibold text-gray-600 uppercase">User</div>
                        <div class="text-3xl font-extrabold text-gray-900">{{ $totalUsers }}</div>
                    </div>
                </div>

                <div class="bg-yellow-100 rounded-lg p-5 flex items-center shadow-sm">
                    <div class="mr-4 text-yellow-500 text-3xl"><i class="fas fa-chart-line"></i></div>
                    <div>
                        <div class="text-xs font-semibold text-gray-600 uppercase">Product Clicks</div>
                        <div class="text-3xl font-extrabold text-gray-900">{{ $totalClicks }}</div>
                    </div>
                </div>

            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-gray-200">
                <div class="p-6 text-gray-900">
                    <h3 class="text-center font-bold text-gray-700 mb-4 text-sm">Weekly Orders and Revenue</h3>
                    
                    <div style="height: 400px; width: 100%;">
                        <canvas id="weeklyChart"></canvas>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const ctx = document.getElementById('weeklyChart').getContext('2d');
            
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: {!! json_encode($chartLabels) !!}, // Label Hari
                    datasets: [
                        {
                            label: 'Total Orders',
                            data: {!! json_encode($chartOrders) !!},
                            borderColor: '#4bc0c0', // Warna Hijau Tosca
                            backgroundColor: '#4bc0c0',
                            yAxisID: 'y', // Menggunakan sumbu Y sebelah kiri
                            tension: 0.4 // Membuat garis melengkung (tidak kaku)
                        },
                        {
                            label: 'Total Revenue',
                            data: {!! json_encode($chartRevenue) !!},
                            borderColor: '#ff6384', // Warna Merah Muda
                            backgroundColor: '#ff6384',
                            yAxisID: 'y1', // Menggunakan sumbu Y sebelah kanan
                            tension: 0.4 // Membuat garis melengkung
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    interaction: {
                        mode: 'index',
                        intersect: false,
                    },
                    scales: {
                        y: {
                            type: 'linear',
                            display: true,
                            position: 'left',
                            title: { display: true, text: 'Amount (Orders)' }
                        },
                        y1: {
                            type: 'linear',
                            display: true,
                            position: 'right',
                            title: { display: true, text: 'Revenue (Rp)' },
                            grid: { drawOnChartArea: false } // Agar garis latar tidak bertabrakan
                        }
                    }
                }
            });
        });
    </script>
</x-app-layout>