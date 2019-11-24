@extends('admin.home')

@section('title', 'Detail Transaksi | Custom Clothing')

@section('admin')
<head>
  <link rel="stylesheet" href="{{ url('css/detailtransaksi.css') }}">
</head>

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
      <div class="row">
        <div class="statuspembayaran col-10 offset-1">
          @if($buy -> statuspembayaran == 0)
            <div class=" alert alert-danger" role="alert">
              Belum dibayar
            </div>
          @elseif($buy -> statuspembayaran == 1)
            <div class="alert alert-warning" role="alert">
              Belum dicek
            </div>
          @elseif($buy -> statuspembayaran == 2)
            @if($buy -> resi == null)
              <div class="alert alert-success" role="alert">
                Pembayaran selesai
              </div>
            @else
            <div class="alert alert-success" role="alert">
              Pembayaran selesai dan nomor resi berhasil dimasukkan!
            </div>
            @endif
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Cards Detail -->

<!-- Forms -->
<div class="container">
  <div class="row">
    <div class="col-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Bukti Transfer</h5>
          @if($buy -> buktitf == "")
            <img src="{{ asset('img/buktitf.png') }}" class="card-img-top buktitf" alt="...">
          @else
            <img id="myImg" src="{{ asset('imgupl/buktitf/'.$buy->buktitf) }}" class="img-fluid" alt="Bukti Transfer">
          @endif
          <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
          </div>
          <form style="margin-top: 10px;" method="post">
            @method('patch')
            @csrf
            <input type="hidden" name="statuspembayaran" value="2">
            <button type="submit" class="btn btn-success btn-block">Terima</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-8">
      @if($buy -> statuspembayaran == 2)
      @if($buy -> resi == null)
      <div class="card">
        <div class="card-body">
          @if (session('status'))
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
          @endif
            <form method="post">
              @method('patch')
              @csrf
              <div class="form-group">
                <label for="formGroupExampleInput">Masukkan No Resi</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="resi">
              </div>
              <button type="submit" class="btn btn-primary">Input</button>
            </form>
        </div>
      </div>
      @endif
      @endif

      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Biodata</h2>
          <form>
            <fieldset disabled>
              <div class="form-group">
                <label for="disabledTextInput">Nama</label>
                <input type="text" id="disabledTextInput" class="form-control" value="{{$buy -> user -> Nama}}">
              </div>

              <div class="form-group">
                <label for="disabledTextInput">Nomor Telepon</label>
                <input type="text" id="disabledTextInput" class="form-control" value="{{$buy -> user -> nomorhp}}">
              </div>

              <div class="form-group">
                <label for="disabledTextInput">Alamat</label>
                <input type="text" id="disabledTextInput" class="form-control" value="{{$buy -> user -> Alamat}}">
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Forms -->
<script src="{{ asset('js/detail.js') }}"></script>
@endsection
