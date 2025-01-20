<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">{{ __('Ambil barang') }}</h2>
    </x-slot>
    <div class="py-12">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            @if (session('success'))
            <div class="p-2 text-center bg-green-500 text-black rounded-md shadow-md">
                {{ session('success') }}
            </div>
            @endif

            
        </div>
    </div>
</x-app-layout>
