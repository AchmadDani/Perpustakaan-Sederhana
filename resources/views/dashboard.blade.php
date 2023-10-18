<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Selamat datang pada aplikasi perpustakaan sederhana, silahkan pilih fitur kami') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <a href="{{ route('user.daftarPengguna') }}" class="p-6 border border-gray-200 dark:border-gray-700 rounded-lg hover:bg-blue-100 dark:hover:bg-blue-600 transition duration-300">
                    <h3 class="text-xl font-semibold dark:text-gray-200">Tampilkan Daftar Pengguna</h3>
                </a>
                <a href="{{ route('user.registrasi') }}" class="p-6 border border-gray-200 dark:border-gray-700 rounded-lg hover:bg-blue-100 dark:hover:bg-blue-600 transition duration-300">
                    <h3 class="text-xl font-semibold dark:text-gray-200">Tambah Data Pengguna</h3>
                </a>
                {{-- <a href="{{ route('user.infoPengguna') }}" class="p-6 border border-gray-200 dark:border-gray-700 rounded-lg hover:bg-blue-100 dark:hover:bg-blue-600 transition duration-300">
                    <h3 class="text-xl font-semibold dark:text-gray-200">Tampilkan Detail Pengguna</h3>
                </a> --}}
                <a href="{{ route('koleksi.daftarKoleksi') }}" class="p-6 border border-gray-200 dark:border-gray-700 rounded-lg hover:bg-blue-100 dark:hover:bg-blue-600 transition duration-300">
                    <h3 class="text-xl font-semibold dark:text-gray-200">Tampilkan Daftar Koleksi</h3>
                </a>
                <a href="{{ route('koleksi.registrasi') }}" class="p-6 border border-gray-200 dark:border-gray-700 rounded-lg hover:bg-blue-100 dark:hover:bg-blue-600 transition duration-300">
                    <h3 class="text-xl font-semibold dark:text-gray-200">Tambah Data Koleksi</h3>
                </a>
                {{-- <a href="{{ route('koleksi.infoKoleksi') }}" class="p-6 border border-gray-200 dark:border-gray-700 rounded-lg hover:bg-blue-100 dark:hover:bg-blue-600 transition duration-300">
                    <h3 class="text-xl font-semibold dark:text-gray-200">Lihat Data Koleksi</h3>
                </a> --}}
            </div>
        </div>
    </div>
</x-app-layout>
