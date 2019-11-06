@extends('admin.subadmin.home')
<!-- {{ asset('') }} -->

@section('admin')
<head>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/assets/vendor/datatables/css/dataTables.bootstrap4.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/assets/vendor/datatables/css/buttons.bootstrap4.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/assets/vendor/datatables/css/select.bootstrap4.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/assets/vendor/datatables/css/fixedHeader.bootstrap4.css') }}">
</head>


      <div class="row">
                    <!-- ============================================================== -->
                    <!-- data table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Data Customer Custom Clothing</h5>
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
                                          @foreach( $datacust as $cust)
                                          <tr>
                                            <td>{{ $loop -> iteration     }}</td>
                                            <td>{{ $cust -> email        }}</td>
                                            <td>{{ $cust -> Nama         }}</td>
                                            <td>{{ $cust -> tanggallahir }}</td>
                                            <td>{{ $cust -> nomorhp      }}</td>
                                            <td>{{ $cust -> Alamat       }}</td>
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





@endsection
