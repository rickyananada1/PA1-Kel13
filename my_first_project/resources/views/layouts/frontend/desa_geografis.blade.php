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



 <!-- Konten Start  -->

 <div class="bg-light py-5">
    <div class="col-lg-8 col-xl-6 text-start">
        <h2 class="ms-sm-5">Geografis Desa Balige II</h2>
        <hr style="height: 5px; width: 100px;  background-color: rgb(0, 255, 94); font-weight: bold; margin-left: 20px; margin-left: 75px;">
    </div>
    <div class="container">
    <div class="row w-100">
        <div class="col-lg-6 my-4">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7973.013954056606!2d99.06647807327083!3d2.334496443194417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e0468554182f1%3A0xebee2755c36e59a!2sBalige%20II%2C%20Kec.%20Balige%2C%20Toba%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1680413545431!5m2!1sid!2sid"
            class="w-100" height="400" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="col-lg-6 my-4 d-flex align-items-center">
          <div>
            <h6>Berdasakan leta geografis wilayah, Desa Balige II berada antara Latitude: 2.3284° N
                Longitude: 99.0594° E</h6>
            <p>Luas Wilayah Desa Balige II ialah 0,61 km² yang dimana dengan Jumlah Kepadatan Penduduk 895,08 jiwa/km²</p>
            
          </div>
        </div>
      </div>
    </div>
</div>

<!-- Konten End -->


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

