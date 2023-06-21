<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    
    @extends('template')
    @section('content')
    
    <style type="text/css">
        .pagination li{
            float: left;
            list-style-type:none ;
            margin: 10px;
        }
    </style>
    {{-- <form action="{{ url('portopolio/cari') }}" method="get">
        <input type="search" name="cari" id="cari" value="{{ $cari }}">
        <input type="submit" value="cari">
    </form> --}}
    <a href="{{ url('portopolio/add') }}" class="btn btn-success">Tambah Data</a>
    <div class="card mt-3">
        <div class="card-body">
            <div class="table-responsive">

    <table class="table table-hover table-bordered table-striped">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Deskripsi</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
    
        @foreach ($portopolio as $key => $item)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $item->nama_portopolio }}</td>
            <td>{{ $item->kategori }}</td>
            <td>{{ $item->deskripsi }}</td>
            <td>
                <img src="/storage/{{ $item->foto}}" alt="" width="100">
            </td>
            <td>
            <a href="/portopolio/hapus/{{ $item->id }}" class="btn btn-info" onclick="return window.confirm('hapus data ini?')">Hapus</a>
            <a href="/portopolio/edit/{{ $item->id }}" class="btn btn-danger">Edit</a>
        </td>
        </tr>
            
        @endforeach
    
    </table>
</div>

</div>

</div>
{{-- Total Portopolio: {{ $portopolio->count() }}<br> --}}
{{-- Total per halaman: {{ $siswa->perpage() }} --}}
{{-- {{ $siswa->links() }} --}}
{{-- {{ $portopolio->links() }} --}}
    @endsection
</body>
</html>