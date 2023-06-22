<!doctype html>
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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <style>
        .btn-primaryx {
            background-color: white !important;
            border: 1px solid green !important;
            color: green !important;
        }

        .btn.btn-primaryx:hover {
            background-color: green !important;
        }

        .btn.btn-primaryx:hover i {
            color: white;
        }
    </style>
</head>

<body>
    @include('layouts.frontend.body.header')
    <div class="container py-5">
        <h2>{{ $pengumuman->judul }}</h2>

        <div class="category-date">
            <i class="fas fa-fw fa-clock"></i>
            <a><p class="card-text" style="display: inline-block; margin-left: 5px; margin-right: 5px;">
              <?php
              $now = \Carbon\Carbon::now();
              $created_at = \Carbon\Carbon::parse($pengumuman->created_at)->locale('id');
              if ($created_at->diffInHours($now) < 24) {
                  echo $created_at->diffForHumans();
              } else {
                  echo $created_at->format('d M Y');
           }
          ?>
          </p></a>
          </div>
<hr>
         
           {!!$pengumuman->isi_pengumuman!!}
        

        

    </div>


    
    @include('layouts.frontend.body.footer')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    

    <!-- JAVASCRIPT FILES -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{asset('FRONTEND')}}/js/swiper.min.js"></script>
    <script src="{{asset('FRONTEND')}}/js/animasi.js"></script>
    <script src="{{asset('FRONTEND')}}/js/jquery.min.js"></script>
    <script src="{{asset('FRONTEND')}}/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('FRONTEND')}}/js/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function () {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                items: 1,
                loop: true,
                nav: false,
                dots: false,
                navText: ['<span class="carousel-control-prev-icon"></span>', '<span class="carousel-control-next-icon"></span>']
            });

            $('.owl-next').click(function () {
                owl.trigger('next.owl.carousel');
            });
            $('.owl-prev').click(function () {
                owl.trigger('prev.owl.carousel');
            });
        });
    </script>
</body>

</html>