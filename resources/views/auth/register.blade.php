@extends('base.bootstrap')

@section('title', 'Daftar')

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
              <input type="text" class="form-control email-inputmask" id="email-mask" placeholder="e.g : mail@example.com" name="email">
            </div>
            <div class="form-group col-md-6">
              <label for="Password">Password</label>
              <input type="password" class="form-control" id="Password" placeholder="Password" name="password">
            </div>
          </div>

          <div class="form-group">
            <label for="Nama">Nama Lengkap</label>
            <input type="text" class="form-control" id="Nama" placeholder="e.g : Aditya S. Widhiantara" name="Nama">
          </div>

          <div class="form-group">
            <label for="tanggallahir">Tanggal Lahir</label>
            <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
              <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4" name="tanggallahir">
              <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar" aria-hidden="true"></i></div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="nomorhp">Nomor HP</label>
            <input type="text" class="form-control phone-inputmask" id="phone-mask" placeholder="" name="nomorhp">
          </div>

          <div class="form-group">
            <label for="Alamat">Alamat</label>
            <input type="text" class="form-control" id="Alamat" placeholder="e.g : Aditya S. Widhiantara" name="Alamat">
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

@endsection
