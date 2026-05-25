@extends('layouts.app')

@section('content')
    <h2 class="text-3xl font-bold mb-6 text-gray-800">Keranjang Belanja</h2>

    <div class="bg-white p-6 rounded-lg shadow-lg">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="border-b-2 border-gray-200">
                    <th class="py-3 font-bold text-gray-600">Nama Barang</th>
                    <th class="py-3 font-bold text-gray-600">Jumlah</th>
                    <th class="py-3 font-bold text-gray-600">Harga</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b border-gray-100">
                    <td class="py-4 font-semibold text-indigo-600">Garmin Forerunner 165</td>
                    <td class="py-4">1</td>
                    <td class="py-4 font-bold">Rp 2.500.000</td>
                </tr>
                <tr class="border-b border-gray-100">
                    <td class="py-4 font-semibold text-indigo-600">Coros Pace 3</td>
                    <td class="py-4">1</td>
                    <td class="py-4 font-bold">Rp 3.800.000</td>
                </tr>
            </tbody>
        </table>

        <div class="mt-6 flex justify-between items-center bg-gray-50 p-4 rounded">
            <span class="text-xl font-bold text-gray-700">Total Pembayaran:</span>
            <span class="text-2xl font-black text-indigo-600">Rp 6.300.000</span>
        </div>

        <div class="mt-6 text-right">
            <a href="/checkout" class="inline-block bg-green-500 text-white px-8 py-3 rounded-lg font-bold hover:bg-green-600 transition shadow-md">
    Checkout Sekarang
</a>
        </div>
    </div>
@endsection