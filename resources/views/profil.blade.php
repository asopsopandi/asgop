@extends('template')
@section('content')
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
        <form action="{{ $action }}" method="post" enctype="multipart/form-data">
            @csrf
            <h4 class="text-center">Setting Portopolio</h4>
            <div class="mb-2">
                <label for="" class="form-label">Nis</label>
                <input type="text" name="nis" id="nis" class="form-control"  value="{{ $nis }}" placeholder="Masukan Nis">
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Nama</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $name }}" placeholder="Masukan Nama">
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Jenis Kelamin</label>
                <select name="jk" id="jk" class="form-select">
                    <option value="">Jenis Kelamin</option>
                    <option value="L" {{ $jk=='L'?'selected':'' }}>Laki-Laki</option>
                    <option value="P" {{ $jk=='P'?'selected':'' }}>Perempuan</option>
                </select>
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Tempat Tanggal Lahir</label>
                <input type="text" name="ttl" id="ttl" class="form-control" value="{{ $ttl }}" placeholder="Masukan Tempat Tanggal Lahir">
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Sekolah</label>
                <input type="text" name="sekolah" id="sekolah" class="form-control" value="{{ $sekolah }}" placeholder="Masukan Sekolah">
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $alamat }}" placeholder="Masukan Alamat">
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Foto</label>
                <img src="/storage/{{ $foto }}" alt="" width="100">
                <input type="File" name="foto" id="foto" class="form-control">
            </div>
            <div class="mb-2">
                <input type="submit" value="Simpan" class="btn btn-primary form-control">
            </div>
        </form>
    </body>
    </html>
@endsection