@extends('userDashboard.index')
@section('Profile')
<section style="background-color: #eee;">
    <div class="container py-5">
        @if(isset($siswa))
      <div class="row">
        <div class="col-lg-4">
          <div class="card mt-5">
            <div class="card-body text-center">
                <a href="{{route('siswa.create')}}" class="btn btn-info">
                    <i class="bi bi-person-fill"></i> isi data siswa
                </a>
              @php
                if(!empty($siswa->foto_siswa)){
                @endphp
                    <img src="{{asset('img')}}/{{$siswa->foto_siswa}}" width="150px">
                @php
                }else {
                @endphp
                    <img src="{{asset('img')}}/nophoto.jpeg" width="150px">
                @php
                }
              @endphp
              <h5 class="my-3">{{$siswa->nama_siswa}}</h5>
            </div>
          </div>
          <div class="card mb-4 mb-lg-0">
            <div class="card-body p-0">
              <ul class="list-group list-group-flush rounded-3">
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <p class="mb-0">Kelas</p>
                  <p class="mb-0">A</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <p class="mb-0">Status Siswa</p>
                  <p class="mb-0"><span class="badge bg-success">Aktif</span></p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <p class="mb-0">Nama Wali Kelas</p>
                  <p class="mb-0">Yani Sulistiani, S.Pd</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <p class="mb-0">Status Kelengkapan Berkas</p>
                  <p class="mb-0"><span class="badge bg-success">Lengkap</span></p>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Nama Lengkap Siswa</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$siswa->nama_siswa}} </p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Alamat Siswa</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$siswa->alamat_siswa}}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Tempat lahir</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$siswa->tempat_lahir}}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Tanggal Lahir</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$siswa->tanggal_lahir}}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Jenis Kelamin</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$siswa->jenis_kelamin}}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Agama</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$siswa->agama}}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Nama Orang tua</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$siswa->nama_orang_tua}}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Nomor Telepon Orang Tua</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$siswa->no_telp_orang_tua}}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Alamat Orang Tua</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$siswa->alamat_orang_tua}}</p>
                </div>
              </div>
              <!-- -->
            </div>
          </div>
        </div>
      </div>
      @endif
    </div>
  </section>
@endsection
