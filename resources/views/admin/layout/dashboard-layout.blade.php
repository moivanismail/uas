@extends('admin.app') 
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              @if(\Session::has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {!! \Session::get('success') !!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>NAMA</th>
                    <th>NAMA BELAKANG</th>
                    <th>EMAIL</th>
                    <th>ALAMAT</th>
                    <th>TELEPON</th>
                    <th>AVATAR</th>
                  </tr>
                  </thead>
                  <tbody>
                  {{ $no = 1 }}
                  @foreach($example as $exp)
                  <tr>
                    <td>{{  $no }}</td>
                    <td>{{  $exp->nama }}</td>
                    <td>{{ $exp->namabelakang }} </td>
                    <td>{{ $exp->email }} </td>
                    <td>{{ $exp->alamat }} </td>
                    <td>{{ $exp->telepon }} </td>
                    <td><img class="img-thumbnail" src="{{ url('/avatar/'.$exp->avatar) }}" > </td>
                    <td> 
                    <a href= "{{ url('/admin/edit-data/' . $exp->id)}}" button class="btn btn-primary" onclick="return confirm('Apakah anda akan mengubah ???')">Ubah</a>
                    <a href= "{{ url('admin/delete-data/' .$exp->id) }}" button  class="btn btn-danger" onclick="return confirm('Apakah anda akan memghapus ???')">Hapus</a>
                    </td>

                  </tr>
                  {{ $no++ }}
                  @endforeach
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection