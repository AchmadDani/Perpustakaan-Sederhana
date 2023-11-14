<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Sewa motor disini') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row lg:flex-row justify-center gap-4">
                <div class="p-6 border border-gray-200 dark:border-gray-700 rounded-lg hover:bg-blue-100 dark:hover:bg-blue-600 transition duration-300">
                    <a href="{{ route('user.daftarPengguna') }}">
                        <h3 class="text-xl font-semibold dark:text-gray-200">Tampilkan Daftar Pengguna</h3>
                    </a>
                </div>
                <div class="p-6 border border-gray-200 dark:border-gray-700 rounded-lg hover:bg-blue-100 dark:hover:bg-blue-600 transition duration-300">
                    <a href="{{ route('koleksi.daftarKoleksi') }}">
                        <h3 class="text-xl font-semibold dark:text-gray-200">Tampilkan Daftar Koleksi</h3>
                    </a>
                </div>
                <div class="p-6 border border-gray-200 dark:border-gray-700 rounded-lg hover:bg-blue-100 dark:hover:bg-blue-600 transition duration-300">
                    <a href="{{ route('koleksi.registrasi') }}">
                        <h3 class="text-xl font-semibold dark:text-gray-200">Tambah Data Koleksi</h3>
                    </a>
                </div>
                <div class="p-6 border border-gray-200 dark:border-gray-700 rounded-lg hover:bg-blue-100 dark:hover:bg-blue-600 transition duration-300">
                    <a href="{{ route('transaksiTambah') }}">
                        <h3 class="text-xl font-semibold dark:text-gray-200">Pinjam Buku</h3>
                    </a>
                </div>
                <div class="p-6 border border-gray-200 dark:border-gray-700 rounded-lg hover:bg-blue-100 dark:hover:bg-blue-600 transition duration-300">
                    <a href="{{ route('transaksi') }}">
                        <h3 class="text-xl font-semibold dark:text-gray-200">Daftar Peminjaman</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
