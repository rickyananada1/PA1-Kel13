<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-black sticky-top p-0 px-4 px-lg-5" id="navbar">
      <a href="index.html" class="navbar-brand d-flex align-items-center">
        <img class="img-fluid me-2" src="{{asset('FRONTEND')}}/assets/Foto/logo.png" width="300px" alt="">
      </a>
      <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>      
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-4 py-lg-0">
          <a href="{{ route('user.desa') }}" class="nav-item nav-link active">HOME</a>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">DESA</a>
            <div class="dropdown-menu fade-up m-0">
                <a href="{{ route('user.sejarah') }}" class="dropdown-item">Sejarah Desa</a>
                <a href="{{ route('user.geografis') }}" class="dropdown-item">Geografis Desa</a>
                <a href="{{ route('user.organisasi') }}" class="dropdown-item">Struktur Organisasi</a>
            </div>

        </div>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">DATA DESA</a>
            <div class="dropdown-menu fade-up m-0">
                <a href="{{ route('user.kependudukan') }}" class="dropdown-item">Data Kependudukan</a>
                <a href="{{ route('user.kelamin') }}" class="dropdown-item">Data Jenis Kelamin</a>
                <a href="{{ route('user.pekerjaan') }}" class="dropdown-item">Data Jenis Pekerjaan</a>
                <a href="{{ route('user.darah') }}" class="dropdown-item">Data Jenis Golongan Darah</a>
            </div>
        </div>
          <a href="{{ route('user.produk') }}" class="nav-item nav-link">PRODUK DESA</a>
          <a href="{{ route('user.berita') }}" class="nav-item nav-link">BERITA</a>
          <a href="{{ route('user.kontak') }}" class="nav-item nav-link">KONTAK</a>
          <a href="{{ route('user.galeri') }}" class="nav-item nav-link">GALERI</a>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-people"></i></a>
            <div class="dropdown-menu fade-up m-0 dropdown-menu-end" id="drop-login">
              @if (Route::has('login'))
                  @auth
                      <a href="{{ url('/dashboard') }}">Login</a>
                  @else
                      <a href="{{ route('login') }}">Login</a>
                  @endauth
              </div>
          @endif
            </div>
          </div>
          
        </div>
      </div>
    </nav>
  </header>