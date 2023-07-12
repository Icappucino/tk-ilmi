@extends('index')
@section('profile')
<section id="profsek">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="fw-bold ttl-head">Profile Sekolah</h2>
                <h3 class="fw-bold sub-title"><i class="bi bi-mortarboard-fill"></i> Visi & Misi</h3>
            </div>
            <h3 class="fw-bold tg-title">Visi</h3>
            <span class="fw-bold pt-3 pb-3 sub-content">
                Menjadikan anak yang beriman dan bertakwa kepada Tuhan YME, cerdas, mandiri,dan berkreatif
            </span>
            <h3 class="fw-bold tg-title">Misi</h3>
        </div>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card-profile">
                    <div class="circle-icon position-relative">
                        <img src="{{asset('img/mortarboard-fill.svg')}}" alt="icons" class="position-absolute top-50 start-50 translate-middle img-icons">
                    </div>
                    <h3 class="mt-4 mb-4 title-content">Mewujudkan pendidikan yang relevan dan berkualitas</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-profile">
                    <div class="circle-icon position-relative">
                        <img src="{{asset('img/book-fill.svg')}}" alt="icons" class="position-absolute top-50 start-50 translate-middle img-icons">
                    </div>
                    <h3 class="mt-4 mb-4 title-content">Mewujudkan pelestarian kebudayaan</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-profile misi-3">
                    <div class="circle-icon position-relative">
                        <img src="{{asset('img/mortarboard-fill.svg')}}" alt="icons" class="position-absolute top-50 start-50 translate-middle img-icons">
                    </div>
                    <h3 class="mt-4 mb-4 title-content-2">
                        Mengoptimalkan peran serta seluruh pemangku kepentingan untuk mewujudkan tujuan pendidikan
                    </h3>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-12 text-center pb-10">
                <h3 class="fw-bold sub-title"><i class="bi bi-building-fill"></i> Unit Sekolah</h3>
            </div>
        </div>
        <div class="row unit">
            <div class="col-6 pt-10">
                <div class="card unit-card" style="width: 40rem;">
                    <img src="{{asset('img/img-sekolah/tk-1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title fw-bold">TK ILMI BUDI LUHUR 1</h5>
                      <p class="card-text">
                        PERUM GRAHA MUSTIKA MEDIA BLOK P4 NO. 7, Kec. Setu, Kabupaten Bekasi, Jawa Barat
                        17322
                        </p>
                      <a href="https://goo.gl/maps/o4dKSMNETNqzD8oH9" target="_blank" class="btn btn-warning">Details &#8811;</a>
                    </div>
                  </div>
            </div>
            <div class="col-6">
                <div class="card unit-card" style="width: 40rem;">
                    <img src="{{asset('img/img-sekolah/tk-2.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title fw-bold">TK ILMI BUDI LUHUR 2</h5>
                      <p class="card-text">
                        Papanmas, Jl. Taruna 3 blok F 45 No. 20, Setiamekar, Kec. Tambun Sel., Kabupaten Bekasi, Jawa Barat 17510
                    </p>
                      <a href="https://goo.gl/maps/JsT1paZKDXkqMXvT8" target="_blank" class="btn btn-warning">Details &#8811;</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</section>
@endsection
