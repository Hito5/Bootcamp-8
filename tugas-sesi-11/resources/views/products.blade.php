@extends('layouts.app')

@section('content')
    <h2 class="text-3xl font-bold mb-6 text-gray-800">Katalog Produk</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-5 rounded-lg shadow hover:shadow-xl transition flex flex-col justify-between">
            <div>
                <div class="bg-gray-300 h-40 w-full rounded-md mb-4 flex items-center justify-center">Foto 1</div>
                <h3 class="text-xl font-bold text-indigo-600">Keyboard Mekanikal</h3>
                <p class="text-gray-500 text-sm mt-2 mb-4">Keyboard enak buat gaming/writing.</p>
            </div>
            <div class="flex justify-between items-center mt-4">
                <span class="font-bold text-lg text-gray-800">Rp 850.000</span>
                <a href="/product/1" class="bg-indigo-600 text-white text-sm px-4 py-2 rounded hover:bg-indigo-700 transition">
                    Lihat Detail
                </a>
            </div>
        </div>

        <div class="bg-white p-5 rounded-lg shadow hover:shadow-xl transition flex flex-col justify-between">
            <div>
                <div class="bg-gray-300 h-40 w-full rounded-md mb-4 flex items-center justify-center">Foto 2</div>
                <h3 class="text-xl font-bold text-indigo-600">Mouse Gaming</h3>
                <p class="text-gray-500 text-sm mt-2 mb-4">Mouse Bluetooth, Klik-klik sat-set gak pake delay.</p>
            </div>
            <div class="flex justify-between items-center mt-4">
                <span class="font-bold text-lg text-gray-800">Rp 450.000</span>
                <a href="/product/2" class="bg-indigo-600 text-white text-sm px-4 py-2 rounded hover:bg-indigo-700 transition">
                    Lihat Detail
                </a>
            </div>
        </div>

        <div class="bg-white p-5 rounded-lg shadow hover:shadow-xl transition flex flex-col justify-between">
            <div>
                <div class="bg-gray-300 h-40 w-full rounded-md mb-4 flex items-center justify-center">Foto 3</div>
                <h3 class="text-xl font-bold text-indigo-600">Monitor Ultrawide</h3>
                <p class="text-gray-500 text-sm mt-2 mb-4">Layar lebar serasa bioskop.</p>
            </div>
            <div class="flex justify-between items-center mt-4">
                <span class="font-bold text-lg text-gray-800">Rp 2.100.000</span>
                <a href="/product/3" class="bg-indigo-600 text-white text-sm px-4 py-2 rounded hover:bg-indigo-700 transition">
                    Lihat Detail
                </a>
            </div>
        </div>
    </div>
@endsection