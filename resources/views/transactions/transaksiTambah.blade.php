<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pinjam Buku') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <div class="row form-inline" onclick="$(this).parent().remove();">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <span class="label"><strong>X</strong></span>
                        </div>
                    </div>
                @endif
                
                <form action="{{ route('transaksiStore') }}" method="POST">
                    @csrf
                    <!-- Peminjam-->
                    <div class="mb-4">
                        <style>
                            select, option {
                                background-color: rgb(18, 21, 31);
                            }
                        </style>
                        <x-input-label for="idPeminjam" :value="__('Peminjam*')" />
                        <select id="idPeminjam" name="idPeminjam" class="block mt-1 w-full" required autofocus>
                            <option value="-1">--Pilih dahulu--</option>
                            @foreach ($users as $user)
                                @if ($user->id == old('idPeminjam'))
                                    <option value="{{ $user->id }}" selected>{{ $user->fullname }}</option>
                                @else
                                    <option value="{{ $user->id }}">{{ $user->fullname }}</option>
                                @endif
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('peminjam')" class="mt-2" />
                    </div>

                    <!-- Koleksi 1-->
                     <div class="mb-4">
                        <style>
                            select, option {
                                background-color: rgb(18, 21, 31);
                            }
                        </style>
                        <x-input-label for="koleksi1" :value="__('Koleksi1')" />
                        <select id="koleksi1" name="koleksi1" class="block mt-1 w-full" required autofocus>
                            <option value="-1">--Pilih dahulu--</option>
                            @foreach ($Koleksi as $kols)
                                @if ($kols->id == old('koleksi1'))
                                    <option value="{{ $kols->id }}" selected>{{ $kols->namaKoleksi }}</option>
                                @else
                                    <option value="{{ $kols->id }}">{{ $kols->namaKoleksi }}</option>
                                @endif
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('koleksi1')" class="mt-2" />
                    </div>

                     <!-- Koleksi 2-->
                     <div class="mb-4">
                        <style>
                            select, option {
                                background-color: rgb(18, 21, 31);
                            }
                        </style>
                        <x-input-label for="koleksi2" :value="__('Koleksi2')" />
                        <select id="koleksi2" name="koleksi2" class="block mt-1 w-full" required autofocus>
                            <option value="-1">--Pilih dahulu--</option>
                            @foreach ($Koleksi as $kols)
                                @if ($kols->id == old('koleksi2'))
                                    <option value="{{ $kols->id }}" selected>{{ $kols->namaKoleksi }}</option>
                                @else
                                    <option value="{{ $kols->id }}">{{ $kols->namaKoleksi }}</option>
                                @endif
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('koleksi2')" class="mt-2" />
                    </div>

                    <!-- Koleksi 3-->
                    <div class="mb-4">
                        <style>
                            select, option {
                                background-color: rgb(18, 21, 31);
                            }
                        </style>
                        <x-input-label for="koleksi3" :value="__('Koleksi3')" />
                        <select id="koleksi3" name="koleksi3" class="block mt-1 w-full" required autofocus>
                            <option value="-1">--Pilih dahulu--</option>
                            @foreach ($Koleksi as $kols)
                                @if ($kols->id == old('koleksi3'))
                                    <option value="{{ $kols->id }}" selected>{{ $kols->namaKoleksi }}</option>
                                @else
                                    <option value="{{ $kols->id }}">{{ $kols->namaKoleksi }}</option>
                                @endif
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('koleksi3')" class="mt-2" />
                    </div>

                    <x-primary-button class="mb-4 bg-gray">
                        {{ __('Tambah Koleksi') }}
                    </x-primary-button>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 

