<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the Home Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 font-sans antialiased">

    <nav class="bg-white shadow-sm border-b py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <div class="text-xl font-bold text-indigo-600">
                <a href="{{ url('/') }}">Ecommerce 8</a>
            </div>
            <div class="flex items-center gap-6">
                <a href="{{ url('/') }}" class="text-gray-600 hover:text-gray-900">Home</a>
                <a href="{{ url('/products') }}" class="text-gray-600 hover:text-gray-900">Katalog</a>
                
                <a href="{{ url('/cart') }}" class="text-gray-600 hover:text-indigo-600 flex items-center gap-1">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    Cart
                </a>

                @auth
                    <a href="{{ url('/dashboard') }}" class="bg-indigo-600 text-white px-4 py-2 rounded shadow hover:bg-indigo-700">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-900">Log in</a>
                @endauth
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h1 class="text-4xl font-bold mb-2">Welcome to the Home Page</h1>
        <p class="text-gray-600 mb-8">This is the home page of the ecommerce-8 application.</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($products as $product)
                <div class="bg-white rounded-lg shadow border overflow-hidden flex flex-col">
                    <div class="h-48 bg-gray-200 overflow-hidden">
                        @if($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="Gambar" class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full flex items-center justify-center text-gray-400">No Image</div>
                        @endif
                    </div>
                    
                    <div class="p-4 flex flex-col flex-grow">
                        <span class="text-xs text-gray-500 mb-1">{{ $product->category ? $product->category->name : 'Tanpa Kategori' }}</span>
                        <h3 class="text-lg font-bold text-gray-900 mb-2 truncate">{{ $product->name }}</h3>
                        <p class="text-sm text-gray-600 mb-4 flex-grow">{{ Str::limit($product->description, 50) }}</p>
                        
                        <div class="font-bold text-gray-900 text-lg mb-4">
                            Rp {{ number_format($product->price, 0, ',', '.') }}
                        </div>
                        
                        <a href="{{ url('/product/' . $product->id) }}" class="bg-blue-600 hover:bg-blue-700 text-white text-center font-bold py-2 px-4 rounded w-full mt-auto inline-block">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</body>
</html>