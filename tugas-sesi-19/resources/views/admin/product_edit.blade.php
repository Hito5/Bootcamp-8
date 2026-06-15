<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-gray-200">
                <div class="p-6 text-gray-900">
                    
                    <form action="{{ route('admin.products.update', $product->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Product Name</label>
                            <input type="text" name="name" value="{{ $product->name }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                            <textarea name="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="3">{{ $product->description }}</textarea>
                        </div>

                        <div class="mb-4 flex gap-4">
                            <div class="w-1/2">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Price (Rp)</label>
                                <input type="number" name="price" value="{{ $product->price }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700">
                            </div>
                            <div class="w-1/2">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Stock</label>
                                <input type="number" name="stock" value="{{ $product->stock }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700">
                            </div>
                        </div>

                        <div class="flex items-center justify-between mt-6">
                            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Update Product
                            </button>
                            <a href="{{ route('admin.products') }}" class="inline-block align-baseline font-bold text-sm text-gray-500 hover:text-gray-800">
                                Cancel
                            </a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>