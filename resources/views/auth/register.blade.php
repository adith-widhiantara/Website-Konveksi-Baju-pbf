@extends('base.bootstrap')

@section('title', 'Custom Clothing')

@section('bootstrap')
<head>
  <link rel="stylesheet" href="css/register.css">
</head>

<div class="">
  <img style="width: 100%" src="img/bg2.jpg" class="img-fluid" alt="Responsive image">
  <div class="card">
    <div class="card-header daftar">Daftar</div>
  <div class="card-body">
    <div class="row">
      <div class="col-12">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <input type="hidden" name="role" value="user">

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="Email">Email</label>
              <input type="text" class="form-control email-inputmask @error('email') is-invalid @enderror" id="email-mask" placeholder="e.g : mail@example.com" name="email" value="{{ old('email') }}">
              @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>



            <div class="form-group col-md-6">
              <label for="Password">Password</label>
              <input type="password" class="form-control @error('password') is-invalid @enderror" id="Password" placeholder="Password" name="password">
              @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <label for="Nama">Nama Lengkap</label>
            <input type="text" class="form-control @error('Nama') is-invalid @enderror" id="Nama" placeholder="e.g : Aditya S. Widhiantara" name="Nama" value="{{ old('Nama') }}">
            @error('Nama')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="form-group">
            <label for="tanggallahir">Tanggal Lahir</label>
            <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
              <input type="text" class="form-control datetimepicker-input @error('tanggallahir') is-invalid @enderror" data-target="#datetimepicker4" name="tanggallahir" value="{{ old('tanggallahir') }}">
              <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar" aria-hidden="true"></i></div>
              </div>
              @error('tanggallahir')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <label for="nomorhp">Nomor HP</label>
            <input type="text" class="form-control phone-inputmask @error('nomorhp') is-invalid @enderror" id="phone-mask" placeholder="" name="nomorhp" value="{{ old('nomorhp') }}">
            @error('nomorhp')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="form-group">
            <label for="Alamat">Alamat</label>
            <input type="text" class="form-control @error('Alamat') is-invalid @enderror" id="Alamat" placeholder="e.g : Jln. Danau Toba 47A Jember" name="Alamat" value="{{ old('Alamat') }}">
            @error('Alamat')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <a href="{{ url('/') }}" class="btn btn-outline-primary">Kembali</a>
          <button type="submit" class="btn btn-primary">Submit</button>
          <p style="float: right;">Sudah punya akun? Klik <a href="{{ url('/login') }}">disini</a></p>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

@endsection
