<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Pembayaran</title>
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
<!-- Batas Awal -->

@php
    $rs1 = App\Models\Siswa::all();
    $rs2 = App\Models\Kategori::all();
@endphp
<div class="row mt-3 d-flex justify-content-center align-items-center"
enctype="multipart/form-data">
    <div class="col-lg-6">
       <div class="card">
         <div class="card-body">
         <div class="card-title text-center">Formulir Pembayaran</div>
         <hr>
         <!-- Awal Form -->
          <form method="POST" action="{{route('transaksi.store')}}">
            @csrf
        <div class="form-group">
            <label for="input-1">Jenis Pembayaran</label>
            <select class="form-select form-select-lg mb-3" name="jenis_pembayaran" aria-label=".form-select-lg example" required>
              <option selected class="form-control-2">Select ..</option>
              <option value="1" class="form-control-2">SPP</option>
              <option value="2" class="form-control-2">Pendaftaran</option>
              <option value="3" class="form-control-2">Seragam & Buku</option>
              <option value="3" class="form-control-2">Kegiatan</option>
              <option value="3" class="form-control-2">Pembangunan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="input-2">No Rekening</label>
            <div class="input-group">
              <input id="rekening" class="form-control" type="text" value="BCA: 8421319553" readonly>
              <div class="input-group-append">
                <button type="button" class="btn btn-outline-secondary" onclick="copyText()">Copy</button>
              </div>
            </div>
          </div>
         <div class="form-group">
          <label for="input-2">Masukan Nominal</label>
          <input type="text" name="nominal" class="form-control" id="input-1" placeholder="Masukan Jumlah Uang" required>
         </div>
         <div class="form-group">
             <label for="input-4">Bukti Pembayaran</label>
             <input type="file" name="resi" class="form-control" id="input-4" placeholder="Enter Password" required>
            </div>
         <div class="form-group py-2 text-center">
           <div class="icheck-material-white">
          <input type="checkbox" id="user-checkbox1" checked=""/>
          <label for="user-checkbox1">I Agree Terms & Conditions</label>
          </div>
         </div>
         <div class="form-group text-center">
          <button type="submit" class="btn btn-light px-5" name="proses"><i class="icon-lock"></i> Bayar Sekarang</button>
        </div>
        </form>
        <!-- Akhir Form -->
       </div>
       </div>
    </div>
  </div><!--End Row-->


<script>
    function copyText() {
        var inputElement = document.getElementById('rekening');
        inputElement.select();
        document.execCommand('copy');

        alert('Berhasil menyalin! Nomor rekening telah disalin ke clipboard.');
    }
</script>



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
