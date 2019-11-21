@extends('admin.home')

@section('admin')
<head>
  <link rel="stylesheet" href="{{ url('css/productadmin.css') }}">
</head>

<!-- Form -->
<div class="row">
  <div class="col-6">
    <form action="{{ url('home/warna/upload' )}}" method="post" enctype="multipart/form-data">
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

<!-- Hoverable Table -->
<div class="tabelhover">
  <div class="col-8">
    <div class="card">
      <h5 class="card-header">Data Warna Custom Clothing</h5>
      <div class="card-body">
        <table class="table table-hover">
          <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Warna</th>
                <th scope="col">Gambar</th>
            </tr>
          </thead>
          <tbody>
            @foreach( $color as $col )
            <tr>
              <td>{{ $loop -> iteration}}</td>
              <td>{{ $col -> Warna }}</td>
              <td><img src="{{ url('imgupl/warna/'.$col -> Gambar) }}" alt="" class="img-thumbnail"></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- End Hoverable Table -->

@endsection
