@extends('admin.index')
@section('Account')
<section id="account">
    <div class="container py-5">
      <div class="row">
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="{{asset('img/hana-prof.jpg')}}" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-3">Hana Dwi <i class="bi bi-patch-check-fill"></i></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Nama Lengkap</p>
                </div>
                <div class="col-sm-9">
                  <p class="mb-0">Hana Dwi Kirani <i class="bi bi-patch-check-fill"></i></p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Alamat</p>
                </div>
                <div class="col-sm-9">
                  <p class="mb-0">Papan Mas D2 no 27</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Nomor Telepon</p>
                </div>
                <div class="col-sm-9">
                  <p class="mb-0">08xx-xxxx-4334</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Username</p>
                </div>
                <div class="col-sm-9">
                  <p class="mb-0">HanaDwi4334</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                  <p class="mb-0">Hanadwi-1@tka.com</p>
                </div>
              </div>
              <hr>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
