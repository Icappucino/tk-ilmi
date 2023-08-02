@extends('admin.index')
@section('ContentSiswa')
<!-- Membuat Array -->
@php
    $no = 1;
    $judul_tabel = ['No', 'ID Siswa', 'Nama Siswa', 'Alamat', 'Tempat Lahir', 'Tanggal Lahir', 'Jenis Kelamin', 'Agama', 'Keterangan'];
@endphp
<!-- Membuat Array -->
<div class="row mt-3">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body text-center">
          <h5 class="card-title">Data Siswa</h5>
          <button type="button" class="btn btn-danger float-right mb-3 pl-3"><i class="bi bi-trash3-fill"></i> Hapus</button>
          <button type="button" class="btn btn-info float-right mb-3 pr-3"><i class="bi bi-pencil-square"></i> Edit</button>
          <div class="table-responsive">
           <table class="table">
              <thead>
                <tr>
                <!-- Looping Tabel -->
                    @foreach ($judul_tabel as $jdl_tbl )
                        <th scope="col">{{$jdl_tbl}}</th>
                    @endforeach
                </tr>
              </thead>
              <tbody>
                <!-- Looping Tabel -->
                @foreach ($siswaList as $sislist)
                <tr>
                    <th scope="row">{{$no++}}</th>
                    <td>{{$sislist->id_siswa}}</td>
                    <td>{{$sislist->nama_siswa}}</td>
                    <td>{{$sislist->alamat_siswa}}</td>
                    <td>{{$sislist->tempat_lahir}}</td>
                    <td>{{$sislist->tanggal_lahir}}</td>
                    <td>{{$sislist->jenis_kelamin}}</td>
                    <td>{{$sislist->agama}}</td>
                    <td>
                      <!-- Tombol untuk memicu modal -->
                    <a href="{{route('siswa.show',$sislist->id_siswa)}}" class="btn btn-info">
                        <i class="bi bi-person-fill"></i> Lihat Details
                    </a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
        </div>
        <a href="{{url('siswapdf')}}"><button type="button" class="btn btn-danger float-right mt-3"><i class="bi bi-file-earmark-pdf-fill"></i> Download PDF</button></a>
        </div>
      </div>
    </div>
    <!-- Batas -->
  </div><!--End Row-->
@endsection
