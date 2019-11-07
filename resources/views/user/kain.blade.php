@extends('base.bootstrap')

@section('title', 'Custom Clothing')

@section('bootstrap')
<head>
  <link rel="stylesheet" href="{{ asset('css/product.css') }}">
</head>
<!-- Navbar -->
<nav class="navbar navbar-light bg-dark">
  <div class="container">
    <a href="{{ url('home') }}" class="brand-logo cc"><img src="{{ asset('img/cc.png') }}" alt=""></a>
    <form class="form-inline">
      <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img class="boy" src="{{ asset('img/boy.png') }}" alt="">
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>
    </form>
  </div>
</nav>
<!-- End Navbar -->

<div class="">
  <div class="kain">
    <img src="{{ asset('img/listkain/backgroundkain.jpg') }}" class="img-fluid kain" alt="Responsive image">
  </div>
  <div class="card form1">
    <div class="card-header daftar">Pilih Kain</div>
  <div class="card-body gambar">

        <form method="POST" action="">
            @csrf

            <div class="row">
              <div class="col-md-4 col-lg-4 col-sm-4">
                <label>
                  <input type="radio" name="product" class="card-input-element" />
                  <div class="card panel panel-default card-input">
                    <img src="{{ asset('img/listkain/carded.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                    </div>
                  </div>
                </label>
              </div>

              <div class="col-md-4 col-lg-4 col-sm-4">
                <label>
                  <input type="radio" name="product" class="card-input-element" />
                  <div class="card panel panel-default card-input">
                    <img src="{{ asset('img/listkain/combed30s.PNG') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                    </div>
                  </div>
                </label>
              </div>

              <div class="col-md-4 col-lg-4 col-sm-4">
                <label>
                  <input type="radio" name="product" class="card-input-element" />
                  <div class="card panel panel-default card-input">
                    <img src="{{ asset('img/listkain/hyget.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                    </div>
                  </div>
                </label>
              </div>

              <div class="col-md-4 col-lg-4 col-sm-4">
                <label>
                  <input type="radio" name="product" class="card-input-element" />
                  <div class="card panel panel-default card-input">
                    <img src="{{ asset('img/listkain/tc.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                    </div>
                  </div>
                </label>
              </div>

            </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

  </div>
</div>
</div>

@endsection
