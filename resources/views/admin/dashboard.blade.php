@extends('admin.index')
@section('Dashboard')

<div class="card mt-3">
    <div class="card-content">
        <div class="row row-group m-0">
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">9526 <span class="float-right"><i class="bi bi-person-fill"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:75%"></div>
                    </div>
                  <p class="mb-0 text-white small-font text-center">Jumlah Siswa </p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">8323 <span class="float-right"><i class="fa fa-usd"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:95%"></div>
                    </div>
                  <p class="mb-0 text-white small-font text-center">Keuangan Masuk </p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">6200 <span class="float-right"><i class="bi bi-hourglass-split"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:15%"></div>
                    </div>
                  <p class="mb-0 text-white small-font text-center">Transaksi Tertunda </p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">5630 <span class="float-right"><i class="bi bi-check2-square"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:85%"></div>
                    </div>
                  <p class="mb-0 text-white small-font text-center">Transaksi Berhasil </p>
                </div>
            </div>
        </div>
    </div>
 </div>
<!-- Awal Tabel -->
    <div class="row mt-3">
        <div class="col-lg-12 text-center">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Riwayat Transaksi</h5>
              <div class="table-responsive">
               <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Id Transaksi</th>
                      <th scope="col">Id Siswa</th>
                      <th scope="col">Nama Siswa</th>
                      <th scope="col">Kategori</th>
                      <th scope="col">Nominal</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row"></th>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                  </tbody>
                </table>
            </div>
            <a href="{{url('/Riwayat-Transaksi')}}">
                <button type="button" class="btn btn-danger float-right">Selengkapnya <i class="bi bi-arrow-right-circle-fill"></i></button>
            </a>
            </div>
          </div>
        </div>
        <!-- Batas -->
      </div>
<!--End Row-->
<!-- Awal Tabel -->
<div class="row mt-3">
    <div class="col-lg-12 text-center">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Siswa</h5>
          <div class="table-responsive">
           <table class="table">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Id Siswa</th>
                  <th scope="col">Nama Siswa</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Jenis Kelamin</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"></th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
              </tbody>
            </table>
        </div>
        <a href="{{url('/Data-siswa')}}">
            <button type="button" class="btn btn-danger float-right">Selengkapnya <i class="bi bi-arrow-right-circle-fill"></i></button>
        </a>
        </div>
      </div>
    </div>
    <!-- Batas -->
  </div><!--End Row-->

@endsection
