@extends('admin.app') 
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Validation</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Validation</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="{{ url('/admin/update-data/'. $example -> id) }}"
              method="get">
                @csrf
               
                <div class="card-body">
                  {{-- <div class="form-group">
                    <input type="hidden" name="id" class="form-control" id="id" value="{{ $example -> id }}" placeholder="{{ $example -> id }}" required>
                  </div> --}}
                  <div class="form-group">
                    <label for="email">NAMA</label>
                    <input type="text" name="email" class="form-control" id="email" value="{{ $example -> email }}" placeholder="{{ $example -> email }}" required>
                  </div>
                  <div class="form-group">
                    <label for="nama">NAMA</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="{{ $example -> nama }}" placeholder="{{ $example -> nama }}" required>
                  </div>
                  <div class="form-group">
                    <label for="namabelakang">NAMA BELAKANG</label>
                    <input type="text" name="namabelakang" class="form-control" id="namabelakang" value="{{ $example -> namabelakang }}" placeholder="{{ $example -> namabelakang }}" required>
                  </div>
                  <div class="form-group">
                    <label for="alamat">ALAMAT</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" value="{{ $example -> alamat }}" placeholder="{{ $example -> alamat }}"  required>
                  </div>
                  <div class="form-group">
                    <label for="lamakerja">LAMA KERJA</label>
                    <input type="text" name="lamakerja" class="form-control" id="lamakerja" value="{{ $example -> lamakerja }}" placeholder="{{ $example -> lamakerja }}"  required>
                  </div>
                  <div class="form-group">
                    <label for="telepon">NOMOR TELEPON</label>
                    <input type="text" name="telepon" class="form-control" id="telepon" value="{{ $example -> telepon }}" placeholder="{{ $example -> telepon }}"  required>
                  </div>
                  <div class="form-group">
                    <label for="avatar">avatar</label>
                    <img class="img-thumbnail" src="{{ url('/avatar/'.$example->avatar) }}" > <br>
                    <input type="file" name="avatar" class="form-control" id="avatar"   required>
                  </div>
                  
                </div>
 

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection