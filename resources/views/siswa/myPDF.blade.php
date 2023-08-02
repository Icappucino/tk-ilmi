<!-- Membuat Array -->
@php
    $no = 1;
    $judul_tabel = ['No', 'ID Siswa', 'Nama Siswa', 'Alamat', 'Tempat Lahir', 'Tanggal Lahir', 'Jenis Kelamin', 'Agama'];
@endphp
<!-- Membuat Array -->
<div class="row mt-3">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body text-center">
          <h5 class="card-title" align="center">Data Siswa</h5>
          <div class="table-responsive">
           <table class="table" align="center" border="1" cellpadding="3">
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
                  </tr>
                @endforeach
              </tbody>
            </table>
        </div>
        </div>
      </div>
    </div>
    <!-- Batas -->
  </div><!--End Row-->
