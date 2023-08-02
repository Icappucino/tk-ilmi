@extends('userDashboard.index')
@section('Gallery')
<div class="midde_cont">
    <div class="container-fluid">
       <div class="row column_title">
          <div class="col-md-12">
             <div class="page_title">
                <h2>Gallery Kegiatan</h2>
             </div>
          </div>
       </div>
       <!-- row -->
       <div class="row column4 graph">
          <!-- Gallery section -->
          <div class="col-md-12">
             <div class="white_shd full margin_bottom_30">
                <div class="full graph_head">
                   <div class="heading1 margin_0">
                      <h2>Gallery Kegiatan Siswa</h2>
                   </div>
                </div>
                <div class="full gallery_section_inner padding_infor_info">
                   <div class="row">
                      <div class="col-sm-4 col-md-3 margin_bottom_30">
                         <div class="column">
                            <a data-fancybox="gallery" href="#"><img class="img-responsive img-gallery-style" src="{{asset('img/kegiatan/keg-1.jpg')}}" alt="#" /></a>
                         </div>
                         <div class="heading_section">
                            <h4>Nama Kegiatan</h4>
                         </div>
                      </div>
                      <div class="col-sm-4 col-md-3 margin_bottom_30">
                         <div class="column">
                            <a data-fancybox="gallery" href="#"><img class="img-responsive img-gallery-style" src="{{asset('img/kegiatan/keg-7.png')}}" alt="#" /></a>
                         </div>
                         <div class="heading_section">
                            <h4>Nama Kegiatan</h4>
                         </div>
                      </div>
                      <div class="col-sm-4 col-md-3 margin_bottom_30">
                         <div class="column">
                            <a data-fancybox="gallery" href="#"><img class="img-responsive img-gallery-style" src="{{asset('img/kegiatan/keg-8.png')}}" alt="#" /></a>
                         </div>
                         <div class="heading_section">
                            <h4>Nama Kegiatan</h4>
                         </div>
                      </div>
                      <div class="col-sm-4 col-md-3 margin_bottom_30">
                         <div class="column">
                            <a data-fancybox="gallery" href="#"><img class="img-responsive img-gallery-style" src="{{asset('img/kegiatan/keg-9.png')}}" alt="#" /></a>
                         </div>
                         <div class="heading_section">
                            <h4>Nama Kegiatan</h4>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <!-- footer -->
    </div>
    <!-- end dashboard inner -->
 </div>
@endsection
