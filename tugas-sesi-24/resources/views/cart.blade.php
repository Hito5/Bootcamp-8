<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Keranjang Belanja') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    @if($carts->count() > 0)
                        <div class="overflow-x-auto">
                            <table class="w-full text-sm text-left text-gray-500 border">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-100 border-b">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 border-r">Gambar</th>
                                        <th scope="col" class="px-6 py-3 border-r">Nama Produk</th>
                                        <th scope="col" class="px-6 py-3 border-r text-center">Harga</th>
                                        <th scope="col" class="px-6 py-3 border-r text-center">Jumlah</th>
                                        <th scope="col" class="px-6 py-3 text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($carts as $cart)
                                    <tr class="border-b hover:bg-gray-50">
                                        <!-- Gambar -->
                                        <td class="p-3 border text-center w-24">
                                            @if($cart->product->image)
                                                <img src="{{ asset('storage/' . $cart->product->image) }}" alt="Gambar" class="w-16 h-16 object-cover rounded mx-auto">
                                            @else
                                                <span class="text-xs text-gray-400">No Image</span>
                                            @endif
                                        </td>
                                        
                                        <!-- Nama -->
                                        <td class="p-3 border font-medium text-gray-900">
                                            {{ $cart->product->name }}
                                        </td>
                                        
                                        <!-- Harga -->
                                        <td class="p-3 border text-center font-bold">
                                            Rp {{ number_format($cart->product->price, 0, ',', '.') }}
                                        </td>
                                        
                                        <!-- Jumlah -->
                                        <td class="p-3 border text-center">
                                            {{ $cart->quantity }}
                                        </td>
                                        
                                        <!-- Aksi Hapus -->
                                        <td class="p-3 border text-center">
                                            <form action="{{ route('cart.remove', $cart->id) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-3 rounded text-xs transition duration-150" onclick="return confirm('Yakin mau buang produk ini dari keranjang?');">
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-6 flex justify-end">
                            <form action="{{ route('checkout') }}" method="POST">
                                @csrf
                                <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-6 rounded shadow" onclick="return confirm('Yakin mau checkout semua barang ini sekarang?');">
                                    Checkout
                                </button>
                            </form>
                        </div>
                        
                    @else
                        <div class="text-center py-12">
                            <svg class="mx-auto h-12 w-12 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            <h3 class="text-lg font-medium text-gray-900">Keranjang lo masih kosong blay :D</h3>
                            <p class="mt-1 text-sm text-gray-500">Yuk, cari barang impianmu di halaman utama.</p>
                            <div class="mt-6">
                                <a href="{{ url('/') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white py-2 px-4 rounded shadow-sm">
                                    Belanja Sekarang
                                </a>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>