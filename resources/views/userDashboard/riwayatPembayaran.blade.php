@extends('userDashboard.index')
@section('RiwayatPembayaran')
<div class="row mt-3">
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
                  <td><span class="badge bg-success">Lunas</span></td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><span class="badge bg-success">Lunas</span></td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><span class="badge bg-success">Lunas</span></td>
                </tr>
              </tbody>
            </table>
        </div>
        <button type="button" class="btn btn-danger float-right"><i class="bi bi-file-earmark-pdf-fill"></i> Download PDF</button>
        </div>
      </div>
    </div>
    <!-- Batas -->
  </div><!--End Row-->
@endsection
