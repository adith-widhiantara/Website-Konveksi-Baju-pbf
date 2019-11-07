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

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="formGroupExampleInput">Keterangan Kain</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="keterangan">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="exampleFormControlFile1">Upload Gambar Kain</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
      </div>

      <button type="submit" class="btn btn-primary oke">Submit</button>

    </form>
  </div>
</div>

<!-- Hoverable Table -->
<div class="tabelhover">
  <div class="col-8">
    <div class="card">
      <h5 class="card-header">Data Kain Custom Clothing</h5>
      <div class="card-body">
        <table class="table table-hover">
          <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Jenis Kain</th>
                <th scope="col">Stock</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Gambar</th>
            </tr>
          </thead>
          <tbody>
            @foreach( $product as $pro )
            <tr>
              <td>{{ $loop -> iteration}}</td>
              <td>{{ $pro -> jeniskain }}</td>
              <td>{{ $pro -> stock     }}</td>
              <td>{{ $pro -> keterangan     }}</td>
              <td><img src="{{ url('imgupl/kain/'.$pro -> file) }}" alt="..." class="img-thumbnail"></td>
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
