@extends('base.bootstrap')

@section('title', 'Masuk')

@section('bootstrap')
<head>
  <link rel="stylesheet" href="css/register.css">
</head>

<div class="">
  <img style="width: 100%" src="img/bg1.jpg" class="img-fluid" alt="Responsive image">
  <div class="card">
    <div class="card-header daftar">Masuk</div>
  <div class="card-body">
    <div class="row">
      <div class="col-12">
        <form method="POST" action="postlogin">
            @csrf

            <div class="form-group">
              <label for="Email">Email</label>
              <input type="text" class="form-control email-inputmask @error('email') is-invalid @enderror" id="email-mask" placeholder="e.g : mail@example.com" name="email">

              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-group">
              <label for="Password">Password</label>
              <input type="password" class="form-control @error('password') is-invalid @enderror" id="Password" placeholder="Password" name="password">

              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>



  <a href="{{ url('/') }}" class="btn btn-outline-primary">Kembali</a>
  <button type="submit" class="btn btn-primary">Submit</button>
  <p style="float: right;">Belum punya akun? Klik <a href="{{ url('/register') }}">disini</a></p>


        </form>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
