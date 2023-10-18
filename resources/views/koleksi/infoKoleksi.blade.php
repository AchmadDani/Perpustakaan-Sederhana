<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Informasi Koleksi') }}
        </h2>
    </x-slot>
            {{-- Achmad Dani Saputa | 6706223131--}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100">
                    <h3>Detail Koleksi</h3>
                    <table class="table-auto">
                        <tr>
                            <td class="font-semibold">Nama koleksi:</td>
                            <td>{{ $koleksi->namaKoleksi }}</td>
                        </tr>
                        <tr>
                            <td class="font-semibold">Jenis Koleksi:</td>
                            <td>{{ $koleksi->jenisKoleksi }}</td>
                        </tr>
                        <!-- Tambahkan informasi pengguna lainnya sesuai kebutuhan -->
                    </table>

                    <a href="{{ route('koleksi.daftarKoleksi') }}" class="text-blue-500 hover:underline">Kembali ke Daftar Koleksi</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
