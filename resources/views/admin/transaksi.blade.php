@extends('admin.index')
@section('Transaksi')
<div class="row mt-3">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Transaksi User</h5>
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
                  <th scope="col">Bukti Pembayaran</th>
                  <th scope="col">Aksi</th>
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
                  <td></td>
                  <td>
                    <button class="btn btn-success" type="submit"><i class="bi bi-check-lg"></i></button>
                    <button class="btn btn-danger" type="submit"><i class="bi bi-x-lg"></i></button>
                </td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                    <button class="btn btn-success" type="submit"><i class="bi bi-check-lg"></i></button>
                    <button class="btn btn-danger" type="submit"><i class="bi bi-x-lg"></i></button>
                  </td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                    <button class="btn btn-success" type="submit"><i class="bi bi-check-lg"></i></button>
                    <button class="btn btn-danger" type="submit"><i class="bi bi-x-lg"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
        </div>
        </div>
      </div>
    </div>
    <!-- Batas -->
  </div><!--End Row-->
@endsection
