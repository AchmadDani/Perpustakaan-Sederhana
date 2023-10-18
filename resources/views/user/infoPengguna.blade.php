<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Informasi Penggguna') }}
        </h2>
    </x-slot>
            {{-- Achmad Dani Saputa | 6706223131--}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100">
                    <h3>Detail Pengguna</h3>
                    <table class="table-auto">
                        <tr>
                            <td class="font-semibold">fullname:</td>
                            <td>{{ $users->fullname }}</td>
                        </tr>
                        <tr>   {{-- Achmad Dani Saputra | 6706223131 --}}
                            <td class="font-semibold">email:</td>
                            <td>{{ $users->email }}</td>
                        </tr>
                        <!-- Tambahkan informasi pengguna lainnya sesuai kebutuhan -->
                    </table>

                    <a href="{{ route('user.daftarPengguna') }}" class="text-blue-500 hover:underline">Kembali ke Daftar Pengguna</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
