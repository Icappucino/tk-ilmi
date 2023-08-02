<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Admin</title>
  <!-- loader-->
  <link href="{{asset('css/pace.min.css')}}" rel="stylesheet"/>
  <script src="{{asset('js/pace.min.js')}}"></script>
  <!--favicon-->
  <link rel="icon" href="{{asset('img/logo-tk.png')}}" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="{{asset('admin/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="{{asset('admin/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{asset('admin/css/animate.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{asset('admin/css/icons.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="{{asset('admin/css/sidebar-menu.css')}}" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{asset('admin/css/app-style.css')}}" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-theme bg-theme1">

<!-- Start wrapper-->
 <div id="wrapper">

  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    @include('admin.sidebar')
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
    @include('admin.navbar')
</header>
<!--End topbar header-->

<div class="clearfix"></div>

  <div class="content-wrapper">
    <div class="container-fluid">

<!--Start Dashboard Content-->
@yield('Dashboard')
<!--End Dashboard Content-->
@yield('Account')
@yield('Transaksi')
@yield('RiwayatTransaksi')
@yield('DataSiswa')
@yield('DataPengajar')
<!--Read DB-->
@yield('ContentSiswa')
@yield('LoginUser')
@yield('RegistUser')
@yield('ShowSiswa')
@yield('content')
<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
<!--end overlay-->

</div>
<!-- End container-fluid-->

    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

	<!--Start footer-->
    <!--
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2018 Dashtreme Admin
        </div>
      </div>
    </footer>
-->
	<!--End footer-->

  <!--start color switcher-->
   <div class="right-sidebar">
    @include('admin.colorswitch')
   </div>
  <!--end color switcher-->

  </div><!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('admin/js/popper.min.js')}}"></script>
  <script src="{{asset('admin/js/jquery.min.js')}}"></script>
  <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>

 <!-- simplebar js -->
  <script src="{{asset('admin/plugins/simplebar/js/simplebar.js')}}"></script>
  <!-- sidebar-menu js -->
  <script src="{{asset('admin/js/sidebar-menu.js')}}"></script>
  <!-- loader scripts -->
  <script src="{{asset('admin/js/jquery.loading-indicator.js')}}"></script>
  <!-- Custom scripts -->
  <script src="{{asset('admin/js/app-script.js')}}"></script>
  <!-- Chart js -->

  <script src="{{asset('admin/plugins/Chart.js/Chart.min.js')}}"></script>

  <!-- Index js -->
  <script src="{{asset('admin/js/index.js')}}"></script>
</body>
</html>
