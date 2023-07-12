@extends('index')
@section('jenjang')
<section id="jenjang">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="fw-bold pt-5 jj-ttl">Jenjang Pendidikan</h2>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card-jenjang">
                    <div class="circle-icon-jenjang position-relative">
                        <img src="{{asset('img/book-fill.svg')}}" alt="icons" class="position-absolute top-50 start-50 translate-middle img-icons-jenjang">
                    </div>
                    <h3 class="fw-bold text-center sub-title-jenjang">TK-A</h3>
                    <h3 class="mt-4 mb-4 title-content-jenjang">
                        1. Detail Umur: 4-5 tahun <br>
                        2. Rincian Biaya Sekolah: <br>
                        3. Tujuan Pembelajaran: <br>
                        4. Outing class: Kunjungan Museum, Kegiatan Sosial, Seminar Parenting
                    </h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-jenjang kurmer">
                    <div class="circle-icon-jenjang position-relative">
                        <img src="{{asset('img/mortarboard-fill.svg')}}" alt="icons" class="position-absolute top-50 start-50 translate-middle img-icons-jenjang">
                    </div>
                    <h3 class="fw-bold text-center sub-title-jenjang">Kurikulum Merdeka</h3>
                    <h3 class="mt-4 mb-4 title-content-jenjang-2">
                        Struktur Kurikulum pada PAUD (TK/RA/BA, KB, SPS, TPA), terdiri atas:  <br>
                        1. Kegiatan Pembelajaran Intrakurikuler <br>
                        2. Projek Penguatan Profil Pelajar Pancasila <br>
                        Kegiatan pembelajaran intrakurikuler dirancang agar anak dapat mencapai kemampuan yang tertuang di dalam Capaian Pembelajaran.

                    </h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-jenjang">
                    <div class="circle-icon-jenjang position-relative">
                        <img src="{{asset('img/book-fill.svg')}}" alt="icons" class="position-absolute top-50 start-50 translate-middle img-icons-jenjang">
                    </div>
                    <h3 class="fw-bold text-center sub-title-jenjang">TK-B</h3>
                    <h3 class="mt-4 mb-4 title-content-2-jenjang">
                        1. Detail Umur: 5-6 tahun  <br>
                        2. Rincian Biaya Sekolah: <br>
                        3. Tujuan Pembelajaran:  <br>
                        4. Outing class: Kunjungan Museum, Kegiatan Sosial, Seminar Parenting, Manasik Haji
                    </h3>
                </div>
            </div>
        </div>

        <!-- Accordion Section -->

        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="fw-bold pt-5 jj-ttl">Rincian Biaya</h2>
                </div>
            </div>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Biaya Pendaftaran
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <h3 class="acc-ttl"> &#9654; 1.000.000,-</h3>
                    Setelah masuk, biaya pendaftaran satu kali dibebankan untuk memproses penerimaan siswa baru.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Biaya Pembangunan
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <h3 class="acc-ttl"> &#9654; 800.000,-</h3>
                    Biaya pembangunan dibebankan satu kali saat awal masuk pada semua jenjang pendidikan (TK A dan TK B).
                    Biaya ini bertujuan untuk mendukung pengembangan dan pemeliharaan fasilitas sekolah, biaya pembangunan bersifat non-refundable
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Biaya SPP
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <h2 class="acc-sttl">&#9654; TK A</h2>
                    <h3 class="acc-ttl">  400.000,-</h3>
                    <h2 class="acc-sttl">&#9654; TK B</h2>
                    <h3 class="acc-ttl">  500.000,-</h3>
                    Biaya SPP dibebankan setiap bulan dengan mencakup seluruh kegiatan akademik di sekolah. Namun, biaya tersebut tidak termasuk kegiatan ekstrakurikuler di luar lingkup program akademik.
                </div>
              </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
                    Biaya Seragam dan buku pelajaran
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <h3 class="acc-ttl"> &#9654; 900.000,-</h3>
                    Biaya ini dibebankan satu kali saat awal masuk pada semua jenjang pendidikan (TK A dan TK B). Biaya ini mencakup kebutuhan buku pelajaran siswa serta seragam sekolah yang terdiri dari 4 jenis seragam, Seragam Muslim, Seragam Batik, Seragam Profesi dan Seragam Olahraga.
                  </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">
                    Biaya Kegiatan
                  </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <h3 class="acc-sttl">&#9654; TK A</h3>
                    <h4 class="acc-ttl">  300.000,-</h4>
                    <h3 class="acc-sttl">&#9654; TK B</h3>
                    <h4 class="acc-ttl">  400.000,-</h4>
                    Biaya ini dibebankan satu kali saat awal masuk. Untuk TK A selama satu tahun ada 4 kegiatan yang harus diikuti yaitu, Kegiatan Berenang, Kunjungan Museum, Kegiatan Outbound, Kegiatan Porseni. Sedangkan untuk TK B selama satu tahun ada 5 kegiatan yang harus diikuti yaitu, Kegiatan Berenang, Kunjungan Museum, Kegiatan Outbound, Kegiatan Porseni dan Manasik Haji
                  </div>
                </div>
              </div>
        </div>
    </div>
</section>

@endsection
