@extends('userDashboard.index')
@section('Guru')
<div class="midde_cont">
    <div class="container-fluid">
       <div class="row column_title">
          <div class="col-md-12">
             <div class="page_title">
                <h2>Daftar Pengajar dan Wali Kelas</h2>
             </div>
          </div>
       </div>
       <!-- row -->
       <div class="row column1">
          <div class="col-md-12">
             <div class="white_shd full margin_bottom_30">
                <div class="full graph_head">
                   <div class="heading1 margin_0">
                      <h2>Profile Pengajar</h2>
                   </div>
                </div>
                <div class="full price_table padding_infor_info">
                   <div class="row">
                      <!-- column contact -->
                      <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30">
                         <div class="contact_blog">
                            <div class="contact_inner">
                               <div class="left">
                                  <h3>Yani Sulistiani, S.Pd</h3>
                               </div>
                               <div class="right">
                                  <div class="profile_contacts">
                                     <img class="img-responsive" src="{{asset('img/foto-guru-1.jpg')}}" alt="#" />
                                  </div>
                               </div>
                               <div class="bottom_list">
                                  <div class="right_button">
                                     <a href="https://wa.me/089635601732" target="_blank" class="links-hub">Hubungi <button type="button" class="btn btn-success btn-xs"><i class="bi bi-whatsapp"></i>
                                     </button></a>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- end column contact blog -->
                      <!-- column contact -->
                      <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30">
                         <div class="contact_blog">
                            <div class="contact_inner">
                               <div class="left">
                                  <h3>Mega Kurnia, S.Pd</h3>
                               </div>
                               <div class="right">
                                  <div class="profile_contacts">
                                     <img class="img-responsive" src="{{asset('img/foto-guru-2.jpg')}}" alt="#" />
                                  </div>
                               </div>
                               <div class="bottom_list">
                                  <div class="right_button">
                                    <a href="https://wa.me/089635601732" target="_blank" class="links-hub">Hubungi <button type="button" class="btn btn-success btn-xs"><i class="bi bi-whatsapp"></i>
                                    </button>
                                    </a>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- end column contact blog -->
                      <!-- column contact -->
                      <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30">
                         <div class="contact_blog">
                            <div class="contact_inner">
                               <div class="left">
                                  <h3>Harlina Puspita,S.Pd</h3>
                               </div>
                               <div class="right">
                                  <div class="profile_contacts">
                                     <img class="img-responsive" src="{{asset('img/foto-guru-3.jpg')}}" alt="#" />
                                  </div>
                               </div>
                               <div class="bottom_list">
                                  <div class="right_button">
                                    <a href="https://wa.me/089635601732" target="_blank" class="links-hub">Hubungi <button type="button" class="btn btn-success btn-xs pl-10"><i class="bi bi-whatsapp"></i>
                                    </button></a>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- end column contact blog -->
          <!-- end row -->
       </div>
 </div>
@endsection
