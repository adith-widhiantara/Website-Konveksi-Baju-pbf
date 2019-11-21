@extends('base.materialize')

@section('title', 'Custom Clothing')

@section('materialize')
<head>
  <link rel="stylesheet" href="css/welcome.css">
</head>
<!-- Navbar -->
<nav>
  <div class="nav-wrapper grey darken-3">
    <div class="container">
      <a href="#" class="brand-logo cc"><img src="img/cc.png" alt=""></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="">Home</a></li>
        <li><a href="home/product">Produk Kami</a></li>
        <li><a href="{{ url('home/keranjang') }}">Keranjang</a></li>
        <li><a class='dropdown-trigger btn grey darken-3 akun' href='#' data-target='dropdown1'>{{ Auth::user()->Nama }}</a></li>

        <ul id='dropdown1' class='dropdown-content'>
          <li><a href="#!">Lihat Akun</a></li>
          <li><a href="logout">Keluar</a></li>
        </ul>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->

<!-- Slider -->
<div class="slider">
  <ul class="slides">
    <li>
      <img src="img/slider/a.png"> <!-- random image -->
      <div class="caption center-align">
        <h3>Pilih Warna Favoritmu!</h3>
        <h5 class="light grey-text text-lighten-3">Custom Clothing!</h5>
      </div>
    </li>
    <li>
      <img src="img/slider/b.png"> <!-- random image -->
      <div class="caption left-align">
        <h3>Pilih Desain Yang Kamu Suka!</h3>
        <h5 class="light grey-text text-lighten-3">Custom Clothing!</h5>
      </div>
    </li>
    <li>
      <img src="img/slider/c.png"> <!-- random image -->
      <div class="caption right-align">
        <h3>Kreasikan Keunikanmu!</h3>
        <h5 class="light grey-text text-lighten-3">Custom Clothing!</h5>
      </div>
    </li>
  </ul>
</div>
<!-- End Slider -->

<!-- parallax -->
<div class="parallax-container">
  <div class="parallax"><img src="img/bg1.jpg"></div>
  <div class="container">
    <div class="kartu">
      <div class="row">

        <div class="col s3">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="img/parallax_login/cart.png">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Kemudahan Belanja<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Kemudahan Belanja<i class="material-icons right">close</i></span>
              <p>Dengan menggunakan situs belanja online kami, memudahkan anda dalam memilih produk kaos yang anda inginkan. Anda cukup duduk, memesan dan menunggu barang anda datang.</p>
            </div>
          </div>
        </div>

        <div class="col s3">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="img/parallax_login/wallet.png">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Harga Terjangkau<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Harga Terjangkau<i class="material-icons right">close</i></span>
              <p>Situs kami menawarkan harga yang bersahabat untuk dompet anda. Anda tidak perlu menguras kantong dalam - dalam demi membeli produk kami.</p>
            </div>
          </div>
        </div>

        <div class="col s3">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="img/parallax_login/brush.png">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Custom Desain Kaos<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Custom Desain Kaos<i class="material-icons right">close</i></span>
              <p>Dalam situs kami, anda bisa memilih desain untuk kaos anda, sehingga anda bisa memiliki desain unlimited, hanya untuk anda saja.</p>
            </div>
          </div>
        </div>

        <div class="col s3">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="img/parallax_login/shirt.png">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Variasi Warna Kaos<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Variasi Warna Kaos<i class="material-icons right">close</i></span>
              <p>Kami menawarkan variasi warna yang cukup beragam, sehingga anda bisa memilih warna favorit anda.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- end parallax -->

<!-- Footer -->
<footer class="page-footer grey darken-3">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">Framework</h5>
        <p class="grey-text text-lighten-4">&copy 2019</p>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Sosial Media Kita</h5>
        <div class="s-m">
          <a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- End Footer -->


@endsection
