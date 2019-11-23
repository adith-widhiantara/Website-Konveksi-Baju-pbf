@extends('base.bootstrap')

@section('title', 'Custom Clothing')

@section('bootstrap')
<head>
  <link rel="stylesheet" href="{{ asset('css/keranjang.css') }}">
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

<!-- Cards -->
<div style="margin-top: 100px;" class="container index">
  @foreach( $buy as $b )
    <div class="row">
      <div class="col-10 offset-1">
        <div class="card mb-3">
          <div class="row no-gutters">
            <div class="col-md-3">
              <div id="carouselExampleIndicators-{{ $b->id }}" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('imgupl/desain/'.$b->desain->file) }}" class="d-block w-100 img-thumbnail" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('imgupl/kain/'.$b->product->file) }}" class="d-block w-100 img-thumbnail" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('imgupl/warna/'.$b->color->Gambar) }}" class="d-block w-100 img-thumbnail" alt="...">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators-{{ $b->id }}" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators-{{ $b->id }}" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <div class="col-md-9">
              <div class="card-body">
                <div class="alert alert-secondary" role="alert">
                  <!-- Button trigger modal -->
                  Klik <a class="alert-link" href="#" role="button" data-toggle="modal" data-target="#exampleModal">Size Chart</a> untuk mengetahui ukuran baju.

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Size Chart</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body text-center">
                          <img src="{{ asset('img/sizechart.png') }}" alt="">
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <ul class="list-group list-group-flush">
                      <form>
                        <fieldset disabled>
                          <li class="list-group-item">
                            <div class="input-group input-group-sm mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Jenis Kain</span>
                              </div>
                              <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="{{ $b -> product -> jeniskain }}">
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="input-group input-group-sm mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Desain</span>
                              </div>
                              <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="{{ $b -> desain -> nama }}">
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="input-group input-group-sm mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Warna</span>
                              </div>
                              <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="{{ $b -> color -> Warna }}">
                            </div>
                          </li>
                        </fieldset>
                      </form>
                    </ul>
                  </div>
                  <div class="col-6">
                    <form method="post">
                      @method('patch')
                        @csrf
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                              <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="inputGroup-sizing-sm">Ukuran</span>
                                </div>
                                <select name="ukuran" class="form-control form-control-sm">
                                  <option value="" selected>Ukuran Baju</option>
                                  <option value="S">S</option>
                                  <option value="M">M</option>
                                  <option value="L">L</option>
                                  <option value="XL">XL</option>
                                  <option value="XXL">XXL</option>
                                </select>
                              </div>
                            </li>
                            <li class="list-group-item">
                              <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="inputGroup-sizing-sm">Jumlah</span>
                                </div>
                                <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="jumlah">
                              </div>
                            </li>
                            <li class="list-group-item">
                              <button style="float: right;" type="submit" class="btn btn-primary btn-sm">Selesai!</button>
                            </li>
                          </ul>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endforeach
</div>
<!-- End Cards -->


@endsection
