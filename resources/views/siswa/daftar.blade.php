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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.all.min.js"></script>
</head>
<body class="bg-theme bg-theme1">
<!-- -->
<div class="row mt-3 d-flex justify-content-center align-items-center">
    <div class="col-lg-6">
       <div class="card">
         <div class="card-body">
         <div class="card-title text-center">Register Akun!</div>
         <hr>
          <form method="POST" action="{{route('user.store')}}">
            @csrf
         <div class="form-group">
          <label for="input-1">Username</label>
          <input type="text" name="nama" class="form-control" id="input-1" placeholder="Enter Your Name" required>
         </div>
         <div class="form-group">
             <label for="input-4">Password</label>
             <input type="password" name="password" class="form-control" id="input-4" placeholder="Enter Password" required>
            </div>
            <div class="form-group">
             <label for="input-3">No Telepon</label>
             <input type="text" name="no_telp" class="form-control" id="input-3" placeholder="Enter Your Mobile Number" required>
            </div>
         <div class="form-group py-2 text-center">
           <div class="icheck-material-white">
          <input type="checkbox" id="user-checkbox1" checked=""/>
          <label for="user-checkbox1">I Agree Terms & Conditions</label>
          </div>
         </div>
         <div class="form-group text-center">
          <button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i> Register</button>
        </div>
        </form>
       </div>
       </div>
    </div>
  </div><!--End Row-->
<!-- -->
<!-- Your form and other elements -->
<script>
    // Cek status pesan dari controller
    @if(session('status') === 'success')
        Swal.fire({
            icon: 'success',
            title: 'Pendaftaran berhasil!',
            text: 'Selamat datang di halaman home!',
            confirmButtonText: 'Ok',
        }).then(() => {
            window.location.href = '/'; // Redirect ke halaman home
        });
    @elseif(session('status') === 'username_exists')
        Swal.fire({
            icon: 'error',
            title: 'Username sudah digunakan!',
            text: 'Silakan gunakan username lain.',
            confirmButtonText: 'Ok',
        });
    @endif
</script>

<!-- -->
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
