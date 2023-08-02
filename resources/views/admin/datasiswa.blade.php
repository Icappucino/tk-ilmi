@extends('admin.index')
@section('DataSiswa')
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
                  <th scope="col">No</th>
                  <th scope="col">Id Siswa</th>
                  <th scope="col">Nama Siswa</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Tempat Lahir</th>
                  <th scope="col">Tanggal Lahir</th>
                  <th scope="col">Jenis Kelamin</th>
                  <th scope="col">Keterangan</th>
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
                    <!-- Tombol untuk memicu modal -->
                    <button type="button" class="btn btn-primary" onclick="openModal()"><i class="bi bi-person-fill"></i> Lihat Details</button>
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
                    <!-- Tombol untuk memicu modal -->
                    <button type="button" class="btn btn-primary" onclick="openModal()"><i class="bi bi-person-fill"></i> Lihat Details</button>
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
                    <!-- Tombol untuk memicu modal -->
                    <button type="button" class="btn btn-primary" onclick="openModal()"><i class="bi bi-person-fill"></i> Lihat Details</button>
                  </td>
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

    <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Details Data Siswa</h1>
        </div>
        <div class="modal-body">
          <!-- Batas -->
          <div class="col-lg-12">
            <div class="card mb-4">
              <div class="card-body custom-bg">
                <div class="row custom-bg">
                  <div class="col-sm-3">
                    <p class="mb-0">Nama Lengkap</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="mb-0"></p>
                  </div>
                </div>
                <hr class="batas">
                <div class="row custom-bg">
                  <div class="col-sm-3">
                    <p class="mb-0">Alamat</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="mb-0"></p>
                  </div>
                </div>
                <hr class="batas">
                <div class="row custom-bg">
                  <div class="col-sm-3">
                    <p class="mb-0">Tempat Lahir</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="mb-0"></p>
                  </div>
                </div>
                <hr class="batas">
                <div class="row custom-bg">
                    <div class="col-sm-3">
                      <p class="mb-0">Tanggal Lahir</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="mb-0"></p>
                    </div>
                </div>
                <hr class="batas">
                <div class="row custom-bg">
                  <div class="col-sm-3">
                    <p class="mb-0">Jenis Kelamin</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="mb-0"></p>
                  </div>
                </div>
                <hr class="batas">
                <div class="row custom-bg">
                  <div class="col-sm-3">
                    <p class="mb-0">Agama</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="mb-0"></p>
                  </div>
                </div>
                <hr class="batas">
                <div class="row custom-bg">
                    <div class="col-sm-3">
                      <p class="mb-0">Foto Siswa</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="mb-0"></p>
                    </div>
                  </div>
                  <hr class="batas">
                  <div class="row custom-bg">
                    <div class="col-sm-3">
                      <p class="mb-0">Foto Akte</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="mb-0"></p>
                    </div>
                  </div>
                  <hr class="batas">
                  <div class="row custom-bg">
                    <div class="col-sm-3">
                      <p class="mb-0">Nama Orang Tua</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="mb-0"></p>
                    </div>
                  </div>
                  <hr class="batas">
                  <div class="row custom-bg">
                    <div class="col-sm-3">
                      <p class="mb-0">Alamat Orang tua</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="mb-0"></p>
                    </div>
                  </div>
                  <hr class="batas">
                  <div class="row custom-bg">
                    <div class="col-sm-3">
                      <p class="mb-0">No Telepon Orang Tua</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="mb-0"></p>
                    </div>
                  </div>
                  <hr class="batas">
              </div>
            </div>
          <!-- Batas -->
        </div>
        <div class="modal-footer">
          <!-- Tombol untuk menutup modal -->
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="closeModal()">Close</button>
        </div>
      </div>
    </div>
</div>
    <!-- Modal -->
@endsection
