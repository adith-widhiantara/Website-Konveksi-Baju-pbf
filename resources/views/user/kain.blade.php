@extends('base.bootstrap')

@section('title', 'Custom Clothing')

@section('bootstrap')
<head>
  <link rel="stylesheet" href="{{ asset('css/product.css') }}">
</head>

<div class="">
  <img style="width: 100%" src="{{ asset('img/bg2.jpg') }}" class="img-fluid" alt="Responsive image">
  <div class="card form1">
    <div class="card-header daftar">Daftar</div>
  <div class="card-body">

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="row">

              <div class="col-md-4 col-lg-4 col-sm-4">

                <label>
                  <input type="radio" name="product" class="card-input-element" />

                  <div class="card panel panel-default card-input">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>

                </label>

              </div>
              <div class="col-md-4 col-lg-4 col-sm-4">

                <label>
                  <input type="radio" name="product" class="card-input-element" />

                  <div class="card panel panel-default card-input">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
                </label>

              </div>
              <div class="col-md-4 col-lg-4 col-sm-4">

                <label>
                  <input type="radio" name="product" class="card-input-element" />

                  <div class="card panel panel-default card-input">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
                </label>

              </div>

              <div class="col-md-4 col-lg-4 col-sm-4">

                <label>
                  <input type="radio" name="product" class="card-input-element" />

                  <div class="card panel panel-default card-input">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
