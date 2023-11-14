<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit koleksi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('koleksi.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        @method('delete')
                        <!-- namaKoleksi -->
                        <div class="mb-4">
                            <x-input-label for="namaKoleksi" :value="__('Nama Koleksi')" />
                            <x-text-input id="namaKoleksi" class="block mt-1 w-full" type="text" name="namaKoleksi" :value="$koleksi->namaKoleksi" required autofocus autocomplete="namaKoleksi" />
                            <x-input-error :messages="$errors->get('namaKoleksi')" class="mt-2" />
                        </div>

                        <!-- Jenis Koleksi -->
                        <div class="mb-4">
                            <style>                                     
                                select, option {
                                    background-color: rgb(18, 21, 31);
                                }
                            </style>
                            {{-- tambahkan id hidden --}}
                            <input type="hidden" name="id" value="{{ $koleksi->id }}" />
                            <x-input-label for="jenisKoleksi" :value="__('Jenis Koleksi')" />
                            <select id="jenisKoleksi" name="jenisKoleksi" class="block mt-1 w-full" required autofocus>
                                <option value="1" {{ $koleksi->jenisKoleksi === 1 ? 'selected' : '' }}>Buku</option>
                                <option value="2" {{ $koleksi->jenisKoleksi === 2 ? 'selected' : '' }}>Majalah</option>
                                <option value="3" {{ $koleksi->jenisKoleksi === 3 ? 'selected' : '' }}>Cakram Digital</option>
                            </select>
                            <x-input-error :messages="$errors->get('jenisKoleksi')" class="mt-2" />
                        </div>
                                                                                                            {{-- Achmad Dani Saputa | 6706223131--}}
                        <!-- Jumlah Koleksi -->
                        <div class="mb-4">
                            <x-input-label for="jumlahKoleksi" :value="__('Jumlah Koleksi')" />
                            <x-text-input id="jumlahKoleksi" class="block mt-1 w-full" type="number" name="jumlahKoleksi" :value="$koleksi->jumlahKoleksi" required autocomplete="jumlahKoleksi" />
                            <x-input-error :messages="$errors->get('jumlahKoleksi')" class="mt-2" />
                        </div>
                        <x-primary-button class="mb-4 bg-gray">
                            {{ __('Edit Koleksi') }}
                        </x-primary-button>   
                        <x-primary-button class="mb-4 bg-gray">
                            {{ __('Delete Koleksi') }}
                        </x-primary-button>                     
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
