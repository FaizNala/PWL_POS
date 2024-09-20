<html>
    <head>
        <title>Form Ubah</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-5">
            <h1 class="mb-4">Form Ubah Data User</h1>
            <a href="/user" class="btn btn-secondary mb-3">Kembali</a>

            <form method="post" action="/user/ubah_simpan/{{$data->user_id}}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingUsername" name="username" placeholder="Masukkan Username" value="{{$data->username}}">
                    <label for="floatingUsername">Username</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingName" name="name" placeholder="Masukkan Nama" value="{{$data->name}}">
                    <label for="floatingName">Name</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Masukkan Password" value="{{$data->name}}">
                    <label for="floatingPassword">Password</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="floatingLevelID" name="level_id" placeholder="Masukkan ID Level" value="{{$data->level_id}}">
                    <label for="floatingLevelID">Level ID</label>
                </div>

                <input type="submit" class="btn btn-success" value="Ubah">
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
