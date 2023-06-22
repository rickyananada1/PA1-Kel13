 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/dashboard')}}">
      <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Admin Balige  <sup>II</sup></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
      <a class="nav-link" href="{{url('/dashboard')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
      Penduduk
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link" href="{{route('kode.keluarga')}}">
        <i class="fas fa-fw fa-user"></i>
        <span><strong>Kode Keluarga</strong></span></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="{{route('user.penduduk')}}">
        <i class="fas fa-fw fa-user"></i>
        <span><strong>Data Penduduk</strong></span></a>
</li>

<hr class="sidebar-divider">


  <!-- Heading -->
  <div class="sidebar-heading">
    Pengemuman Desa
</div>

  <!-- Nav Item - Charts -->
  <li class="nav-item">
      <a class="nav-link" href="{{route('index.pengumuman')}}">
        <i class="fas fa-fw fa-newspaper"></i>
          <span><strong>Pengumuman</strong></span></a>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
      Galeri Desa
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link" href="{{route('users.galeri')}}">
      <i class="fas fa-fw fa-images"></i>
        <span><strong>Galeri</strong></span></a>
</li>

  <!-- Divider -->
  <hr class="sidebar-divider">


  <!-- Heading -->
  <div class="sidebar-heading">
    Berita Desa
</div>

  <!-- Nav Item - Charts -->
  <li class="nav-item">
      <a class="nav-link" href="{{route('users.berita')}}">
        <i class="fas fa-fw fa-newspaper"></i>
          <span><strong>Berita</strong></span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('users.categoryberita')}}">
      <i class="fas fa-fw fa-shopping-bag"></i>
      <span><strong>Category</strong></span></a>
  </li>
    <!-- Divider -->
    <hr class="sidebar-divider">


  <!-- Heading -->
  <div class="sidebar-heading">
    Produk Desa
</div>

  <!-- Nav Item - Tables -->
  <li class="nav-item">
    <a class="nav-link" href="{{route('users.produk')}}">
      <i class="fas fa-fw fa-shopping-bag"></i>
      <span><strong>Produk</strong></span></a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{route('users.category')}}">
    <i class="fas fa-fw fa-shopping-bag"></i>
    <span><strong>Category</strong></span></a>
</li>

  <!-- Divider -->
  <hr class="sidebar-divider">


<!-- Heading -->
<div class="sidebar-heading">
  Struktur Desa
</div>

<!-- Nav Item - Tables -->
<li class="nav-item">
  <a class="nav-link" href="{{route('users.struktur')}}">
    <i class="fas fa-fw fa-shopping-bag"></i>
    <span><strong>Struktur</strong></span></a>
</li>

  <!-- Divider -->
  <hr class="sidebar-divider">


<!-- Heading -->
<div class="sidebar-heading">
  Desa
</div>

<!-- Nav Item - Tables -->
<li class="nav-item">
  <a class="nav-link" href="{{route('index.meta')}}">
    <i class="fas fa-fw fa-newspaper"></i>
      <span><strong>Halaman Desa</strong></span></a>
</li>


  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block ">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

  
</ul>
<!-- End of Sidebar -->
























