@extends('admin.home')

@section('admin')
<head>
  <link rel="stylesheet" href="{{ url('css/productadmin.css') }}">
</head>

<div class="row">
  <div class="col-6">
    <form action="{{ url('home/desain/upload' )}}" method="post" enctype="multipart/form-data">
      @csrf

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="formGroupExampleInput">Nama Desain</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="nama">
          </div>
        </div>

        <div class="col">
          <div class="form-group">
            <label for="formGroupExampleInput2">Arti Desain</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="" name="arti">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="exampleFormControlFile1">Upload Desain</label>
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
                <th scope="col">Nama</th>
                <th scope="col">Arti</th>
                <th scope="col">Gambar</th>
            </tr>
          </thead>
          <tbody>
            @foreach( $desain as $des )
            <tr>
              <td>{{ $loop -> iteration}}</td>
              <td>{{ $des -> nama }}</td>
              <td>{{ $des -> arti }}</td>
              <td><img src="{{ url('imgupl/desain/'.$des -> file) }}" alt="" class="img-thumbnail"></td>
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
