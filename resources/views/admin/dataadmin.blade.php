@extends('admin.home')
<!-- {{ asset('') }} -->

@section('admin')
<head>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/assets/vendor/datatables/css/dataTables.bootstrap4.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/assets/vendor/datatables/css/buttons.bootstrap4.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/assets/vendor/datatables/css/select.bootstrap4.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/assets/vendor/datatables/css/fixedHeader.bootstrap4.css') }}">
</head>

<div class="dashboard-wrapper">
  <div class="dashboard-finance">
    <div class="container-fluid dashboard-content">
      <div class="row">
                    <!-- ============================================================== -->
                    <!-- data table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Data Admin Custom Clothing</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                        <thead>
                                          <tr>
                                            <th>No</th>
                                            <th>Email</th>
                                            <th>Nama</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Nomor HP</th>
                                            <th>Alamat</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          @foreach( $dataadmin as $admin)
                                          <tr>
                                            <td>{{ $loop -> iteration     }}</td>
                                            <td>{{ $admin -> email        }}</td>
                                            <td>{{ $admin -> Nama         }}</td>
                                            <td>{{ $admin -> tanggallahir }}</td>
                                            <td>{{ $admin -> nomorhp      }}</td>
                                            <td>{{ $admin -> Alamat       }}</td>
                                          </tr>
                                          @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Email</th>
                                                <th>Nama</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Nomor HP</th>
                                                <th>Alamat</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end data table  -->
                    <!-- ============================================================== -->
                </div>
    </div>
  </div>
</div>
@endsection
