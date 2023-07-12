<nav id="sidebar">
<div class="sidebar_blog_1">
    <div class="sidebar-header">
       <div class="logo_section">
          <a href="index.html"><img class="logo_icon img-responsive" src="{{asset('img/logo-tk.png')}}" alt="#" /></a>
       </div>
    </div>
    <div class="sidebar_user_info">
       <div class="icon_setting"></div>
       <div class="user_profle_side">
          <div class="user_img"><img class="img-responsive" src="{{asset('img/ic-prof.png')}}" alt="#" /></div>
          <div class="user_info">
             <h6>Icappucino</h6>
             <p><span class="online_animation"></span> Online</p>
          </div>
       </div>
    </div>
 </div>
 <div class="sidebar_blog_2">
    <h4>General</h4>
    <ul class="list-unstyled components">
       <li class="active">
          <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
          <ul class="collapse list-unstyled" id="dashboard">
             <li>
                <a href="{{url('/Dashboard-user')}}">> <span>Dashboard</span></a>
             </li>
          </ul>
       </li>
       <li>
          <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-diamond purple_color"></i> <span>Apps</span></a>
          <ul class="collapse list-unstyled" id="element">
             <li><a href="{{url('/Gallery')}}">> <span>Gallery Kegiatan</span></a></li>
             <li><a href="{{url('/')}}">> <span>Halaman Awal</span></a></li>
          </ul>
       </li>
       <li><a href="{{url('/Mata-Pelajaran')}}"><i class="fa fa-table purple_color2"></i> <span>Mata Pelajaran</span></a></li>
       <li><a href="{{url('/Pembayaran')}}"><i class="fa fa-briefcase blue1_color"></i> <span>Menu Pembayaran</span></a></li>
       <li>
          <a href="{{url('/Guru')}}">
          <i class="fa fa-paper-plane red_color"></i> <span>Daftar Pengajar</span></a>
       </li>
    </ul>
 </div>
</nav>
