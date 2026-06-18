<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk - {{ $product->name }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

    <header class="bg-white shadow-sm py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <a href="{{ url('/katalog') }}" class="text-xl font-extrabold text-indigo-600 hover:text-indigo-800">
                &larr; Kembali ke Katalog
            </a>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-100">
            <div class="md:flex">
                
                <div class="md:shrink-0 md:w-1/2 bg-gray-100 flex items-center justify-center p-6">
                    @if($product->image)
                        <img class="h-96 w-full object-contain rounded-lg shadow-sm border border-gray-200" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                    @else
                        <div class="h-96 w-full flex items-center justify-center text-gray-400">
                            Tidak ada gambar
                        </div>
                    @endif
                </div>

                <div class="p-8 md:w-1/2 flex flex-col justify-center">
                    <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold mb-1">Produk Detail</div>
                    <h1 class="block mt-1 text-3xl leading-tight font-extrabold text-gray-900 mb-4">{{ $product->name }}</h1>
                    
                    <p class="text-gray-600 mb-6 text-justify leading-relaxed">
                        {{ $product->description }}
                    </p>
                    
                    <div class="flex items-center gap-4 mb-6">
                        <span class="text-3xl font-black text-indigo-600">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                        <span class="bg-gray-100 text-gray-800 text-sm font-medium px-3 py-1 rounded-full border">
                            Stok: {{ $product->stock }}
                        </span>
                    </div>

                    <hr class="mb-6">

                    <form action="#" method="POST" class="flex flex-col gap-4">
                        @csrf
                        <div>
                            <label for="quantity" class="block text-sm font-medium text-gray-700 mb-1">Jumlah Pembelian</label>
                            <input type="number" id="quantity" name="quantity" min="1" max="{{ $product->stock }}" value="1" class="w-24 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                        </div>
                        
                        <button type="submit" class="w-full bg-indigo-600 text-white font-bold py-3 px-4 rounded-lg hover:bg-indigo-700 transition duration-200 shadow-md">
                            + Tambah ke Keranjang
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </main>

</body>
</html>