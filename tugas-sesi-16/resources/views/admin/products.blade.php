<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-4 flex justify-end">
                <a href="#" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    Tambah Produk
                </a>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 border">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-100 border-b">
                            <tr>
                                <th scope="col" class="px-6 py-3 border-r">ID</th>
                                <th scope="col" class="px-6 py-3 border-r">Nama</th>
                                <th scope="col" class="px-6 py-3 border-r">Deskripsi</th>
                                <th scope="col" class="px-6 py-3 border-r">Stok</th>
                                <th scope="col" class="px-6 py-3 border-r">Harga</th>
                                <th scope="col" class="px-6 py-3 border-r">Gambar</th>
                                <th scope="col" class="px-6 py-3 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="p-3 border text-center">1</td>
                                <td class="p-3 border">Keyboard Mekanikal</td>
                                <td class="p-3 border">Keyboard enak buat writing dan gaming.</td>
                                <td class="p-3 border text-center">25</td>
                                <td class="p-3 border text-center">Rp 500.000</td>
                                <td class="p-3 border text-center">keyboard.jpg</td>
                                <td class="p-3 border text-center">
                                    <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-3 rounded text-xs mr-2">Edit</button>
                                    <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-3 rounded text-xs">Delete</button>
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="p-3 border text-center">2</td>
                                <td class="p-3 border">Iphone 17pro</td>
                                <td class="p-3 border">Iphone 17pro dengan spesifikasi terbaru.</td>
                                <td class="p-3 border text-center">10</td>
                                <td class="p-3 border text-center">Rp 25.000.000</td>
                                <td class="p-3 border text-center">iphone.jpg</td>
                                <td class="p-3 border text-center">
                                    <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-3 rounded text-xs mr-2">Edit</button>
                                    <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-3 rounded text-xs">Delete</button>
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="p-3 border text-center">3</td>
                                <td class="p-3 border">Axioo Pongo 960</td>
                                <td class="p-3 border">Laptop gaming mantep tapi murah.</td>
                                <td class="p-3 border text-center">25</td>
                                <td class="p-3 border text-center">Rp 20.000.000</td>
                                <td class="p-3 border text-center">laptop.jpg</td>
                                <td class="p-3 border text-center">
                                    <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-3 rounded text-xs mr-2">Edit</button>
                                    <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-3 rounded text-xs">Delete</button>
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="p-3 border text-center">4</td> 
                                <td class="p-3 border">Hoodie Stussy</td>
                                <td class="p-3 border">Hoodie Stussy dengan desain unik.</td>
                                <td class="p-3 border text-center">80</td>
                                <td class="p-3 border text-center">Rp 900.000</td>
                                <td class="p-3 border text-center">hoodie.jpg</td>
                                <td class="p-3 border text-center">
                                    <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-3 rounded text-xs mr-2">Edit</button>
                                    <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-3 rounded text-xs">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>