@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools">
                <a class="btn btn-sm btn-primary mt-1" href="{{ url('user/create') }}">Tambah</a>
            </div>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if (session('error'))
                <div class="alert alert-success">{{ session('error') }}</div>
            @endif
            <table class="table table-bordered table-striped table-hover table-sm" id="table_user">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Level Pengguna</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection

@push('css')
@endpush

@push('js')
<script>
    $(document).ready(function() {
        var dataUser = $('#table_user').DataTable({
            serverSide: true,
            ajax: {
                "url": "{{ url('user/list') }}",
                "dataType": "json",
                "type": "POST",
                "data": function(d) {
                    d.level_id = $('#level_id').val(); // Filter level_id jika ada
                }
            },
            // Mengatur pengurutan default berdasarkan user_id
            order: [
                [0, 'asc'] // Mengurutkan berdasarkan kolom pertama (user_id)
            ],
            columns: [
                {
                    data: 'user_id', // Pastikan data ID diambil dari response server
                    className: "text-center",
                    width: "5%",
                    orderable: true // Memungkinkan kolom ID untuk diurutkan
                },
                {
                    data: "level.level_nama", // Data level pengguna dari relasi ORM
                    orderable: false // Kolom level tidak bisa diurutkan
                },
                {
                    data: "nama", // Nama pengguna
                    orderable: true, // Kolom ini bisa diurutkan
                },
                {
                    data: "username", // Username pengguna
                    orderable: true, // Kolom ini bisa diurutkan
                },
                {
                    data: 'action', // Tombol aksi (Edit, Hapus, dsb.)
                    orderable: false, // Kolom aksi tidak perlu diurutkan
                    searchable: false // Tidak perlu pencarian pada kolom aksi
                }
            ]
        });

        // Reload tabel saat filter level diubah
        $('#level_id').on('change', function() {
            dataUser.ajax.reload();
        });
    });
</script>

@endpush
