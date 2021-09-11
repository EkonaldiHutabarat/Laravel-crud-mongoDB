<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD & MongoDb</title>
    <style>
    .wrap-form {
        margin: 20px;
        border: 1px solid;
        border-radius: 3px;
    }

    .form-label {
        align: center;
        color: #0B5ED7;
        text-align: center;
        font-weight: bold;
    }
    label{
        color: #0B5ED7;
        margin: 5px;
    }
    </style>
</head>

<body>
    <div class="container">
        <form action="{{url('/store')}}" method="POST" class="wrap-form">
            <div style="margin:20px">
                <div class="form-label">
                    Form Tambah Data Buku
                </div>
                @csrf
                <div class="form-group">
                    <label>Judul Buku</label>
                    <input type="text" class="form-control" name="judul_buku" placeholder="Judul Buku" required="">
                </div>
                <div class="form-group">
                    <label>Pengarang</label>
                    <input type="text" value="" name="pengarang" placeholder="Pengarang" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>Jumlah Halaman</label>
                    <input type="text" value="" name="halaman" placeholder="halaman" class="form-control" required="">
                </div>
                <div class="form-group" style="padding-top: 10px;">
                    <input type="submit" value="Simpan" class="btn btn-primary btn-sm">
                </div>
            </div>
        </form>

    </div>
</body>

</html>
