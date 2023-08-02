@extends('admin.index')
@section('DataPengajar')
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
                  <th scope="col">Id Guru</th>
                  <th scope="col">Nama Guru</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Jenis Kelamin</th>
                  <th scope="col">Nomor Telp</th>
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
        <button type="button" class="btn btn-danger float-right mt-3"><i class="bi bi-file-earmark-pdf-fill"></i> Download PDF</button>
        </div>
      </div>
    </div>
    <!-- Batas -->
  </div><!--End Row-->
@endsection
