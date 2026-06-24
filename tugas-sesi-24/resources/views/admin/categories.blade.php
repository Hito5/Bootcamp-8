<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-4 flex justify-end">
                <a href="{{ route('admin.categories.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded shadow-sm">
                    + Add Category
                </a>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 border">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-100 border-b">
                            <tr>
                                <th scope="col" class="px-6 py-3 border-r text-center">No</th>
                                <th scope="col" class="px-6 py-3 border-r">Nama Kategori</th>
                                <th scope="col" class="px-6 py-3 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr class="border-b hover:bg-gray-50">
                                <td class="p-3 border text-center">{{ $loop->iteration }}</td>
                                <td class="p-3 border font-medium text-gray-900">{{ $category->name }}</td>
                                <td class="p-3 border text-center">
                                    
                                    <button onclick="openEditModal({{ $category->id }}, '{{ $category->name }}')" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-3 rounded text-xs mr-2 transition duration-150">
                                        Edit
                                    </button>
                                    
                                    <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-3 rounded text-xs transition duration-150" onclick="return confirm('Yakin hapus kategori ini?');">
                                            Delete
                                        </button>
                                    </form>
                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div id="editModal" class="fixed inset-0 z-50 hidden bg-gray-900 bg-opacity-50 flex items-center justify-center">
                        <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6 relative">
                            
                            <button onclick="closeEditModal()" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                            </button>

                            <h3 class="text-lg font-bold text-gray-900 mb-4 border-b pb-2">Edit Product Category</h3>

                            <form id="editForm" method="POST" action="">
                                @csrf
                                @method('PUT') <div class="mb-4">
                                    <label for="editName" class="block text-sm font-medium text-gray-700 mb-2">Category Name</label>
                                    <input type="text" id="editName" name="name" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
                                </div>

                                <div class="flex justify-end">
                                    <button type="button" onclick="closeEditModal()" class="bg-gray-200 text-gray-800 px-4 py-2 rounded shadow-sm hover:bg-gray-300 mr-2">Batal</button>
                                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded shadow-sm hover:bg-blue-700">Update Category</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <script>
                        function openEditModal(id, currentName) {
                            // 1. Tampilkan modalnya
                            document.getElementById('editModal').classList.remove('hidden');
                            
                            // 2. Isi kotak input dengan nama kategori yang sekarang
                            document.getElementById('editName').value = currentName;
                            
                            // 3. Ubah arah action form sesuai ID yang mau diedit
                            // Kita pakai trik string replace biar dinamis
                            let form = document.getElementById('editForm');
                            form.action = '/admin/categories/' + id;
                        }

                        function closeEditModal() {
                            // Sembunyikan modalnya
                            document.getElementById('editModal').classList.add('hidden');
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>