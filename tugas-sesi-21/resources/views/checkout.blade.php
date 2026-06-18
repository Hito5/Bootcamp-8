@extends('layouts.app')

@section('content')
    <h2 class="text-3xl font-bold mb-6 text-gray-800">Halaman Pembayaran (Checkout)</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-xl font-bold mb-4 text-indigo-600 border-b pb-2">Alamat Pengiriman</h3>
            
            <form class="space-y-4">
                <div>
                    <label class="block text-sm font-semibold text-gray-600 mb-1">Nama Lengkap</label>
                    <input type="text" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" value="Jokowi Widodo">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-600 mb-1">Alamat Rumah</label>
                    <textarea class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" rows="3">Solo, 123 </textarea>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-600 mb-1">Metode Pembayaran</label>
                    <select class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <option>Transfer Bank (Virtual Account)</option>
                        <option>E-Wallet (Dana/OVO/Gopay)</option>
                    </select>
                </div>
            </form>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-lg flex flex-col justify-between">
            <div>
                <h3 class="text-xl font-bold mb-4 text-indigo-600 border-b pb-2">Ringkasan Order</h3>
                <div class="flex justify-between mb-3 text-gray-700">
                    <span>Total Harga Barang</span>
                    <span class="font-bold">Rp 6.300.000</span>
                </div>
                <div class="flex justify-between mb-3 text-gray-700">
                    <span>Ongkos Kirim</span>
                    <span class="font-bold">Free Ongkir</span>
                </div>
            </div>

            <div class="border-t pt-4 mt-6">
                <div class="flex justify-between items-center bg-gray-50 p-4 rounded mb-6">
                    <span class="text-lg font-bold text-gray-700">Total Akhir:</span>
                    <span class="text-2xl font-black text-indigo-600">Rp 6.300.000</span>
                </div>
                
                <button onclick="alert('Pembayaran Berhasil! Makasih sudah belanja.')" class="w-full bg-indigo-600 text-white py-3 rounded-lg font-bold hover:bg-indigo-700 transition shadow-md text-center block">
                    Konfirmasi & Bayar Sekarang
                </button>
            </div>
        </div>
    </div>
@endsection