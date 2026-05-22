@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-lg mt-10">
        <a href="/products" class="text-indigo-500 hover:text-indigo-700 font-bold mb-6 inline-block">
            &larr; Kembali ke Katalog
        </a>

        <div class="bg-gray-200 h-64 w-full rounded-md mb-6 flex items-center justify-center text-gray-500 font-bold text-xl">
            Foto Produk Detail
        </div>

        <h2 class="text-3xl font-extrabold text-gray-800 mb-2">Detail Barang #{{ $id }}</h2>
        <p class="text-gray-600 mb-6 leading-relaxed">
            Tes Tes Contoh Deskripsi abcdefg
        </p>

        <div class="flex justify-between items-center border-t pt-4">
            <span class="text-3xl font-black text-indigo-600">Rp 850.000</span>
            <button class="bg-green-500 text-white px-6 py-3 rounded-lg font-bold hover:bg-green-600 transition shadow-md">
                Beli Sekarang
            </button>
        </div>
    </div>
@endsection