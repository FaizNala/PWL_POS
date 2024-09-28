@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools">
                <a class="btn btn-sm btn-primary mt-1" href="{{ url('supplier/create') }}">Tambah</a>
            </div>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Filter</label>
                        <div class="col-3">
                            <select type="text" class="form-control" id="supplier_kode" name="supplier_kode" required>
                                <option value="">- Semua -</option>
                                @foreach ($supplier as $item)
                                    <option value="{{ $item->supplier_kode }}">{{ $item->supplier_kode }}</option>
                                @endforeach
                            </select>
                            <small class="form-text text-muted">Kode supplier</small>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table-bordered table-striped table-hover table-sm table" id="table_supplier">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kode supplier</th>
                        <th>Nama supplier</th>
                        <th>Nama Alamat</th>
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
            var datasupplier = $('#table_supplier').DataTable({
                serverSide: true, // Menggunakan server-side processing
                ajax: {
                    "url": "{{ url('supplier/list') }}", // Endpoint untuk mengambil data supplier
                    "dataType": "json",
                    "type": "POST",
                    "data": function(d) {
                        d.supplier_kode = $('#supplier_kode')
                    .val(); // Mengirim data filter supplier_kode
                    }
                },
                columns: [{
                        data: "DT_RowIndex", // Menampilkan nomor urut dari Laravel DataTables addIndexColumn()
                        className: "text-center",
                        width: "8%",
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: "supplier_kode",
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: "supplier_nama",
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: "supplier_nama",
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: "action", // Kolom aksi (Edit, Hapus)
                        orderable: false,
                        searchable: false
                    }
                ]
            });

            // Reload tabel saat filter supplier diubah
            $('#supplier_kode').on('change', function() {
                datasupplier.ajax.reload(); // Memuat ulang tabel berdasarkan filter yang dipilih
            });
        });
    </script>
@endpush
