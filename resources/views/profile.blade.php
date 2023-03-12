@extends('layouts/master')

@section('title', 'Profile')

@section('pages')

@section('page', 'Profile')

@section('konten_profile')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                     src="../../dist/img/1.png"
                     alt="User profile picture">
              </div>

              <h3 class="profile-username text-center">{{ $profile['nama'] }}</h3>

              <p class="text-muted text-center">{{ $profile['status'] }}</p>

              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Followers</b> <a class="float-right">146</a>
                </li>
                <li class="list-group-item">
                  <b>Following</b> <a class="float-right">304</a>
                </li>
                <li class="list-group-item">
                  <b>Friends</b> <a class="float-right">13,485</a>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- About Me Box -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">{{ $tentang_saya }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <strong><i class="fas fa-book mr-1"></i> Kampus</strong>

              <p class="text-muted">
                {{ $profile['kampus'] }}
              </p>

              <hr>

              <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>

              <p class="text-muted">{{ $profile['alamat'] }}</p>

              <hr>

              <strong><i class="fas fa-pencil-alt mr-1"></i> Skill</strong>

              <p class="text-muted">
                <span class="tag tag-danger">{{ $profile['skill1'] }},</span>
                <span class="tag tag-success">{{ $profile['skill2'] }}</span>
              </p>

              <hr>

              <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

              <p class="text-muted">Tugas itu dikerjakan jangan dipikir</p>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection
