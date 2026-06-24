<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Riwayat Pesanan Saya') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                @if($orders->isEmpty())
                    <p class="text-gray-500">Belum ada pesanan nih, blay.</p>
                @else
                    <table class="w-full text-left border">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="p-3 border">Order ID</th>
                                <th class="p-3 border">Total Harga</th>
                                <th class="p-3 border">Status</th>
                                <th class="p-3 border">Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td class="p-3 border">#{{ $order->id }}</td>
                                <td class="p-3 border">Rp {{ number_format($order->total_price, 0, ',', '.') }}</td>
                                <td class="p-3 border">
                                    <span class="px-2 py-1 rounded text-sm {{ $order->status == 'pending' ? 'bg-yellow-200' : 'bg-green-200' }}">
                                        {{ ucfirst($order->status) }}
                                    </span>
                                </td>
                                <td class="p-3 border">{{ $order->created_at->format('d M Y, H:i') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>