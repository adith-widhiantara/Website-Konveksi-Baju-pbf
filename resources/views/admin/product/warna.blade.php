@extends('admin.home')

@section('admin')
<head>
  <link rel="stylesheet" href="{{ url('css/productadmin.css') }}">
</head>

<!-- Form -->
<div class="row">
  <div class="col-6">
    <form action="{{ url('home/desain/upload' )}}" method="post" enctype="multipart/form-data">
      @csrf

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="formGroupExampleInput">Warna</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="Warna">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="exampleFormControlFile1">Upload Warna</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="Gambar">
      </div>

      <button type="submit" class="btn btn-primary oke">Submit</button>

    </form>
  </div>
</div>
<!-- End Form -->

@endsection
