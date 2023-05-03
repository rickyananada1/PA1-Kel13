<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Desa Balige II</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('FRONTEND')}}/assets/Foto/icon.png ?>" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('FRONTEND')}}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{asset('FRONTEND')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{asset('FRONTEND')}}/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('FRONTEND')}}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('FRONTEND')}}/css/style.css" rel="stylesheet">
</head>
<body>
  <!-- Spinner Start -->
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
  </div>
  <!-- Spinner End -->

  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
      <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
          <img class="w-50 d-none d-lg-block" src="assets/Foto/logo.png" alt="">
      </a>
      <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto p-4 p-lg-0">
              <a href="{{url('/')}}" class="nav-item nav-link active">HOME</a>
              <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">DESA</a>
                  <div class="dropdown-menu bg-light m-0">
                      <a href="desa-profiledesa.html" class="dropdown-item">Profile Desa</a>
                      <a href="desa-sejarahdesa.html" class="dropdown-item">Sejarah Desa</a>
                      <a href="desa-geografisdesa.html" class="dropdown-item">Geografis Desa</a>
                      <a href="desa-strukturorganisasi.html" class="dropdown-item">Struktur Organisasi</a>
                  </div>
              </div>
              <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">DATA DESA</a>
                  <div class="dropdown-menu bg-light m-0">
                      <a href="data-kependudukan.html" class="dropdown-item">Data Kependudukan</a>
                      <a href="data-jeniskelamin.html" class="dropdown-item">Data Jenis Kelamin</a>
                      <a href="data-jenispekerjaan.html" class="dropdown-item">Data Jenis Pekerjaan</a>
                      <a href="data-jenisgolongandarah.html" class="dropdown-item">Data Jenis Golongan Darah</a>
                  </div>
              </div>
              <a href="produk.html" class="nav-item nav-link">PRODUK</a>
              <a href="berita.html" class="nav-item nav-link">BERITA</a>
              <a href="kontak.html" class="nav-item nav-link">KONTAK</a>
              <a href="{{route('user.galeri')}}" class="nav-item nav-link">GALERI</a>
              <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-people"></i></a>
                  <div class="dropdown-menu fade-up m-0 dropdown-menu-end dropdown-menu-start" id="drop-login">
                      <a href="login.html" class="dropdown-item">Login</a>
                  </div>
              </div>
              
          </div>
      </div>
  </nav>
  <!-- Navbar End -->