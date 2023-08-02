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
                   <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="{{asset('img/nophoto.jpeg')}}" alt="#" /><span class="name_user">
                @if(empty(Auth::user()->name))
                {{ '' }}
                @else
                {{ Auth::user()->name }}
                @endif
                </span></a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{url('/Profile-user')}}">My Profile</a>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
              </div>
                </li>
             </ul>
          </div>
       </div>
    </div>
 </nav>
</div>
