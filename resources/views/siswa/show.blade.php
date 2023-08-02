@extends('admin.index')
@section('ShowSiswa')
<div class="row">
    <div class="col-lg-12 ">
        <div class="card mb-4">
            @foreach ($siswaList as $sl)
            <div class="card-body">
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Nama Lengkap</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="mb-0">{{$sl->nama_siswa}} <i class="bi bi-patch-check-fill"></i></p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Alamat</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="mb-0">{{$sl->alamat_siswa}}</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Tempat Lahir</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="mb-0">{{$sl->tempat_lahir}}</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Tanggal Lahir</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="mb-0">{{$sl->tanggal_lahir}}</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Jenis Kelamin</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="mb-0">{{$sl->jenis_kelamin}}</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Agama</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="mb-0">{{$sl->agama}}</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Foto Siswa</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="mb-0">
                        @php
                            if(!empty($sl->foto_siswa)){
                        @endphp
                                <img src="{{asset('img')}}/{{$sl->foto_siswa}}" width="10%">
                        @php
                       }else {
                        @endphp
                                <img src="{{asset('img')}}/nophoto.jpeg" width="10%">
                        @php
                        }
                        @endphp
                    </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Foto Akte Kelahiran</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="mb-0">
                        @php
                        if(!empty($sl->foto_akte_kelahiran)){
                    @endphp
                            <img src="{{asset('img')}}/{{$sl->foto_akte_kelahiran}}" width="10%">
                    @php
                   }else {
                    @endphp
                            <img src="{{asset('img')}}/nophoto.jpeg" width="10%">
                    @php
                    }
                    @endphp
                    </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Nama Orang Tua</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="mb-0">{{$sl->nama_orang_tua}}</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Alamat Orang Tua</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="mb-0">{{$sl->alamat_orang_tua}}</p>
                    </div>
                </div>
                <hr>
                <!-- -->
            @endforeach
        </div>
        <a href="{{url('/siswa')}}">
            <button type="button" class="btn btn-danger float-right mt-3"><i class="bi bi-file-earmark-pdf-fill"></i> Kembali</button>
        </a>
    </div>
</div>
@endsection

