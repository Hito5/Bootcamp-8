
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Katalog Produk') }}
        </h2>
    </x-slot>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($products as $item)
            <div class="bg-white p-5 rounded-lg shadow hover:shadow-xl transition flex flex-col justify-between">
                <div>
                    <div class="bg-indigo-100 text-indigo-600 h-40 w-full rounded-md mb-4 flex items-center justify-center font-bold text-lg">
                        {{ $item->image ? 'Foto ' . $item->name : 'No Image' }}
                    </div>
                    <h3 class="text-xl font-bold text-indigo-600">{{ $item->name }}</h3>
                    <p class="text-gray-500 text-sm mt-2 mb-4">{{ Str::limit($item->description, 60) }}</p>
                </div>
                <div class="flex justify-between items-center mt-4">
                    <span class="text-sm font-semibold text-gray-600">Stok: {{ $item->stock }}</span>
                    <a href="/product/{{ $item->id }}" class="bg-indigo-600 text-white text-sm px-4 py-2 rounded hover:bg-indigo-700 transition">
                        Lihat Detail
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-8">
        {{ $products->links() }}
    </div>
</div>
</x-app-layout>
