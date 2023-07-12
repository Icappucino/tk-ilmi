@extends('userDashboard.index')
@section('Profile')
<section style="background-color: #eee;">
    <div class="container py-5">
      <div class="row">
      </div>

      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="{{asset('img/ic-prof.png')}}" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-3">Icappucino</h5>
              <p class="text-muted mb-1">Full Stack Developer</p>
              <p class="text-muted mb-4">Berlin, Germany</p>
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
                  <p class="mb-0">Vika</p>
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
                  <p class="text-muted mb-0">Icappucino </p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Alamat Siswa</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">Btp D24 no 2</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Tempat lahir</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">Bekasi</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Tanggal Lahir</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">23 Agustus 2001</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Jenis Kelamin</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">Laki - Laki</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Agama</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">Islam</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Nama Orang tua</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">Yuliana</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Nomor Telepon Orang Tua</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">089512625724</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Alamat Orang Tua</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">BTP D24 no 2</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
