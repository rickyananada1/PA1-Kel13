<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Desa Balige II</title>

    <!-- Favicon -->
    <link href="{{asset('FRONTEND')}}//assets/Foto/icon.png" rel="icon">

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

<div class="container">
    <div class="wrapper">
        <div class="logo-login">
            <img src="{{asset('FRONTEND')}}/assets/Foto/icon.png" alt="">
        </div>
        <div class="text-center mt-4 name">
            Perangkat Desa
        </div>
        <form method="POST" action="{{ route('login') }}" class="p-3 mt-3">
            @csrf
            <div class="form-floating mb-3">
                <input class="form-control"  type="email" placeholder="Masukkan Email Anda" name="email" style="border-radius: 50px;"/>
                <label for="name"> <span class="far fa-user"></span> Email</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" type="password" placeholder="Masukkan Password Anda" name="password" style="border-radius: 50px;" />
                <label for="name"><span class="fas fa-key"></span> password</label>
            </div>
            <button class="btn mt-3">Login</button>
        </form>
        <div class="text-center fst-italic fa-1x">
            <p>*Khusus Perangkat Desa! <a href="{{ route('user.desa') }}">kembali</a></p>
        </div>
    </div>
</div>



      <!-- JAVASCRIPT FILES -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="{{asset('FRONTEND')}}/js/swiper.min.js"></script>
  
      <script src="{{asset('FRONTEND')}}/js/click-srcoll.js"></script>
      <script src="{{asset('FRONTEND')}}/js/jquery.min.js"></script>
      <script src="{{asset('FRONTEND')}}/js/bootstrap.bundle.min.js"></script>
      <script src="{{asset('FRONTEND')}}/js/custom.js"></script>
  
  </body>
  
  </html>