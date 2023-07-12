<div class="container">
    <a class="navbar-brand" href="#">
      <img src="{{asset('img/logo-tk.png')}}" alt="Bootstrap" width="110">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item mx-3">
          <a class="nav-link active" aria-current="page" href="{{('/')}}">Beranda</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="{{url('/Profile-Sekolah')}}">Profile Sekolah</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="{{url('/Jenjang-Pendidikan')}}">Jenjang Pendidikan</a>
        </li>
      </ul>
      <div>
        <!-- Mengganti Halaman -->
        <a href="{{url('/Dashboard-user')}}"><button class="button-primary">Masuk</button></a>
      </div>
    </div>
  </div>
