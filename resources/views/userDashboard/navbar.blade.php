<div class="topbar">
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="full">
       <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
       <div class="logo_section">
          <a href="{{url('/Dashboard-user')}}"><img class="img-responsive" src="{{asset('img/logo-tk.png')}}" alt="#" /></a>
       </div>
       <div class="right_topbar">
          <div class="icon_info">
             <!-- <ul>
                <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
             </ul> -->
             <ul class="user_profile_dd">
                <li>
                   <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="{{asset('img/ic-prof.png')}}" alt="#" /><span class="name_user">Icappucino</span></a>
                   <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{url('/Profile-user')}}">My Profile</a>
                      <a class="dropdown-item" href="{{url('/')}}"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                   </div>
                </li>
             </ul>
          </div>
       </div>
    </div>
 </nav>
</div>
