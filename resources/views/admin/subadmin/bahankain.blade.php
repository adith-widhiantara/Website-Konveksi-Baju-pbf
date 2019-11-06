@extends('admin.subadmin.home')

@section('admin')
<head>
  <link rel="stylesheet" href="{{ url('css/productadmin.css') }}">
</head>

<div class="row">
  <div class="col-6">
    <form action="{{ url('home/bahankain/upload' )}}" method="post" enctype="multipart/form-data">
      @csrf

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="formGroupExampleInput">Jenis Kain</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="jeniskain">
          </div>
        </div>

        <div class="col">
          <div class="form-group">
            <label for="formGroupExampleInput2">Stock</label>
            <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="" name="stock">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="exampleFormControlFile1">Upload Gambar Kain</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar">
      </div>

      <button type="submit" class="btn btn-primary oke">Submit</button>

    </form>
  </div>
</div>
@endsection
