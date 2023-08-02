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
<!-- -->
<div class="row mt-3 d-flex justify-content-center align-items-center">
    <div class="col-lg-6">
       <div class="card">
         <div class="card-body">
         <div class="card-title text-center">Formulir Pendaftaran</div>
         <hr>
          <form method="POST" action="{{route('siswa.store')}}"
          enctype="multipart/form-data">
            @csrf
         <div class="form-group">
          <label for="input-1">Nama Siswa</label>
          <input type="text" name="nama" class="form-control" id="input-1" placeholder="Masukan Nama Siswa" required>
         </div>
         <div class="form-group">
          <label for="input-2">Alamat</label>
          <input type="text" name="alamat" class="form-control" id="input-2" placeholder="Masukan Alamat" required>
         </div>
         <div class="form-group">
          <label for="input-3">Tempat Lahir</label>
          <input type="text" name="tempat" class="form-control" id="input-3" placeholder="Masukan Tempat Lahir" required>
         </div>
         <div class="form-group">
          <label for="input-4">Tanggal Lahir</label>
          <input type="date" name="tanggal" class="form-control" id="input-4" placeholder="Enter Password" required>
         </div>
         <div class="form-group">
            <label for="input-5">Jenis Kelamin</label>
            <select class="form-select form-select-lg mb-3" name="jenis_kelamin" aria-label=".form-select-lg example" required>
              <option selected class="form-control-2">Select ..</option>
              <option value="1" class="form-control-2">Laki-Laki</option>
              <option value="2" class="form-control-2">Perempuan</option>
            </select>
           </div>
         <div class="form-group">
          <label for="input-5">Agama</label>
          <select class="form-select form-select-lg mb-3" name="agama" aria-label=".form-select-lg example" required>
            <option selected class="form-control-2">Select ..</option>
            <option value="1" class="form-control-2">Islam</option>
            <option value="2" class="form-control-2">Kristen</option>
            <option value="3" class="form-control-2">Khatolik</option>
            <option value="4" class="form-control-2">Hindu</option>
            <option value="5" class="form-control-2">Budha</option>
          </select>
         </div>
         <div class="form-group">
            <label for="formFile" class="form-label">Foto Siswa</label>
            <input class="form-control" name="foto" type="file" id="formFile" required>
        </div>
        <div class="form-group">
            <label for="formFile" class="form-label">Akte Kelahiran</label>
            <input class="form-control" name="akte" type="file" id="formFile" required>
        </div>
        <div class="form-group">
            <label for="input-6">Nama Orang Tua</label>
            <input type="text" name="nama_orang_tua" class="form-control" id="input-6" placeholder="Nama Orang tua / Wali" required>
        </div>
        <div class="form-group">
            <label for="input-7">Alamat Orang Tua</label>
            <input type="text" name="alamat_orang_tua" class="form-control" id="input-7" placeholder="Alamat Orang tua / Wali" required>
        </div>
        <!-- Batas Form -->
         <div class="form-group py-2 text-center">
           <div class="icheck-material-white">
          <input type="checkbox" id="user-checkbox1" checked=""/>
          <label for="user-checkbox1">Dengan ini Saya Menyetujui Mendaftar pada TK ILMI Budi Luhur</label>
          </div>
         </div>
         <div class="form-group text-center">
          <button type="submit" class="btn btn-light px-5" name="proses"><i class="icon-lock"></i> Daftar</button>
        </div>
        </form>
       </div>
       </div>
    </div>
</div> <!-- Batas Row -->
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
