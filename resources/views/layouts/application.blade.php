<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .bg-gradient-green {
            background: rgb(51, 96, 49);
            background: linear-gradient(0deg, rgba(51, 96, 49, 1) 0%, rgba(15, 245, 34, 1) 100%);
        }
    </style>
</head>

<body>
    <div id="app">
        <div class="topbar py-2 bg-white">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img height="60px" src="{{ asset('assets/images/logo.png') }}" alt="">
                        </a>
                    </div>
                    <button class="navbar-toggler d-block d-md-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <i class="fa fa-bars fa-lg"></i>
                    </button>


                    <div class="search d-none d-md-block">
                        <div class="input-group">
                            <span class="input-group-append">
                                <button class="btn bg-white border-start-0 rounded-pill ms-n3" type="button">
                                    <i class="fa fa-search fa-lg"></i>
                                </button>
                            </span>
                            <input class="form-control border-end-0 border rounded-pill" type="text" value="search" id="example-search-input">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="search d-block d-md-none">
                        <div class="input-group">
                            <span class="input-group-append">
                                <button class="btn bg-white border-start-0 rounded-pill ms-n3" type="button">
                                    <i class="fa fa-search fa-lg"></i>
                                </button>
                            </span>
                            <input class="form-control border-end-0 border rounded-pill" type="text" value="search" id="example-search-input">
                        </div>
                    </div>
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Menu
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('/berita') }}">Berita</a>
                                <a class="dropdown-item" href="{{ url('/event') }}">Program & Event</a>
                                <a class="dropdown-item" href="{{ url('/aplikasi') }}">Aplikasi & Prototipe</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/galeri') }}">Galeri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/berita') }}">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/kontak') }}">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/#') }}">Tentang Kami</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link my-1 btn btn-outline-secondary px-4 py-1 mx-1" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link my-1 btn btn-outline-secondary px-4 py-1 mx-1" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-2">
            @yield('content')
        </main>

        <div class="footer">
            <div class="bg-dark py-4">
                <div class="text-center text-white">
                    <a>&copy; Copyright 2021 Direktorat Industri Elektronika & Telematika - Dirjen ILMATE Kementrian Perindustrian</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>