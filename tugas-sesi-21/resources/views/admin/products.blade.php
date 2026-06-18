<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mb-6 bg-white p-4 rounded-lg shadow-sm border flex justify-center items-center">
            <form action="{{ route('admin.products') }}" method="GET" class="flex flex-wrap gap-2 w-full md:w-2/3 lg:w-1/2">
                
                <input type="text" name="search" placeholder="Cari nama produk..." 
                    class="border p-2 rounded flex-grow text-sm" value="{{ request('search') }}">
                
                <select name="category_id" class="border p-2 rounded text-sm w-40">
                    <option value="">Semua Kategori</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>

                <button type="submit" class="bg-gray-800 text-white px-4 py-2 rounded text-sm hover:bg-gray-700">
                    Filter
                </button>
            </form>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-4 flex justify-end">
                <a href="{{ route('admin.products.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded shadow-sm">
                    + Add Product
                </a>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 border">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-100 border-b">
                            <tr>
                                <th scope="col" class="px-6 py-3 border-r">ID</th>
                                <th scope="col" class="px-6 py-3 border-r">Nama</th>
                                <th scope="col" class="px-6 py-3 border-r">Kategori</th> <th scope="col" class="px-6 py-3 border-r">Deskripsi</th>
                                <th scope="col" class="px-6 py-3 border-r">Stok</th>
                                <th scope="col" class="px-6 py-3 border-r">Harga</th>
                                <th scope="col" class="px-6 py-3 border-r">Gambar</th>
                                <th scope="col" class="px-6 py-3 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr class="border-b">
                                <td class="p-3 border text-center">{{ $product->id }}</td>
                                <td class="p-3 border">{{ $product->name }}</td>
                                <td class="p-3 border">
                                    {{ $product->category ? $product->category->name : 'Tanpa Kategori' }}
                                </td>
                                <td class="p-3 border">{{ $product->description }}</td>
                                <td class="p-3 border text-center">{{ $product->stock }}</td>
                                <td class="p-3 border text-center">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                                <td class="p-3 border text-center">
                                    @if($product->image)
                                        <img src="{{ asset('storage/' . $product->image) }}" alt="Gambar" class="w-16 h-16 object-cover rounded mx-auto">
                                    @else
                                        <span class="text-xs text-gray-400">No Image</span>
                                    @endif
                                </td>
                                <td class="p-3 border text-center">
                                    <a href="{{ route('admin.products.edit', $product->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-3 rounded text-xs mr-2 inline-block">Edit</a>
                                    <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-3 rounded text-xs" onclick="return confirm('Yakin mau hapus produk ini?');">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>