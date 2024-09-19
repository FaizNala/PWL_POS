<html>
    <head>
        <title>Form Tambah</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-5">
            <h1 class="mb-4">Form Tambah Data User</h1>
            <a href="/user" class="btn btn-secondary mb-3">Kembali</a>

            <form method="post" action="/user/tambah_simpan">
                {{ csrf_field() }}

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingUsername" name="username" placeholder="Masukkan Username">
                    <label for="floatingUsername">Username</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingName" name="name" placeholder="Masukkan Nama">
                    <label for="floatingName">Name</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Masukkan Password">
                    <label for="floatingPassword">Password</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="floatingLevelID" name="level_id" placeholder="Masukkan ID Level">
                    <label for="floatingLevelID">Level ID</label>
                </div>

                <input type="submit" class="btn btn-success" value="Simpan">
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGFf8z+MLldzfs6rrcFjcGY8am53bOuZ9a/0zc4l5VHA" crossorigin="anonymous"></script>
    </body>
</html>
