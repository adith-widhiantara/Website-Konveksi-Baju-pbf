@extends('user.keranjang.base')

@section('title', 'Detail Barang | Custom Clothing')

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
                </ul>
              </div>
              <div class="col-6">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Jumlah : <b>{{ $buy -> jumlah }}</b></li>
                  <li class="list-group-item">Ukuran : <b>{{ $buy -> ukuran }}</b></li>
                  <li class="list-group-item">Biaya : <b>{{ $buy -> biaya }}</b></li>
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

<!-- Form -->
<div class="formkeranjang">
  <div class="container">
    <div class="row">
      <div class="col-4">
        <div class="card">
          @if($buy -> buktitf == "")
            <img src="{{ asset('img/buktitf.png') }}" class="card-img-top buktitf" alt="...">
          @else
            <img src="{{ asset('imgupl/buktitf/'.$buy->buktitf) }}" class="card-img-top buktitf" alt="...">
          @endif
          <div class="card-body">
            <h5 class="card-title">Upload Bukti Transfer</h5>
            <p class="card-text">Maksimal ukuran 2MB. Bertipe .png, .jpg, dan .jpeg</p>
            <form action="" method="post" enctype="multipart/form-data">
              @method('patch')
              @csrf
              <div class="form-group">
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="buktitf">
              </div>
              <button type="submit" class="btn btn-secondary">Upload</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-8">
        <div class="card">
          <div class="card-body">
            <form>
              <fieldset disabled>
                <div class="form-group">
                  <label for="disabledTextInput">Nama</label>
                  <input type="text" id="disabledTextInput" class="form-control" value="{{ $buy -> user -> Nama }}">
                </div>

                <div class="form-group">
                  <label for="disabledTextInput">Nomor Telepon</label>
                  <input type="text" id="disabledTextInput" class="form-control" value="{{ $buy -> user -> nomorhp }}">
                </div>

                <div class="form-group">
                  <label for="disabledTextInput">Alamat</label>
                  <input type="text" id="disabledTextInput" class="form-control" value="{{ $buy -> user -> Alamat  }}">
                </div>
              </fieldset>
            </form>
            <div style="float: right;">
              <a class="btn btn-secondary" href="#">Edit Profil</a>
              <a class="btn btn-success" href="{{ url('home/keranjang') }}">Konfirmasi</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Form -->
@endsection
