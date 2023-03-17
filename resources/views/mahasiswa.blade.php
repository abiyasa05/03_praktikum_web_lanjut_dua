@extends('layouts/master')

@section('title', 'Data Mahasiswa')

@section('pages')

@section('page', 'Data Mahasiswa')

@section('konten_mahasiswa')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
</head>
<body>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>Nim</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Jenis Kelamin</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->nim}}</td>
                    <td>{{ $item->nama}}</td>
                    <td>{{ $item->alamat}}</td>
                    <td>{{ $item->jk}}</td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
</body>
</html>
@endsection