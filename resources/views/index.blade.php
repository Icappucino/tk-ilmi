<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Wesbsite Icons -->
    <link href="{{asset('img/logo-tk.png')}}" rel="icon" type="image/x-icon" >
    <title>TK Ilmi Budi Luhur</title>
        <!-- Google Font -->
    <!-- ================={ Resource Google Font }====================
            Import Font from Google Font , Google Font Docs :
                        https://fonts.google.com/
    =============================================================== -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;600;700&family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    <!-- Boostrap CSS -->
    <!-- ================={ Resource Boostrap }====================
    Make With Boostrap 5.3, Link Boostrap Docs  :
    https://getbootstrap.com/docs/5.3/getting-started/download/
    =============================================================== -->
<link href="{{asset('bootstrap/bootstrap.min.css')}}" rel="stylesheet" >
    <!-- Main CSS -->
<link href="{{asset('css/style.css')}}" rel="stylesheet" >
    <!-- Icons Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Boxicons -->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- =============================================
    ================={ License }====================
    ================================================
      // Copyright && Icappucino 2023
      // Github : https://github.com/Icappucino
      // Instagram : https://www.instagram.com/icappucino_/
      // Powered by Spacecode.id
      // Instagram Vendor : https://www.instagram.com/spacecode.id/
    =============================================================== -->
</head>
<body>

    <!-- Navbar Section Start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning position-fixed w-100">
        @include('navigation')
      </nav>
    <!-- Navbar Section Ended -->

    <!-- Section Hero Start -->
    @yield('beranda')
    <!-- Section Hero Ended -->

    <!-- Section Profile Sekolah Start -->
    @yield('profile')
    <!-- Section Profile Sekolah Ended -->

    <!-- Section Jenjang Pendidikan Start -->
    @yield('jenjang')
    <!-- Section Jenjang Pendidikan Ended -->

    <!-- Section  Ended -->
    <!-- Section  Ended -->


    <!-- Footer Start -->
    <footer id="footer">
        <div class="footer-top">
          <div class="container">
            <div class="row">
                @include('footer')
            </div>
          </div>
        </div>
    </footer>
    <!-- Footer Ended -->

    <!-- Bootstrap JS -->
    <script src="{{asset('bootstrap/bootstrap.bundle.min.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
