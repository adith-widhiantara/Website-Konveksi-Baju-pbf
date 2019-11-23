@extends('admin.home')

@section('title', 'Transaksi Gagal | Custom Clothing')

@section('admin')
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
  <div class="card">
    <div class="card-header">
      <h1 class="mb-0">Data Transaksi Gagal</h1>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered second" style="width:100%">
          <thead>
            <tr>
                <th>No</th>
                <th>Nama Pelanggan</th>
                <th>Jenis Kain</th>
                <th>Desain</th>
                <th>Warna</th>
                <th>Jumlah</th>
                <th>Ukuran</th>
                <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach( $buy as $b )
              <tr>
                  <td>{{ $loop -> iteration     }}</td>
                  <td>{{ $b -> user -> Nama }}</td>
                  <td>{{ $b -> product -> jeniskain }}</td>
                  <td>{{ $b -> desain -> nama }}</td>
                  <td>{{ $b -> color -> Warna }}</td>
                  <td>{{ $b -> jumlah }}</td>
                  <td>{{ $b -> ukuran }}</td>
                  <td><a class="btn btn-primary" href="{{ url('home/transaksi/'.$b -> id) }}" role="button">Detail</a></td>
              </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
                <th>No</th>
                <th>Nama Pelanggan</th>
                <th>Jenis Kain</th>
                <th>Desain</th>
                <th>Warna</th>
                <th>Jumlah</th>
                <th>Ukuran</th>
                <th>Aksi</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
