<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Barang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100 ">
                <div class="container mx-auto p-6 bg-white shadow-md rounded-md mt-10 max-w-md">
                    @if (session('success'))
                        <div class="p-2 text-center bg-green-500 text-black rounded-md shadow-md">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('barang.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="nama_barang" class="block text-sm font-medium text-gray-700">Nama barang</label>
                            <input type="text" name="nama_barang" id="nama_barang" class="mt-1 block w-full border border-gray-300 p-2 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-300 text-gray-700">
                        </div>
                        <div class="mb-4">
                            <label for="jumlah" class="block text-sm font-medium text-gray-700">Jumlah</label>
                            <input type="number" name="jumlah" id="jumlah" class="mt-1 block w-full border border-gray-300 p-2 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-300 text-gray-700">
                        </div>
                        <div class="mb-4">
                            <label for="satuan" class="block text-sm font-medium text-gray-700">Satuan</label>
                            <input type="text" name="satuan" id="satuan" class="mt-1 block w-full border border-gray-300 p-2 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-300 text-gray-700">
                        </div>

                        <div class="flex items-center justify-between">
                            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 focus:outline-none focus:bg-green-700 shadow-md">Tambah</button>
                            <button type="reset" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 focus:outline-none focus:bg-red-700 shadow-md">Reset</button>
                            <a href="{{ route('barang.index') }}" class="bg-yellow-500 text-white px-4 py-2 rounded-md hover:bg-yellow-600 focus:outline-none focus:bg-yellow-700 shadow-md">Kembali</a>
                        </div>

                    </form>
                </div>


            </div>
        </div>
    </div>
</x-app-layout>
