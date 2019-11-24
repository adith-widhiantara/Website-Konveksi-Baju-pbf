@extends('user.keranjang.base')

@section('title', 'Keranjang | Custom Clothing')

@section('basekeranjang')
<!-- Index -->
<div class="container index">
  @if (count($buy) < 1)
  <div class="card text-center">
    <div class="card-header">
      Custom Clothing
    </div>
    <div class="card-body">
      <h5 class="card-title">Keranjang Masih Kosong</h5>
      <p class="card-text">Klik tombol dibawah untuk memesan di Custom Clothing</p>
      <a href="{{ url('home/product') }}" class="btn btn-primary">Pesan Custom Clothing</a>
    </div>
    <div class="card-footer text-muted">
      Custom Clothing
    </div>
  </div>
  @else
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
                  @if($b -> statuspembayaran == 0)
                    <div class="alert alert-danger" role="alert">
                      Tolong segera selesaikan pembayaran! Klik <a href="{{ url('home/keranjang/detail/'.$b->id) }}" class="alert-link">Disini!</a> Untuk selesaikan pembayaran.
                    </div>
                  @elseif($b -> statuspembayaran == 1)
                    <div class="alert alert-warning" role="alert">
                      Pembayaran masih diproses. Mohon ditunggu.
                    </div>
                  @elseif($b -> statuspembayaran == 2)
                    <div class="alert alert-success" role="alert">
                      Pembayaran diterima! Klik <a href="{{ url('home/keranjang/resi/'.$b->id) }}" class="alert-link">Disini!</a> untuk mengetahui resi pengiriman!
                    </div>
                  @endif
                  <div class="row">
                    <div class="col-6">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">Jenis Kain : <b>{{ $b -> product -> jeniskain }}</b></li>
                        <li class="list-group-item">Desain : <b>{{ $b -> desain -> nama }}</b></li>
                        <li class="list-group-item">Warna : <b>{{ $b -> color -> Warna }}</b></li>
                      </ul>
                    </div>
                    <div class="col-6">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">Jumlah : <b>{{ $b -> jumlah }}</b></li>
                        <li class="list-group-item">Ukuran : <b>{{ $b -> ukuran }}</b></li>
                        <li class="list-group-item">Biaya : <b>{{ $b -> biaya }}</b></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  @endif
</div>
<!-- End Index -->
@endsection
