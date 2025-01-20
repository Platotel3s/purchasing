<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __("Edit barang") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-black">
                @if (session('success'))
                <div class="p-2 text-center bg-green-500 text-black rounded-md shadow-md">
                    {{ session('success') }}
                </div>
                @endif
                <form action="{{ route('barang.update', $barangs->id_barang) }}" method="POST" class="w-1/4 bg-slate-200 p-6 rounded">
                    @csrf
                    @method('PUT') <!-- Menggunakan PUT untuk update data -->
                    <div class="mb-4">
                        <label for="nama_barang" class="block text-sm font-medium text-black">Nama Barang</label>
                        <input type="text" name="nama_barang" id="nama_barang" value="{{ $barangs->nama_barang }}" class="mt-1 block w-full border border-gray-300 p-2 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-300 text-black">
                    </div>

                    <div class="mb-4">
                        <label for="jumlah" class="block text-sm font-medium text-black">Jumlah</label>
                        <input type="number" name="jumlah" id="jumlah" value="{{ $barangs->jumlah }}" class="mt-1 block w-full border border-gray-300 p-2 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-300 text-black">
                    </div>

                    <div class="mb-4">
                        <label for="satuan" class="block text-sm font-medium text-black">Satuan</label>
                        <input type="text" name="satuan" id="satuan" value="{{ $barangs->satuan }}" class="mt-1 block w-full border border-gray-300 p-2 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-300 text-black">
                    </div>

                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-green-500 text-black px-4 py-2 rounded-md hover:bg-green-600 focus:outline-none focus:bg-green-700">Update</button>
                        <a href="{{ route('barang.index') }}" class="text-black bg-yellow-500 rounded p-2 hover:bg-yellow-600">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
