@extends('admin.index')
@section('ContentTransaksi')
<!-- Membuat Array -->
@php
    $no = 1;
    $judul_tabel = ['ID Transaksi', 'ID Siswa', 'Nama Siswa', 'Kategori', 'Nominal', 'Tanggal Transaksi', 'Waktu', 'Status'];
@endphp
<div class="row mt-3">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Riwayat Transaksi</h5>
          <div class="table-responsive">
           <table class="table">
              <thead>
                <tr>
                    <!-- Looping Tabel -->
                    @foreach ($judul_tabel as $jt)
                    <th scope="col">{{$jt}}</th>
                    @endforeach
                </tr>
              </thead>
              <tbody>
                <!-- Looping Data -->
                @foreach ($transaksiList as $tl)
                <tr>
                    <th scope="row">{{$no++}}</th>
                    <td>{{$tl->$id}}</td>
                    <td>{{$tl->siswa_id}}</td>
                    <td>{{$tl->sw}}</td>
                    <td>{{$tl->jt}}</td>
                    <td>{{$tl->nominal}}</td>
                    <td>{{$tl->tanggal_transaksi}}</td>
                    <td>{{$tl->waktu_transaksi}}</td>
                    <td><span class="badge bg-success">{{$tl->status}}</span></td>
                  </tr>
                @endforeach
              </tbody>
            </table>
        </div>
        <button type="button" class="btn btn-danger float-right mt-3"><i class="bi bi-file-earmark-pdf-fill"></i> Download PDF</button>
        </div>
      </div>
    </div>
    <!-- Batas -->
  </div><!--End Row-->
@endsection
