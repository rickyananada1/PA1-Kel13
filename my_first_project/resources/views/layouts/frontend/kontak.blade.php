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
        <h2 class="ms-sm-5">Hubungi Kami</h2>
        <hr style="height: 5px; width: 100px;  background-color: rgb(0, 255, 94); font-weight: bold; margin-left: 20px; margin-left: 75px;">
    </div>
    <div class="container">

        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="team text-center rounded p-3 py-4">
                    <img src="https://cdn-icons-png.flaticon.com/512/6395/6395240.png" width="200px" class="img-fluid avatar avatar-medium shadow rounded-pill" alt="">
                    <div class="content mt-3">
                        <h4 class="title mb-0">ALAMAT</h4>
                        <small class="text-muted">(Senin - Jumat, Pukul 10.00 - 16.00 Waktu Setempat)</small>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Balige II,Kec Balige,Toba,Sumut</p>

                    </div>
                </div>
            </div><!--end col-->
            
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="team text-center rounded p-3 py-4">
                    <img src="https://cdn-icons-png.flaticon.com/512/724/724664.png" width="200px" class="img-fluid avatar avatar-medium shadow rounded-pill" alt="">
                    <div class="content mt-3">
                        <h4 class="title mb-0">TELEPHONE</h4>
                        <small class="text-muted">(Senin - Jumat, Pukul 10.00 - 16.00 Waktu Setempat)</small>
                        <small>untuk melalui WA,</small> <br>
                        <a class="btn btn-square btn-black rounded-circle me-2" href=""><i class="fab fa-whatsapp"></i>+62 852-7015-3429</a> <br>
                        <small>untuk melalui Telepon Seluler,</small>
                        <a class="btn btn-square btn-black rounded-circle me-2" href=""><i class="fab fa-whatsapp"></i>+62 852-2322-55429</a> <br>
                    </div>
                </div>
            </div><!--end col-->
            
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="team text-center rounded p-3 py-4">
                    <img src="https://cdn-icons-png.flaticon.com/512/2250/2250206.png" width="200px" class="img-fluid avatar avatar-medium shadow rounded-pill" alt="">
                    <div class="content mt-3">
                        <h4 class="title mb-0">EMAIL</h4>
                        <small class="text-muted">(Senin - Jumat, Pukul 10.00 - 16.00 Waktu Setempat)</small>
                        <small>Staff Kantor Kepala Desa</small> <br>
                        <a class="btn btn-square btn-black rounded-circle me-2" href=""><i class="fa-regular fa-envelope"></i>    kantorkepaladesabalige2@gmail.com</a> <br>
                        <small>Kepala Desa Balige II</small>
                        <a class="btn btn-square btn-black rounded-circle me-2" href=""><i class="fa-regular fa-envelope"></i>    kimbebpaff@gmail.com</a> <br>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        
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

