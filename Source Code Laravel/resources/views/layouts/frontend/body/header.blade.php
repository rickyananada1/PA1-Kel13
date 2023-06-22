<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Desa Balige II</title>

    <!-- Favicon -->
    <link href="{{asset('FRONTEND')}}/assets/Foto/icon.png" rel="icon">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- CSS FILES -->
    <link href="{{asset('FRONTEND')}}/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('FRONTEND')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('FRONTEND')}}/css/swiper.css">
    <link rel="stylesheet" href="{{asset('FRONTEND')}}/css/animasi.css">
    <link rel="stylesheet" href="{{asset('FRONTEND')}}/css/responsive.css">

    <style>
        .fixed-image {
            position: fixed;
            right: 15px;
            bottom: 15px;
            width: 200px;
            height: 100px;
            z-index: 9999;
        }

/* Hover efek pada dropdown */
.navbar-nav .dropdown-menu .dropdown-item:hover {
    color: #fff;
    background-color:darkgreen;
}

    </style>
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <div class="container">
            <a href="/" class="navbar-brand d-flex align-items-center">
                <img class="w-75 d-lg-block" src="{{asset('FRONTEND')}}/assets/Foto/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto p-4 p-lg-0">
                    <li class="nav-item">
                        <a href="{{url('/')}}" class="nav-item nav-link active">HOME</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">DESA</a>
                        <div class="dropdown-menu">
                            @foreach ($meta as $item)
                                @if (strcasecmp($item->judul, 'kontak') !== 0)
                                    <a href="{{ route('halaman.desa', $item->meta_name) }}"
                                        class="dropdown-item">{{ $item->judul }}</a>
                                @endif
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('datadesa')}}" class="nav-link" style="white-space: nowrap;">DATA DESA</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('index.produk')}}" class="nav-link">PRODUK</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('index.berita')}}" class="nav-link">BERITA</a>
                    </li>
                    <li class="nav-item">
                        @foreach ($meta as $item)
                            @if ($item->meta_name === 'kontak')
                                <a href="{{ route('halaman.desa', $item->meta_name) }}"
                                    class="nav-link">{{ $item->judul }}</a>
                            @endif
                        @endforeach
                    </li>
                    <li class="nav-item">
                        <a href="{{route('category_galeri')}}" class="nav-link">GALERI</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i
                                class="bi bi-people"></i></a>
                        <div class="dropdown-menu">
                            <a href="{{route('login')}}" class="dropdown-item">Login</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="{{asset('FRONTEND')}}/lib/wow/wow.min.js"></script>
    <script type="text/javascript" src="{{asset('FRONTEND')}}/lib/easing/easing.min.js"></script>
    <script type="text/javascript" src="{{asset('FRONTEND')}}/lib/waypoints/waypoints.min.js"></script>
    <script type="text/javascript" src="{{asset('FRONTEND')}}/lib/owlcarousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="{{asset('FRONTEND')}}/lib/counterup/counterup.min.js"></script>
    <script type="text/javascript" src="{{asset('FRONTEND')}}/lib/parallax/parallax.min.js"></script>
    <script type="text/javascript" src="{{asset('FRONTEND')}}/lib/isotope/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="{{asset('FRONTEND')}}/lib/lightbox/js/lightbox.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="{{asset('FRONTEND')}}/js/main.js"></script>
</body>
</html>