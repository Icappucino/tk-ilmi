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
                <div class="couter_icon">
                   <div>
                    <i class="bi bi-mortarboard"></i>
                   </div>
                </div>
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
                <div class="couter_icon">
                   <div>
                    <i class="bi bi-book-fill"></i>
                   </div>
                </div>
                <div class="counter_no">
                   <div>
                      <p class="total_no">Tagihan SPP</p>
                      <p class="head_couter"><span class="badge bg-danger">Belum</span></p>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-md-6 col-lg-3">
             <div class="full counter_section margin_bottom_30">
                <div class="couter_icon">
                   <div>
                    <i class="bi bi-activity"></i>
                   </div>
                </div>
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
                <div class="couter_icon">
                   <div>
                    <i class="bi bi-cash"></i>
                   </div>
                </div>
                <div class="counter_no">
                   <div>
                      <p class="total_no">Biaya Seragam dan Buku</p>
                      <p class="head_couter"><span class="badge bg-success">Lunas</span></p>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="col-md-12">
        <div class="white_shd full margin_bottom_30">
           <div class="full graph_head">
              <div class="heading1 margin_0">
                 <h2>Riwayat Transaksi</h2>
              </div>
           </div>
           <div class="table_section padding_infor_info">
              <div class="table-responsive-sm">
                 <table class="table">
                    <thead>
                       <tr>
                          <th>Tanggal</th>
                          <th>Nominal</th>
                          <th>Jenis Transaksi</th>
                          <th>Status</th>
                       </tr>
                    </thead>
                    <tbody>
                       <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                       </tr>
                       <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td><span class="badge bg-warning">Proses</span></td>
                       </tr>
                       <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td><span class="badge bg-danger">Gagal</span></td>
                       </tr>
                       <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td><span class="badge bg-success">Success</span></td>
                       </tr>
                    </tbody>
                 </table>
              </div>
           </div>
        </div>
     </div>
       <!-- graph -->
       <div class="col-md-12">
        <div class="white_shd full margin_bottom_30">
           <div class="full graph_head">
              <div class="heading1 margin_0">
                 <h2>Mata Pelajaran</h2>
              </div>
           </div>
           <div class="table_section padding_infor_info">
              <div class="table-responsive-sm">
                 <table class="table table-bordered">
                    <thead>
                       <tr>
                          <th>Waktu</th>
                          <th>Senin</th>
                          <th>Selasa</th>
                          <th>Rabu</th>
                          <th>Kamis</th>
                          <th>Jumat</th>
                       </tr>
                    </thead>
                    <tbody>
                       <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                       </tr>
                       <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                       </tr>
                       <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
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
