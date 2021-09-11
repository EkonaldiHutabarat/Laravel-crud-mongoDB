<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="{{url('/store')}}" method="POST">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Form Tambah Data Buku
                </div>
                <div class="panel-body">
                    @csrf
                    <div class="row form-group">
                        <label class="col-lg-2 col-md-2">Judul Buku</label>
                        <div>
                            <input type="text" value="" name="judul_buku" placeholder="Judul Buku" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row form-group">
                        <label class="col-lg-2 col-md-2">Pengarang</label>
                        <div>
                            <input type="text" value="" name="pengarang" placeholder="Pengarang" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row form-group">
                        <label class="col-lg-2 col-md-2">Jumlah Halaman</label>
                        <div>
                            <input type="text" value="" name="halaman" placeholder="jumlah halaman" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <input type="submit" value="Simpan" class="btn btn-success btn-sm">
                </div>
            </div>
        </form>

    </div>
</body>
</html>
