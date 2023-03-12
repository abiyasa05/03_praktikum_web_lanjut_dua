@extends('layouts/master')

@section('title', 'Contact Us')

@section('pages')

@section('page', 'Contact Us')

@section('konten_contact')
    <!-- Main content -->
    <section class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Contact Us Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="nama" name="nama" class="form-control" id="exampleInputnama1" placeholder="Masukkan nama">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan email">
                  </div>
                  <div class="form-group">
                    <label for="inputMessage">Pesan</label>
                    <textarea id="inputMessage" class="form-control" rows="4"></textarea>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection