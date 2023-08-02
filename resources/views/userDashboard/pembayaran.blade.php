@extends('userDashboard.index')
@section('Pembayaran')
<div class="midde_cont">
    <div class="container-fluid">
       <div class="row column_title">
          <div class="col-md-12">
             <div class="page_title">
                <h2>Pembayaran</h2>
             </div>
          </div>
       </div>
       <!-- row -->
       <div class="row column1">
          <div class="col-md-12">
             <div class="white_shd full margin_bottom_30">
                <div class="full graph_head">
                   <div class="heading1 margin_0">
                      <h2>Silahkan Pilih Pembayaran</h2>
                   </div>
                </div>
                <div class="full price_table padding_infor_info">
                   <div class="row">
                      <!-- column price -->
                      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                         <div class="table_price full">
                            <div class="inner_table_price">
                               <div class="price_table_head blue1_bg">
                                  <h2>Pendaftaran</h2>
                               </div>
                               <div class="price_table_inner">
                                  <div class="cont_table_price_blog">
                                     <p class="blue1_color"><span class="price_no"></span> 1.000.000,-</p>
                                  </div>
                               </div>
                               <div class="price_table_bottom">
                                  <div class="center"><a class="main_bt" href="{{route('transaksi.create')}}">Bayar Sekarang</a></div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- end column price -->
                      <!-- column price -->
                      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                         <div class="table_price full">
                            <div class="inner_table_price">
                               <div class="price_table_head green_bg">
                                  <h2>SPP</h2>
                               </div>
                               <div class="price_table_inner">
                                  <div class="cont_table_price_blog">
                                     <p class="green_color">500.000<span class="price_no"></span> /bulan</p>
                                  </div>
                               </div>
                               <div class="price_table_bottom">
                                  <div class="center"><a class="main_bt" href="{{route('transaksi.create')}}">Bayar Sekarang</a></div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- end column price -->
                      <!-- column price -->
                      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                         <div class="table_price full">
                            <div class="inner_table_price">
                               <div class="price_table_head red_bg">
                                  <h2>Seragam & Buku</h2>
                               </div>
                               <div class="price_table_inner">
                                  <div class="cont_table_price_blog">
                                     <p class="red_color"> <span class="price_no"></span> 900.000,-</p>
                                  </div>
                               </div>
                               <div class="price_table_bottom">
                                  <div class="center"><a class="main_bt" href="{{route('transaksi.create')}}">Bayar Sekarang</a></div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- end column price -->
                    <!-- column price -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="table_price full">
                           <div class="inner_table_price">
                              <div class="price_table_head yellow_bg">
                                 <h2>Kegiatan</h2>
                              </div>
                              <div class="price_table_inner">
                                 <div class="cont_table_price_blog">
                                    <p class="yellow_color"> <span class="price_no"></span> 400.000,-</p>
                                 </div>
                              </div>
                              <div class="price_table_bottom">
                                 <div class="center"><a class="main_bt" href="{{route('transaksi.create')}}">Bayar Sekarang</a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                      <!-- end column price -->
                     <!-- column price -->
                      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="table_price full">
                           <div class="inner_table_price">
                              <div class="price_table_head red_bg">
                                 <h2>Biaya Pembangunan</h2>
                              </div>
                              <div class="price_table_inner">
                                 <div class="cont_table_price_blog">
                                    <p class="red_color"> <span class="price_no"></span> 800.000,-</p>
                                 </div>
                              </div>
                              <div class="price_table_bottom">
                                 <div class="center"><a class="main_bt" href="{{route('transaksi.create')}}">Bayar Sekarang</a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                      <!-- end column price -->

@endsection
