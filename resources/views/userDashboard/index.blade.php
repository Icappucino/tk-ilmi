<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Dashboard User</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="{{asset('img/logo-tk.png')}}" type="image/png" >
      <!-- bootstrap css -->
      <link href="{{asset('./dashboard/css/bootstrap.min.css')}}" rel="stylesheet" >
      <!-- site css -->
      <link href="{{asset('./dashboard/style.css')}}" rel="stylesheet">
      <!-- responsive css -->
      <link href="{{asset('./dashboard/css/responsive.css')}}" rel="stylesheet">
      <!-- color css -->
      <link href="{{asset('./dashboard/css/colors.css')}}" rel="stylesheet" >
      <!-- select bootstrap -->
      <link href="{{asset('./dashboard/css/bootstrap-select.css')}}" rel="stylesheet" >
      <!-- scrollbar css -->
      <link href="{{asset('./dashboard/css/perfect-scrollbar.css')}}" rel="stylesheet" >
      <!-- custom css -->
      <link href="{{asset('./dashboard/css/custom.css')}}" rel="stylesheet" >
      <!-- Bootstrap Icon -->
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            @include('userDashboard.sidebar')
            <div id="content">
               <!-- topbar -->
            @include('userDashboard.navbar')
            @yield('Dashboard')
            @yield('Pembayaran')
            @yield('MataPelajaran')
            @yield('Profile')
            @yield('Guru')
            @yield('Gallery')
            @yield('login')
            @yield('register')
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="{{asset('dashboard/js/jquery.min.js')}}"></script>
      <script src="{{asset('dashboard/js/popper.min.js')}}"></script>
      <script src="{{asset('dashboard/js/bootstrap.min.js')}}"></script>
      <!-- wow animation -->
      <script src="{{asset('dashboard/js/animate.js')}}"></script>
      <!-- select country -->
      <script src="{{asset('dashboard/js/bootstrap-select.js')}}"></script>
      <!-- owl carousel -->
      <script src="{{asset('dashboard/js/owl.carousel.js')}}"></script>
      <!-- chart js -->
      <script src="{{asset('dashboard/js/Chart.min.js')}}"></script>
      <script src="{{asset('dashboard/js/Chart.bundle.min.js')}}"></script>
      <script src="{{asset('dashboard/js/utils.js')}}"></script>
      <script src="{{asset('dashboard/js/analyser.js')}}"></script>
      <!-- nice scrollbar -->
      <script src="{{asset('dahsboard/js/perfect-scrollbar.min.js')}}"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="{{asset('dashboard/js/chart_custom_style1.js')}}"></script>
      <script src="{{asset('dashboard/js/custom.js')}}"></script>
   </body>
</html>
