<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Pengguna</title>
    <!-- Tambahkan link CSS DataTables -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Daftar Pengguna') }}
            </h2>
        </x-slot>                                           
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-grey dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">      {{-- ACHMAD DANI SAPUTRA | 6706223131 --}}
                    <div class="p-6 text-white-900 dark:text-gray-100">
                        <table id="myTable" class="display" style="color: aliceblue">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>fullname</th>
                                    <th>Email</th>
                                    <th>Lihat Detail</th>
                                </tr>
                            </thead>
                        </table>
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
            ajax: '{!! route('user.getData') !!}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'fullname', name: 'fullname' },
                { data: 'email', name: 'email' },
                {
                    data: null,
                    render: function (data) {
                        return '<a href="' + "{{ route('user.infoPengguna', '') }}" + '/' + data.id + '"><i class="bi bi-eye"></i></a>';
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



{{-- Datatables
$(document).ready( function() {
    $('#myTable').DataTable();
}) --}}

{{-- <table id="myTable">
    <thead>
        <tr style="color: white;">
            <th>ID</th>
            <th>Fullname</th>
            <th>Email</th>
            <th>Lihat Detail</th> <!-- Tambahkan kolom "View" -->
        </tr>
                                                             
        <tbody>
            @foreach ($users as $users)
            <tr style="color: white;">
                <td>{{ $users->id }}</td>
                <td>{{ $users->fullname }}</td>
                <td>{{ $users->email }}</td>
                <td>
                    <a href="{{ route('user.infoPengguna', ['user' => $users->id]) }}">
                        <i class="bi bi-eye"></i> <!-- Ikon "View" dengan Font Awesome -->
                    </a>
                </td>                    
            </tr>
            @endforeach
        </tbody>
    </thead>
</table> --}}