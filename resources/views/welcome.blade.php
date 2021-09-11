<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        @if(Session::has('msg'))
        @if(Session('msg')== "save success")
        <p class="alert alert-success"><strong>Berhasil</strong>Data buku berhasil ditambah</p>
        @endif()
        @if(Session('msg')== "save edit")
        <p class="alert alert-success"><strong>Berhasil</strong>Data buku berhasil di edit</p>
        @endif()
        @if(Session('msg')== "success delete")
        <p class="alert alert-success"><strong>Berhasil</strong>Data buku berhasil di hapus</p>
        @endif()
        @endif
        <div class="panel panel-default">
            <div class="panel-heading">
                List Buku
                <a href="{{url('/add')}}" class="btn btn-success btn-sm">Tambah Data</a>
                <div class="panel-body">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul Buku</th>
                                <th scope="col">Pengarang</th>
                                <th scope="col">Jumlah Halaman</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($buku as $key=>$value)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td>{{$value->judul_buku}}</td>
                                <td>{{$value->pengarang}}</td>
                                <td>{{$value->halaman}}</td>
                                <td>
                                    <a href="{{url('/edit').'/'.$value->_id}}" class="btn btn-primary">Edit</a>
                                    <a href="{{url('/delete').'/'.$value->_id}}" class="btn btn-warning">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
