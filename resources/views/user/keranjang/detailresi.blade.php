@extends('user.keranjang.base')

@section('basekeranjang')
<!-- Cards Detail -->
<div class="row detailkeranjang">
  <div class="col-10 offset-1">
    <div class="card mb-3">
      <div class="row no-gutters">
        <div class="col-md-3">
          <div id="carouselExampleIndicators-{{ $buy->id }}" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('imgupl/desain/'.$buy->desain->file) }}" class="d-block w-100 img-thumbnail" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('imgupl/kain/'.$buy->product->file) }}" class="d-block w-100 img-thumbnail" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('imgupl/warna/'.$buy->color->Gambar) }}" class="d-block w-100 img-thumbnail" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators-{{ $buy->id }}" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators-{{ $buy->id }}" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="col-md-9">
          <div class="card-body">
            <div class="row">
              <div class="col-6">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Jenis Kain : <b>{{ $buy -> product -> jeniskain }}</b></li>
                  <li class="list-group-item">Desain : <b>{{ $buy -> desain -> nama }}</b></li>
                  <li class="list-group-item">Warna : <b>{{ $buy -> color -> Warna }}</b></li>
                  <li class="list-group-item">Resi : <b>{{ $buy -> resi }}</b></li>
                </ul>
              </div>
              <div class="col-6">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Jumlah : <b>{{ $buy -> jumlah }}</b></li>
                  <li class="list-group-item">Ukuran : <b>{{ $buy -> ukuran }}</b></li>
                  <li class="list-group-item">Biaya : <b>{{ $buy -> biaya }}</b></li>
                  <li class="list-group-item"><a class="btn btn-primary" href="{{ url('home/keranjang') }}">Kembali</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Cards Detail -->
@endsection
