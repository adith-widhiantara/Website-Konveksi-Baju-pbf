@extends('base.bootstrap')

@section('title', 'Custom Clothing')

@section('bootstrap')
<head>
  <link rel="stylesheet" href="{{ asset('css/product.css') }}">
</head>

<div class="">
  <img style="width: 100%; height: auto;" src="{{ asset('img/listkain/backgroundkain.jpg') }}" class="img-fluid" alt="Responsive image">
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
