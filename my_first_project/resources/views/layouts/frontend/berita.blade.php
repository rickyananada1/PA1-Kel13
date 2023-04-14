<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Desa Balige II</title>

      <!-- Favicon -->
      <link href="{{asset('FRONTEND')}}/{{asset('FRONTEND')}}/assets/Foto/icon.png" rel="icon">

      <!-- Icon Font Stylesheet -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
  
      <!-- CSS FILES -->
      <link href="{{asset('FRONTEND')}}/css/bootstrap.min.css" rel="stylesheet">
      
      <link rel="stylesheet" href="{{asset('FRONTEND')}}/css/style.css">
  
      <link rel="stylesheet" href="{{asset('FRONTEND')}}/css/swiper.css">
  
      <link rel="stylesheet" href="{{asset('FRONTEND')}}/css/animasi.css">
  
      <link rel="stylesheet" href="{{asset('FRONTEND')}}/css/responsive.css">
  
  </head>

<body>

    @include('layouts.frontend.body.header')

  <!-- Konten Start  -->

  <div class="bg-light py-5">
    <div class="col-lg-8 col-xl-6 text-start">
        <h2 class="ms-sm-5">Kabar dan Pengumuman Desa</h2>
        <hr style="height: 5px; width: 100px;  background-color: rgb(0, 255, 94); font-weight: bold; margin-left: 20px; margin-left: 75px;">
    </div>
    <div class="container">

<!-- Berita Start -->

<div class="container py-5">
    <div class=" text-black">
      <div class="card-body">
        <div class="d-flex justify-content-end align-items-center">
          <a href="#" class="text-">See All</a>
        </div>
        <div class="news-item d-flex align-items-center">
            <div class="news-image">
                <img src="{{asset('FRONTEND')}}/assets/Foto/6307296.jpg" alt="thumb" class="rounded news-image__img" />
              </div>                  
          <div class="news-content m-3">
            <a href=""><h5>Desa Balige II</h5></a>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus, quidem! Consequuntur pariatur aspernatur nesciunt, odio quae fuga laborum corporis exercitationem ex laboriosam non illo perspiciatis quidem placeat omnis totam sint!</p>
            <div class="fs-12">
              <span class="mr-2">Photo </span>10 Minutes ago
            </div>
          </div>
        </div>

        <hr>

        <div class="news-item d-flex align-items-center">
            <div class="news-image">
                <img src="{{asset('FRONTEND')}}/assets/Foto/6307296.jpg" alt="thumb" class="rounded news-image__img" />
              </div>
            <div class="news-content m-3">
                <a href=""><h5>Desa Balige II</h5></a>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus, quidem! Consequuntur pariatur aspernatur nesciunt, odio quae fuga laborum corporis exercitationem ex laboriosam non illo perspiciatis quidem placeat omnis totam sint!</p>
              <div class="fs-12">
                <span class="mr-2">Photo </span>10 Minutes ago
              </div>
            </div>
          </div>

          <hr>

    <div class="news-item d-flex align-items-center">
        <div class="news-image">
            <img src="{{asset('FRONTEND')}}/assets/Foto/6307296.jpg" alt="thumb" class="rounded news-image__img" />
          </div>
        <div class="news-content m-3">
            <a href=""><h5>Desa Balige II</h5></a>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus, quidem! Consequuntur pariatur aspernatur nesciunt, odio quae fuga laborum corporis exercitationem ex laboriosam non illo perspiciatis quidem placeat omnis totam sint!</p>

                <div class="fs-12">
            <span class="mr-2">Photo </span>10 Minutes ago
            </div>
            </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

    <!-- Berita End -->



        </div>
</div>


@include('layouts.frontend.body.footer')



    <!-- JAVASCRIPT FILES -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{asset('FRONTEND')}}/js/swiper.min.js"></script>
    <script src="{{asset('FRONTEND')}}/js/animasi.js"></script>
    <script src="{{asset('FRONTEND')}}/js/jquery.min.js"></script>
    <script src="{{asset('FRONTEND')}}/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('FRONTEND')}}/js/custom.js"></script>

</body>

</html>

