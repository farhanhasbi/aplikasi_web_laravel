@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Menu Galeri</title>
</head>

<body>

    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <table class="table" id="table">
                    <thead>
                    <tr class="bg-info">
                        <th>ID</th>
                        <th>Gambar</th>
                        <th>Dibuat</th>
                        <th>Author</th>
                        <td>Modify<a class="btn btn-light" style="margin-left:25px;"
                                href="{{url('getgaleri') }}">Tambah</a></td>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function () {
        $('#table').DataTable({
            processing: true,
            serverSide: true,
            ajax: 'galeri/json',
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'gambar',
                    name: 'gambar'
                },
                {
                    data: 'created_at',
                    name: 'created_at'
                },
                {
                    data: 'author',
                    name: 'author'
                },
                {
                    "data": "id",
                    "searchable": false,
                    "sortable": false,
                    "render": function (id, type, full, meta) {
                        return '<a href="/deletegaleri/' + id +
                            '" class="btn btn-danger">Delete</a>';
                    }
                },
            ]
        })
    })

</script>
</body>

</html>
@endsection
