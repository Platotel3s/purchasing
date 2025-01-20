@component('purchaser.app')
<div class="py-12">
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
            <p class="text-2xl">Data barang</p>
            <div class="mt-4 mb-4">
                {{ $barangs->links() }}
            </div>
            @if (session('success'))
                <div class="bg-green-400 p-3 rounded-sm w-1/4 text-black mt-4 mb-4 text-center">
                    {{ session('success') }}
                </div>
            @endif

            <table class="min-w-full bg-white dark:bg-gray-700 rounded">
                <thead class="bg-gray-50 dark:bg-gray-600 rounded">
                    <tr>
                        <th class="py-2 px-4 border-b border-gray-300 text-left text-sm font-semibold text-gray-700 dark:text-gray-300">Nama Barang</th>
                        <th class="py-2 px-4 border-b border-gray-300 text-left text-sm font-semibold text-gray-700 dark:text-gray-300">Jumlah Barang</th>
                        <th class="py-2 px-4 border-b border-gray-300 text-left text-sm font-semibold text-gray-700 dark:text-gray-300">Satuan</th>
                        <th class="py-2 px-4 border-b border-gray-300 text-left text-sm font-semibold text-gray-700 dark:text-gray-300">Waktu Masuk</th>
                        <th class="py-2 px-4 border-b border-gray-300 text-left text-sm font-semibold text-gray-700 dark:text-gray-300">Pembaruan Terakhir</th>
                        <th class="py-2 px-4 border-b border-gray-300 text-left text-sm font-semibold text-gray-700 dark:text-gray-300">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barangs as $barang)
                    <tr>
                        <td class="py-3 px-4 border-b border-gray-300">{{ $barang->nama_barang }}</td>
                        <td class="py-3 px-4 border-b border-gray-300">{{ $barang->jumlah }}</td>
                        <td class="py-3 px-4 border-b border-gray-300">{{ $barang->satuan }}</td>
                        <td class="py-3 px-4 border-b border-gray-300">{{ $barang->created_at }}</td>
                        <td class="py-3 px-4 border-b border-gray-300">{{ $barang->updated_at }}</td>
                        <td class="py-3 px-4 border-b border-gray-300">
                            <button onclick="showModal({{ $barang->id_barang }})" class="p-2 bg-yellow-500 hover:bg-yellow-700 text-black rounded">Ambil</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>

<div id="modal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white dark:bg-gray-700 rounded-lg p-6 w-1/3">
        <h3 class="text-lg font-semibold mb-4 text-gray-900 dark:text-gray-100">Ambil Barang</h3>
        <form id="modal-form" action="{{ route('purchaser.ambil',$barang->id_barang) }}" method="POST">
            @csrf
            <input type="number" name="jumlah_ambil" placeholder="Jumlah ambil" required class="w-full p-2 border border-gray-300 rounded mb-4">
            <div class="flex justify-end">
                <button type="submit" class="p-2 bg-green-500 hover:bg-green-700 text-white rounded mr-2">Konfirmasi</button>
                <button type="button" onclick="hideModal()" class="p-2 bg-red-500 hover:bg-red-700 text-white rounded">Batal</button>
            </div>
        </form>
    </div>
</div>

<script src="{{ asset('js/ambil2.js') }}"></script>
@endcomponent
