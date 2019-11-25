@extends('base.bootstrap')

@section('title', 'Custom Clothing')

@section('bootstrap')
<head>
  <link rel="stylesheet" href="{{ asset('css/product.css') }}">
  <link rel="stylesheet" href="{{ asset('css/kain.css') }}">
</head>
<!-- Navbar -->
<nav class="navbar navbar-light bg-dark fixed-top">
  <div class="container">
    <a href="{{ url('home') }}" class="brand-logo cc"><img src="{{ asset('img/cc.png') }}" alt=""></a>
    <form class="form-inline">
      <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img class="boy" src="{{ asset('img/boy.png') }}" alt="">
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="#">Lihat Akun</a>
          <a class="dropdown-item" href="{{ url('logout') }}">Keluar</a>
        </div>
      </div>
    </form>
  </div>
</nav>
<!-- End Navbar -->

<!-- Form -->
<div class="formkain">
  <div class="card form1">
    <div class="card-header daftar">Pilih Kain</div>
    <div class="card-body gambar">
      @error('product_id')
        <div class="alert alert-danger" role="alert">
          {{ $message }}
        </div>
      @enderror
      <form action="product" method="post">
          @csrf
          <div class="row">
            @foreach( $product as $pro )
            <div class="col-md-4 col-lg-4 col-sm-4">
              <label>
                <input type="radio" name="product_id" class="card-input-element" value="{{ $pro -> id }}" />
                <div class="card panel panel-default card-input">
                  <img src="{{ asset('imgupl/kain/'.$pro -> file) }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">{{ $pro -> jeniskain }}</h5>
                    <p class="card-text">{{ $pro -> keterangan }}</p>
                    <p class="card-text">Harga : IDR {{ $pro -> harga }}/pcs</p>
                  </div>
                </div>
              </label>
            </div>
            @endforeach
          </div>
        <button type="submit" class="btn btn-primary tombolnext">Next</button>
      </form>
    </div>
  </div>
</div>
<!-- End Form -->

@endsection
