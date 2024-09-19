<html>

<head>
    <title>Data User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Data User</h1>
        <a href="/user/tambah" class="btn btn-success mb-3">+ Tambah User</a>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Name</th>
                    <th>ID Level Pengguna</th>
                    <th>Kode Level</th>
                    <th>Nama Level</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                    <tr>
                        <td>{{ $d->user_id }}</td>
                        <td>{{ $d->username }}</td>
                        <td>{{ $d->name }}</td>
                        <td>{{ $d->level_id }}</td>
                        <td>{{ $d->level->level_kode }}</td>
                        <td>{{ $d->level->level_nama }}</td>
                        <td>
                            <a href="/user/ubah/{{ $d->user_id }}" class="btn btn-primary text-white">Ubah</a>
                            <a href="/user/hapus/{{ $d->user_id }}" class="btn btn-danger text-white">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
