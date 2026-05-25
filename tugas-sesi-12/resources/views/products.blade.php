@extends('layouts.app')

@section('content')
    <h2 class="text-3xl font-bold mb-6 text-gray-800">Katalog Produk</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-5 rounded-lg shadow hover:shadow-xl transition flex flex-col justify-between">
            <div>
                <div class="bg-gray-300 h-40 w-full rounded-md mb-4 flex items-center justify-center">Keyboard Image</div>
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
                <div class="bg-gray-300 h-40 w-full rounded-md mb-4 flex items-center justify-center">Mouse Image</div>
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
                <div class="bg-gray-300 h-40 w-full rounded-md mb-4 flex items-center justify-center">Monitor Image</div>
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

        <div class="bg-white p-5 rounded-lg shadow hover:shadow-xl transition flex flex-col justify-between">
            <div>
                <div class="bg-indigo-100 text-indigo-600 h-40 w-full rounded-md mb-4 flex items-center justify-center font-bold text-lg">Garmin Image</div>
                <h3 class="text-xl font-bold text-indigo-600">Garmin Forerunner 165</h3>
                <p class="text-gray-500 text-sm mt-2 mb-4">Jam tangan lari berlayar AMOLED, cocok buat pelari harian ngejar personal record.</p>
            </div>
            <div class="flex justify-between items-center mt-4">
                <span class="font-bold text-lg text-gray-800">Rp 2.500.000</span>
                <a href="/product/4" class="bg-indigo-600 text-white text-sm px-4 py-2 rounded hover:bg-indigo-700 transition">
                    Lihat Detail
                </a>
            </div>
        </div>

        <div class="bg-white p-5 rounded-lg shadow hover:shadow-xl transition flex flex-col justify-between">
            <div>
                <div class="bg-red-100 text-red-600 h-40 w-full rounded-md mb-4 flex items-center justify-center font-bold text-lg">Coros Image</div>
                <h3 class="text-xl font-bold text-indigo-600">Coros Pace 3</h3>
                <p class="text-gray-500 text-sm mt-2 mb-4">Ringan banget di tangan, baterai badak, dan GPS super akurat buat lari harian maupun trail di gunung dan hutan.</p>
            </div>
            <div class="flex justify-between items-center mt-4">
                <span class="font-bold text-lg text-gray-800">Rp 3.800.000</span>
                <a href="/product/5" class="bg-indigo-600 text-white text-sm px-4 py-2 rounded hover:bg-indigo-700 transition">
                    Lihat Detail
                </a>
            </div>
        </div>
    </div>
@endsection