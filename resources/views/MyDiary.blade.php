@extends('layouts/master')

@section('title', 'My Diary')

@section('pages')

@section('page', 'My Diary')

@section('konten_diary')
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <!-- Default box -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">{{ $exp }}</h3>
  
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  Saya mulai masuk kuliah pada tahun 2021. Saya kuliah di Politeknik Negeri Malang.
                  Dan saya memilih jurusan Teknologi Informasi , prodi D4 Teknik Informatika.
                  Saya memilih jurusan ini karena ingin meneruskan kompetensi saya yang sebelumnya
                  berada di SMK yaitu jurusan Rekayasa Perangkat Lunak. Walaupun sebenarnya saya ingin
                  bekerja setelah lulus dari SMK. Karena orang tua menginginkan saya untuk kuliah maka
                  saya harus melakukannya, saya yakin walaupun itu bukan kemauan saya tapi itu merupakan
                  salah satu jalan saya untuk menuju kesuksesan. Tentunya dengan adanya dukungan penuh dari keluarga
                  saya, usaha, dan doa. Semoga ini merupakan jalan terbaik untuk saya. Dan suatu saat nanti saya ingin
                  membahagiakan orang tua saya, karena tanpa mereka saya bukanlah apa-apa.
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
@endsection