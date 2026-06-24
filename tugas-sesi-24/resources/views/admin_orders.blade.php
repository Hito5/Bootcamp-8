<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kelola Semua Pesanan (Admin)') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <table class="w-full text-left border">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="p-3 border">User</th>
                            <th class="p-3 border">Total</th>
                            <th class="p-3 border">Status</th>
                            <th class="p-3 border">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td class="p-3 border">{{ $order->user->name }}</td>
                            <td class="p-3 border">Rp {{ number_format($order->total_price, 0, ',', '.') }}</td>
                            <td class="p-3 border">{{ $order->status }}</td>
                            <td class="p-3 border">
                                <form action="{{ route('admin.orders.update', $order->id) }}" method="POST">
                                    @csrf
                                    <select name="status" onchange="this.form.submit()" class="border rounded p-1">
                                        <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="paid" {{ $order->status == 'paid' ? 'selected' : '' }}>Paid</option>
                                        <option value="shipped" {{ $order->status == 'shipped' ? 'selected' : '' }}>Shipped</option>
                                    </select>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>