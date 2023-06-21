@extends('template')
@section('content')
@if ($errors->any())
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
    
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ $action }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-2">
            <label for="" class="form-label">Nama</label>
            <input type="text" name="nama_portopolio" id="nama_portopolio" class="form_control" value="{{ $portopolio->nama_portopolio }}" placeholder="Masukan Nama">
        </div>
        <div class="mb-2">
            <label for="" class="form-label">Kategori</label>
            <input type="text" name="kategori" id="kategori" class="form_control" value="{{ $portopolio->kategori }}" placeholder="Masukan Kategori">
        </div>
        <div class="mb-2">
            <label for="" class="form-label">deskripsi</label>
            <input type="text" name="deskripsi" id="deskripsi" class="form_control" value="{{ $portopolio->deskripsi }}" placeholder="Masukan Deskripsi">
        </div>
        <div class="mb-2">
            <label for="" class="form-label">Foto</label>
            <input type="file" name="foto" id="foto" class="form_control">
        </div>
        <div class="mb-2">
            <td colspan="2" align="center">
                <input type="submit" value="{{ $tombol }}">
            </td>
        </div>
    </form>
    @endsection
</body>
</html>