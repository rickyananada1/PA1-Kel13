<head>
    <link href="{{asset('FRONTEND')}}/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="{{asset('FRONTEND')}}/css/style.css">

    <link rel="stylesheet" href="{{asset('FRONTEND')}}/css/swiper.css">

    <link rel="stylesheet" href="{{asset('FRONTEND')}}/css/animasi.css">

    <link rel="stylesheet" href="{{asset('FRONTEND')}}/css/responsive.css">

</head>
<div class="container">
    <div class="wrapper">
        <div class="logo-login text-center">
            <img src="{{asset('FRONTEND')}}/assets/Foto/logo.png" width="300" alt="">
        </div>
        <div class="text-center mt-4 name">
            Perangkat Desa
        </div>
          <form method="POST" action="{{ route('login') }}">
        @csrf
            <div class="form-floating mb-3">
                <input class="form-control" id="email" type="email" name="email" placeholder="Masukkan Username Anda" style="border-radius: 50px;" :value="__('Email')"/>
                <label for="name"> <span class="far fa-user"></span> Email</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="password"  type="password" name="password" required autocomplete="current-password" placeholder="Masukkan Password Anda" style="border-radius: 50px;" :value="__('Password')"/>
                <label for="name"><span class="fas fa-key"></span> password</label>
            </div>
            <button class="btn mt-3">{{ __('Log in') }}</button>
        </form>
        <div class="text-center fst-italic fa-1x">
            <p>*Khusus Perangkat Desa! <a href="{{url('/')}}">kembali</a></p>
        </div>
    </div>
</div>
