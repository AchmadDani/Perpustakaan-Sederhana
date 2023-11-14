<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pengembalian Kendaraan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Update Status Peminjaman') }}
            </h2>
        </x-slot>
        <style>
            
        </style>
    {{-- Achmad Dani Saputa | 6706223131--}}
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-grey dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-white-900 dark:text-gray-100">

                    <form action="{{ route('detailTransaksi.update', $detailTransaction->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                        <input type="hidden" name="id" value="{{ $detailTransaction->id }}" />
                        <div class="row form-group mt-4">
                            <label class="form-label">ID Transaksi</label>
                            <input id="idTransaksi" name="idTransaksi" type="text" class="form-control" autocomplete="off" value="{{ $detailTransaction->idTransaksi }}" readonly>
                        </div>
                        
                        <div class="row form-group mt-2">
                            <label class="form-label">ID Detail Transaksi</label>
                            <input id="idDetailTransaksi" name="idDetailTransaksi" type="text" class="form-control" autocomplete="off" value="{{ $detailTransaction->id }}" readonly>
                        </div>
                        
                        <div class="row form-group mt-2">
                            <label class="form-label">Peminjam</label>
                            <input id="idPeminjam" name="idPeminjam" type="text" class="form-control" autocomplete="off" value="{{ $detailTransaction->namaPeminjam }}" readonly>
                        </div>
                        <div class="row form-group mt-2">
                            <label class="form-label">Petugas</label>
                            <input id="idPetugas" name="idPetugas" type="text" class="form-control" autocomplete="off" value="{{ $detailTransaction->namaPetugas }}" readonly>
                        </div>
                        <div class="row form-group mt-2">
                            <label class="form-label">Koleksi</label>
                            <input id="koleksi" name="koleksi" type="text" class="form-control" autocomplete="off" value="{{ $detailTransaction->koleksi }}" readonly>
                        </div>
                        <div class="row form-group mt-2">
                            <x-input-label for="status" :value="__('Status')" />
                            <select id="status" name="status" class="block mt-1 w-full" required autofocus style="background-color: rgb(18, 21, 31); color: white;">
                                <option value="1" {{ $detailTransaction->status == 1 ? 'selected' : '' }}>Pinjam</option>
                                <option value="2" {{ $detailTransaction->status == 2 ? 'selected' : '' }}>Kembali</option>
                                <option value="3" {{ $detailTransaction->status == 3 ? 'selected' : '' }}>Hilang</option>
                            </select>
                            <x-input-error :messages="$errors->get('status')" class="mt-2" />
                        </div>

                        <x-primary-button class="mt-4 bg-black">
                            {{ __('edit status') }}
                        </x-primary-button>

                    </form>
                                               
            </div>
        </div>
    </div>
</div>
</x-app-layout>
</body>
</html>