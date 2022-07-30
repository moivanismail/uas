@extends('admin.app') 
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>PT. LEASING MENGANGKASA</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DATA KARYAWAN</li>
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
                <h3 class="card-title">Silahkan Menginput Data Nasabah</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="{{ url('/admin/data/insert-data') }}"
              method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="email">EMAIL</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Masukan email" required>
                  </div>
                  <div class="form-group">
                    <label for="password">PASSWORD</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Masukan password" required>
                  </div>
                  <div class="form-group">
                    <label for="nama">NAMA</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan nama" required>
                  </div>
                  <div class="form-group">
                    <label for="namabelakang">NAMA BELAKANG</label>
                    <input type="text" name="namabelakang" class="form-control" id="namabelakang" placeholder="Masukan Nama Belakang" accept="image/*" Belakang" required>
                  </div>
                  <div class="form-group">
                    <label for="alamat">ALAMAT</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukan alamat" required>
                  </div>
                  <div class="form-group">
                    <label for="telepon">NOMOR TELEPON</label>
                    <input type="text" name="telepon" class="form-control" id="telepon" placeholder="Masukan Nomor Telepon" required>
                  </div>
                  <div class="form-group">
                    <label for="avatar"> AVATAR</label>
                    <input type="file" name="avatar" class="form-control" id="avatar" placeholder="Masukan Nomor avatar" accept="image/*" required>
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