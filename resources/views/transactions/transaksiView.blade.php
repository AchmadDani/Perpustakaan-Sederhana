<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Transaksi</title>
    <!-- Tambahkan link CSS DataTables -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Daftar Koleksi') }}
            </h2>
        </x-slot>
    {{-- Achmad Dani Saputa | 6706223131--}}
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-grey dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-white-900 dark:text-gray-100">

    <div class="row form-group">
        <label class="form-label">Peminjam*</label>
        <input id="peminjam" name="peminjam" type="text" class="form-control" autocomplete="off" value="{{ $transactions->fullnamePeminjaman }}" readonly>
    </div>
    <div class="row form-group">
        <label class="form-label">Petugas*</label>
        <input id="petugas" name="petugas" type="text" class="form-control" autocomplete="off" value="{{ $transactions->fullnamePetugas }}" readonly>
    </div>
    <div class="row form-group mb-2">
        <table id="myTable" style="color: white;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Koleksi</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Status</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
</div>
</x-app-layout>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
   $(document).ready(function() {
    $('#myTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('detailTransaksi', $transactions->id) !!}',
        columns: [
                { data: 'id', name: 'id' },
                { data: 'koleksi', name: 'koleksi' },
                { data: 'tanggalPinjam', name: 'tanggalPinjam' },
                { data: 'tanggalKembali', name: 'tanggalKembali' },
                { data: 'status', name: 'status' },
                {
                    data: null,
                    render: function (data) {
                        return '<a href="' + "{{ route('detailTransaksi.pengembalian', '') }}" + '/' + data.id + '"><i class="bi bi-pencil-square"></i></a>';
                    },
                    orderable: false,
                    searchable: false
                }
        ]
    });
});
</script>
</body>
</html>