<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Orders Data') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 border">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-100 border-b">
                            <tr>
                                <th scope="col" class="px-6 py-3 border-r">ID</th>
                                <th scope="col" class="px-6 py-3 border-r">Nama Customer</th>
                                <th scope="col" class="px-6 py-3 border-r">Produk</th>
                                <th scope="col" class="px-6 py-3 border-r text-center">Jumlah</th>
                                <th scope="col" class="px-6 py-3 border-r text-center">Total Harga</th>
                                <th scope="col" class="px-6 py-3 text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($orders as $order)
                            <tr class="border-b hover:bg-gray-50">
                                <td class="p-3 border text-center">{{ $order->id }}</td>
                                <td class="p-3 border font-medium text-gray-900">{{ $order->customer_name }}</td>
                                <td class="p-3 border">{{ $order->product_name }}</td>
                                <td class="p-3 border text-center">{{ $order->quantity }}</td>
                                <td class="p-3 border text-center">Rp {{ number_format($order->total_price, 0, ',', '.') }}</td>
                                <td class="p-3 border text-center">
                                    <span class="px-2 py-1 rounded text-xs font-bold 
                                        {{ $order->status == 'Pending' ? 'bg-yellow-200 text-yellow-800' : '' }}
                                        {{ $order->status == 'Success' ? 'bg-green-200 text-green-800' : '' }}
                                        {{ $order->status == 'Canceled' ? 'bg-red-200 text-red-800' : '' }}">
                                        {{ $order->status }}
                                    </span>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="p-6 text-center text-gray-500">Belum ada data pesanan saat ini.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>