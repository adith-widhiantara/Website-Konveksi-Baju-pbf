@extends('base.bootstrap')

@section('title', 'Keranjang | Custom Clothing')

@section('bootstrap')
<head>
  <link rel="stylesheet" href="{{ asset('css/keranjang.css') }}">
</head>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a href="{{ url('home') }}" class="brand-logo cc"><img src="{{ asset('img/cc.png') }}" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

      </ul>
      <div class="form-inline">
        <div class="dropdown">
          <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="boy" src="{{ asset('img/boy.png') }}" alt="">
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="#">Lihat Akun</a>
            <a class="dropdown-item" href="{{ url('logout') }}">Keluar</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
<!-- End Navbar -->

@yield('basekeranjang')
@endsection
