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
    <div class="navbar navbar-expand-lg navbar-dark bg-secondary text-white">
        <div class="container">
            PORTOPOLIO
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar" aria-label="toggle navigation" aria-controls="mynavbar" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>

            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="profil" class="nav-link {{ Request::segment(1)=='profil'?'active':'' }}">profil</a>
                    </li>
                    <li class="nav-item">
                        <a href="portopolio" class="nav-link {{ Request::segment(1)=='portopolio'?'active':'' }}">portopolio</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a href="kelas" class="nav-link {{ Request::segment(1)=='Kelas'?'active':'' }}">Kelas</a>
                    </li> --}}
                    <li class="nav-item">
                        <a href="user/logout" class="nav-link">Keluar</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>