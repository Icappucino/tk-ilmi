@extends('userDashboard.index')
@section('Dashboard')
<div class="midde_cont">
    <div class="container-fluid">
       <div class="row column_title">
          <div class="col-md-12">
             <div class="page_title">
                <h2>Dashboard User</h2>
             </div>
          </div>
       </div>
       <div class="row column1">
          <div class="col-md-6 col-lg-3">
             <div class="full counter_section margin_bottom_30">
                <div class="counter_no">
                   <div>
                      <p class="total_no">Tagihan Pendaftaran</p>
                      <p class="head_couter"><span class="badge bg-success">Lunas</span></p>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-md-6 col-lg-3">
             <div class="full counter_section margin_bottom_30">
                <div class="counter_no">
                   <div>
                      <p class="total_no">Tagihan SPP</p>
                      <p class="total_no_1 text-center f-bold">Bulan Juli</p>
                      <p class="head_couter"><span class="badge bg-danger">Belum</span></p>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-md-6 col-lg-3">
             <div class="full counter_section margin_bottom_30">
                <div class="counter_no">
                   <div>
                      <p class="total_no">Tagihan Uang Kegiatan</p>
                      <p class="head_couter"><span class="badge bg-success">Lunas</span></p>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-md-6 col-lg-3">
             <div class="full counter_section margin_bottom_30">
                <div class="counter_no">
                   <div>
                      <p class="total_no">Biaya Seragam dan Buku</p>
                      <p class="head_couter"><span class="badge bg-success">Lunas</span></p>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Riwayat Pembayaran</h5>
            <div class="table-responsive">
             <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Id Transaksi</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Nominal</th>
                    <th scope="col">Tanggal Transaksi</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Status</th>
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
                    <td><span class="badge bg-warning">proses</span></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><span class="badge bg-danger">Gagal</span></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><span class="badge bg-success">Berhasil</span></td>
                  </tr>
                </tbody>
              </table>
          </div>
          <button type="button" class="btn btn-danger float-right"><i class="bi bi-file-earmark-pdf-fill"></i> Download PDF</button>
          </div>
        </div>
      </div>
       <!-- graph -->
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
           </div>
        </div>
     </div>
       <!-- end graph -->
    </div>
    <!-- footer -->
 </div>

@endsection
