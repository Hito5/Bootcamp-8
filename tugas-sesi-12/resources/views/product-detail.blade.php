@extends('layouts.app')

@section('content')
    @php
        $nama = 'Barang Tidak Ditemukan';
        $harga = 'Rp 0';
        $deskripsi = '';

        if($id == 1) {
            $nama = 'Keyboard Mekanikal';
            $harga = 'Rp 850.000';
            $deskripsi = 'Keyboard enak dan empuk banget buat dipakai gaming sampe writing.';
        } elseif($id == 2) {
            $nama = 'Mouse Gaming';
            $harga = 'Rp 450.000';
            $deskripsi = 'Klik-klik sat-set gak pake delay, nyaman di tangan buat kerja seharian.';
        } elseif($id == 3) {
            $nama = 'Monitor Ultrawide';
            $harga = 'Rp 2.100.000';
            $deskripsi = 'Layar lebar resolusi tinggi, bikin mata gak gampang perih untuk nonton atau gaming berjam-jam.';
        } elseif($id == 4) {
            $nama = 'Garmin Forerunner 165';
            $harga = 'Rp 2.500.000';
            $deskripsi = 'Jam tangan lari berlayar AMOLED yang enak banget buat nemenin lo ngejar personal record 5km atau 10km. Fitur GPS akurat, pelacak tidur, dan metrik larinya lengkap.';
        } elseif($id == 5) {
            $nama = 'Coros Pace 3';
            $harga = 'Rp 3.800.000';
            $deskripsi = 'Jam lari teringan dengan baterai badak! GPS-nya super akurat dan layarnya transreflektif. Pas banget buat lo yang males ngecas tiap hari tapi pengen data olahraga presisi.';
        }
    @endphp

    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-lg mt-10">
        <a href="/products" class="text-indigo-500 hover:text-indigo-700 font-bold mb-6 inline-block">
            &larr; Kembali ke Katalog
        </a>

        <div class="bg-gray-200 h-64 w-full rounded-md mb-6 flex items-center justify-center text-gray-500 font-bold text-xl">
            Foto {{ $nama }}
        </div>

        <h2 class="text-3xl font-extrabold text-gray-800 mb-2">{{ $nama }}</h2>
        <p class="text-gray-600 mb-6 leading-relaxed">
            {{ $deskripsi }}
        </p>

        <div class="flex justify-between items-center border-t pt-4">
            <span class="text-3xl font-black text-indigo-600">{{ $harga }}</span>
            <a href="/cart" class="bg-green-500 text-white px-6 py-3 rounded-lg font-bold hover:bg-green-600 transition shadow-md">
                Beli Sekarang
            </a>
        </div>
    </div>
@endsection