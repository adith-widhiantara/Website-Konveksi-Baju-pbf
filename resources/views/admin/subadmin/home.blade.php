@extends('base.bootstrap')

@section('title', 'Halaman Admin')

@section('bootstrap')
<head>
  <!-- <link rel="stylesheet" href="css/assets/vendor/bootstrap/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="css/assets/vendor/fonts/circular-std/style.css">
  <link rel="stylesheet" href="css/assets/libs/css/style.css">
  <!-- <link rel="stylesheet" href="css/assets/vendor/fonts/fontawesome/css/fontawesome-all.css"> -->

  <link rel="stylesheet" href="css/assets/vendor/charts/chartist-bundle/chartist.css">
  <link rel="stylesheet" href="css/assets/vendor/charts/morris-bundle/morris.css">
  <link rel="stylesheet" href="css/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="css/assets/vendor/charts/c3charts/c3.css">
  <link rel="stylesheet" href="css/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">

  <link rel="stylesheet" href="css/admin.css">
</head>

<div class="dashboard-main-wrapper">

<!-- Navbar -->
  <div class="dashboard-header">
    <nav class="navbar navbar-expand-lg bg-dark fixed-top">
        <a href="#" class="brand-logo cc"><img src="img/cc.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-right-top kanan">
                <li class="nav-item dropdown nav-user">
                    <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/boy.png" alt="" class="user-avatar-md rounded-circle"></a>
                    <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                        <div class="nav-user-info">
                            <h5 class="mb-0 text-white nav-user-name">{{ Auth::user()->Nama }}</h5>
                            <span class="status"></span><span class="ml-2">Selamat Bekerja</span>
                        </div>
                        <a class="dropdown-item" href="#"><i class="fa fa-user-o mr-2"></i>Akun</a>
                        <a class="dropdown-item" href="logout"><i class="fa fa-sign-out mr-2"></i>Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- End Navbar -->

<!-- Left Side Bar -->
<div class="nav-left-sidebar sidebar-light">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-product-hunt"></i>Produk</a>
                        <div id="submenu-1" class="collapse submenu bg-light" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="">Bahan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Desain</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Stock</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user">Data Pembeli</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fa fa-money" aria-hidden="true"></i>Transaksi</a>
                        <div id="submenu-3" class="collapse submenu bg-light" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="">Transaksi Berlangsung</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Transaksi Berhasil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Transaksi Gagal</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- End Left Side Bar -->

</div>

<!-- Script -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
@endsection
