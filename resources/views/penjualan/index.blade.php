@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">Daftar penjualan</h3>
            <div class="card-tools">
                <a href="{{ url('/penjualan/export_excel') }}" class="btn btn-primary"><i class="fa fa-file-excel"></i> Export Penjualan</a>
                <a href="{{ url('/penjualan/export_pdf') }}" class="btn btn-warning"><i class="fa fa-file-pdf"></i> Export Penjualan</a>
                <button onclick="modalAction('{{ url('/penjualan/create_ajax') }}')" class="btn btn-success">Tambah Data (Ajax)</button>
            </div>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if (session('error'))
                <div class="alert alert-error">{{ session('error') }}</div>
            @endif
            <table class="table table-bordered table-striped table-hover table-sm" id="table-penjualan">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama penjualan</th>
                        <th>Pembeli</th>
                        <th>Penjualan Kode</th>
                        <th>Penjualan Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <div id="myModal" class="modal fade animate shake" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" data-width="75%" aria-hidden="true"></div>
@endsection

@push('css')
@endpush

@push('js')
    <script>
        function modalAction(url = '') {
            $('#myModal').load(url, function() {
                $('#myModal').modal('show');
            })
        }
        var dataPenjualan;
        $(document).ready(function() {
            dataPenjualan = $('#table-penjualan').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    "url": "{{ url('penjualan/list') }}",
                    "dataType": "json",
                    "type": "POST",
                    "data": function(d) {
                        d.filter_level = $('.filter_level').val();
                    }
                },
                columns: [{
                        data: "DT_RowIndex",
                        className: "text-center",
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: "user.nama",
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: "pembeli",
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: "penjualan_kode",
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: "penjualan_tanggal",
                        orderable: false,
                        searchable: false
                    },
                    {
                        // Kolom aksi (Edit, Hapus)
                        data: "aksi",
                        orderable: false,
                        searchable: false
                    }
                ]
            });

            $('#table-penjualan_filter input').unbind().bind().on('keyup', function(e) {
                if (e.keyCode == 13) { // enter key
                    dataPenjualan.search(this.value).draw();
                }
            });
        });
    </script>
@endpush
