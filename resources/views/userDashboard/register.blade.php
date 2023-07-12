@extends('userDashboard.index')
@section('register')
<div class="container" data-aos="fade-up">
    <div class="row">
        <div class="skck">
            <img src="{{url('img/logo-tk.png')}}" alt="logo-desa" class="logo-desa w-50 mx-auto" />
            <form action="" class="row g-3">
                <h3 class="subtitle-suket text-center">Data Anak</h3>
                <div class="col-md-12">
                    <label for="nameChild" class="form-label">Nama Anak / Bayi</label>
                    <input type="text" class="form-control" id="inputChild" placeholder="Tuliskan Nama Anak / Bayi">
                </div>
                <div class="col-md-2">
                    <label for="inputGenderChild" class="form-label">Jenis Kelamin</label>
                    <select id="inputGenderChild" class="form-select">
                      <option selected>- Jenis Kelamin -</option>
                      <option>Laki-laki</option>
                      <option>Perempuan</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="inputLocation" class="form-label">Tempat di Lahirkan</label>
                    <select id="inputLocation" class="form-select">
                      <option selected>- Agama -</option>
                      <option>Islam</option>
                      <option>Kristen</option>
                      <option>Khatolik</option>
                      <option>Hindu</option>
                      <option>Budha</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="inputTmptLahirChild" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" id="inputTmptLahirChild" placeholder="Contoh : Bekasi">
                </div>
                <div class="col-md-2">
                    <label for="inputTglLahirChild" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="inputTglLahirChild">
                </div>
                <div class="col-md-2">
                    <label for="inputTimeChild" class="form-label">Waktu Lahir</label>
                    <input type="time" class="form-control" id="inputTimeChild">
                </div>
                <div class="col-md-2">
                    <label for="inputBirthChild" class="form-label">Jenis Kelahiran</label>
                    <select id="inputBirthChild" class="form-select">
                      <option selected>- Jenis Kelahiran -</option>
                      <option>Tunggal</option>
                      <option>Kembar</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="inputBirth2" class="form-label">Kelahiran / Anak ke </label>
                    <input type="text" class="form-control" id="inputBirth2" placeholder="1, 2, 3, ...">
                </div>
                <div class="col-md-2">
                    <label for="inputHelper" class="form-label">Penolong Kelahiran</label>
                    <select id="inputHelper" class="form-select">
                      <option selected>- Pilih Penolong -</option>
                      <option>Dokter</option>
                      <option>Bidan / Perawat</option>
                      <option>Dukun</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="inputHeight" class="form-label">Berat Bayi ( gram )</label>
                    <input type="text" class="form-control" id="inputHeight" placeholder="3200 gram">
                </div>
                <div class="col-md-2">
                    <label for="inputWidth" class="form-label">Panjang Bayi ( cm )</label>
                    <input type="text" class="form-control" id="inputWidth" placeholder="60cm">
                </div>
                <!--
                <h3 class="subtitle-suket text-center">Data Ibu Bayi</h3>
                <div class="col-md-6">
                    <label for="nameMom" class="form-label">Nama Ibu Bayi</label>
                    <input type="text" class="form-control" id="inputNameMom" placeholder="Tuliskan Nama Ibu">
                </div>
                <div class="col-12">
                    <label for="inputAddressMom" class="form-label">Alamat Ibu Bayi</label>
                    <input type="text" class="form-control" id="inputAddressMom" placeholder="Tuliskan Alamat Lengkap Beserta RT/RW">
                </div>
            -->
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit Data Anda</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
