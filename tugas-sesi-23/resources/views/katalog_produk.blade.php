<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

    <header class="bg-white shadow-sm py-4">
        <div class="flex items-center gap-4">
            @auth
                <a href="{{ route('dashboard') }}" class="text-sm font-semibold text-gray-600 hover:text-indigo-600">Dashboard</a>
                
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-sm font-semibold text-red-600 hover:text-red-800">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="text-sm font-semibold text-indigo-600">Login</a>
                <a href="{{ route('register') }}" class="text-sm font-semibold text-indigo-600">Register</a>
            @endauth
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 flex flex-col md:flex-row gap-8">
        
        <aside class="w-full md:w-1/4">
            <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                <h2 class="font-bold text-lg mb-4 border-b pb-2">Kategori Produk</h2>
                <ul class="space-y-2">
                    @forelse($categories as $category)
                        <li>
                            <a href="#" class="text-gray-600 hover:text-indigo-600 transition-colors duration-200">
                                {{ $category->name }}
                            </a>
                        </li>
                    @empty
                        <li class="text-sm text-gray-400">Belum ada kategori.</li>
                    @endforelse
                </ul>
            </div>
        </aside>

        <section class="w-full md:w-3/4">
            <h2 class="font-bold text-2xl mb-6">Semua Produk</h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($products as $product)
                    <div class="bg-white rounded-lg shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition-shadow duration-300">
                        
                        @if($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-48 object-cover">
                        @else
                            <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-400 text-sm">
                                Tidak ada gambar
                            </div>
                        @endif

                        <div class="p-4">
                            <h3 class="font-bold text-lg mb-1">
                                <a href="{{ url('/product/' . $product->id) }}" class="hover:text-indigo-600 hover:underline">
                                    {{ $product->name }}
                                </a>
                            </h3>
                            <p class="text-sm text-gray-500 mb-3 truncate">{{ $product->description }}</p>
                            <div class="flex justify-between items-center mt-4">
                                <span class="font-extrabold text-indigo-600">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                                <span class="text-xs font-medium bg-gray-100 text-gray-600 px-2 py-1 rounded">Stok: {{ $product->stock }}</span>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-12 text-gray-500">
                        Belum ada produk yang ditambahkan.
                    </div>
                @endforelse
            </div>
        </section>

    </main>

</body>
</html>