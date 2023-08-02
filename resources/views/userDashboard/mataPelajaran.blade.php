@extends('userDashboard.index')
@section('MataPelajaran')
<div class="col-md-12">
    <div class="white_shd full margin_bottom_30">
       <div class="full graph_head">
          <div class="heading1 margin_0">
             <h2 class="text-center">PROGRAM SEMESTER
                TK ILMI BUDI LUHUR TAHUN AJARAN 2022/2023</h2>
            <h3 class="mapel-sub-head">Semester 1</h3>
          </div>
       </div>
       <div class="table_section padding_infor_info">
          <div class="table-responsive-sm">
             <table class="table table-bordered">
                <thead>
                   <tr class="tab-head-mapel text-center">
                      <th>Bulan</th>
                      <th>Topik</th>
                      <th>Minggu-1</th>
                      <th>Minggu-2</th>
                      <th>Minggu-3</th>
                      <th>Minggu-4</th>
                   </tr>
                </thead>
                <tbody>
                   <tr class="tab-mapel text-center">
                      <td>Juli 2022</td>
                      <td>Pengenalan Sekolah</td>
                      <td>X</td>
                      <td>Pengenalan Guru, Teman</td>
                      <td>Pengenalan Lingkungan Sekolah</td>
                      <td>Pengenalan Tata Tertib Sekolah</td>
                   </tr>
                   <tr class="tab-mapel text-center">
                      <td>Agustus 2022</td>
                      <td>Indonesiaku</td>
                      <td>Negaraku</td>
                      <td>Kebinekaan</td>
                      <td>Kemerdekaan
                        Indonesia</td>
                      <td>Pahlawan</td>
                   </tr>
                   <tr class="tab-mapel text-center">
                    <td>September 2022</td>
                    <td>Mitigasi
                        Bencana</td>
                    <td>Saat Kebakaran</td>
                    <td>Saat Banjir</td>
                    <td>Saat Gempa Bumi </td>
                    <td>Saat Tsunami</td>
                 </tr>
                 <tr class="tab-mapel text-center">
                    <td>Oktober 2022</td>
                    <td>Alam
                        Semesta</td>
                    <td>Ruang Angkasa</td>
                    <td>Bulan</td>
                    <td>Bintang</td>
                    <td>Matahari</td>
                 </tr>
                 <tr class="tab-mapel text-center">
                    <td>November 2022</td>
                    <td>Apa Saja di
                        Sekitarku</td>
                    <td>Sekolahku</td>
                    <td>Keluargaku</td>
                    <td>Guruku</td>
                    <td>Perpustakaan</td>
                 </tr>
                 <tr class="tab-mapel text-center">
                    <td>Desember 2022</td>
                    <td>Alat
                        Komunikasi</td>
                    <td>Jenis Alat
                        Komunikasi</td>
                    <td>X</td>
                    <td>X</td>
                    <td>X</td>
                 </tr>
                </tbody>
             </table>
          </div>
        <a href="{{url('program-sem-1')}}"><button type="button" class="btn btn-danger float-right"><i class="bi bi-file-earmark-pdf-fill"></i> Download PDF</button></a>
       </div>
    </div>
 </div>
 <!-- Batas Semester 2 -->
 <div class="col-md-12">
    <div class="white_shd full margin_bottom_30">
       <div class="full graph_head">
          <div class="heading1 margin_0">
            <h3 class="mapel-sub-head">Semester 2</h3>
          </div>
       </div>
       <div class="table_section padding_infor_info">
          <div class="table-responsive-sm">
             <table class="table table-bordered">
                <thead>
                   <tr class="tab-head-mapel text-center">
                      <th class="f-bold">Bulan</th>
                      <th class="f-bold">Topik</th>
                      <th class="f-bold">Minggu-1</th>
                      <th class="f-bold">Minggu-2</th>
                      <th class="f-bold">Minggu-3</th>
                      <th class="f-bold">Minggu-4</th>
                   </tr>
                </thead>
                <tbody>
                   <tr class="tab-mapel text-center">
                      <td>Januari 2023</td>
                      <td>Cuaca</td>
                      <td>Awan</td>
                      <td>Hujan</td>
                      <td>Indahnya Pelangi</td>
                      <td>Angin</td>
                   </tr>
                   <tr class="tab-mapel text-center">
                      <td>Februari 2023</td>
                      <td>Kebun
                        Sekolahku</td>
                      <td>Ayo Berkebun</td>
                      <td>Jenis Buah</td>
                      <td>Jenis Sayur</td>
                      <td>Ayo Berkreasi
                        dari Plastik Bekas</td>
                   </tr>
                   <tr class="tab-mapel text-center">
                    <td>Maret 2023</td>
                    <td>Alat
                        Transportasi</td>
                    <td>Transportasi
                        Laut</td>
                    <td>Transportasi
                        Udara</td>
                    <td>Transportasi
                        Darat</td>
                    <td>Ayo Berkreasi
                        Membuat
                        kerajinan tangan</td>
                 </tr>
                 <tr class="tab-mapel text-center">
                    <td>April 2023</td>
                    <td>Amaliah
                        Ramadhan</td>
                    <td>Ramadhan di
                        Sekolah</td>
                    <td>Hari Besar
                        Islam</td>
                    <td>Idul Fitri </td>
                    <td>X</td>
                 </tr>
                 <tr class="tab-mapel text-center">
                    <td>Mei 2023</td>
                    <td>Tempat
                        Rekreasi</td>
                    <td>Kebun
                        Binatang</td>
                    <td>Berkemah</td>
                    <td>Taman
                        Nasional</td>
                    <td>Cagar Alam</td>
                 </tr>
                 <tr class="tab-mapel text-center">
                    <td>Juni 2023</td>
                    <td>Menggapai
                        Cita</td>
                    <td>Menggapai Cita “Profesi”</td>
                    <td>X</td>
                    <td>X</td>
                    <td>X</td>
                 </tr>
                </tbody>
             </table>
          </div>
          <a href="{{url('program-sem-2')}}"><button type="button" class="btn btn-danger float-right"><i class="bi bi-file-earmark-pdf-fill"></i> Download PDF</button></a>
       </div>
    </div>
 </div>
@endsection
