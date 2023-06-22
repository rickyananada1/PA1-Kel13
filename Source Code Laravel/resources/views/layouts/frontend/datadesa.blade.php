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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>

<body>
    @include('layouts.frontend.body.header')


@include('layouts.frontend.datadesa.datajumlahpenduduk')

@include('layouts.frontend.datadesa.dataumur')

@include('layouts.frontend.datadesa.dataagama')

@include('layouts.frontend.datadesa.datajeniskelamin')

@include('layouts.frontend.datadesa.datajenisdarah')



@include('layouts.frontend.body.footer')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>


    

</body>










</html>    <!-- JAVASCRIPT FILES -->




<script src="{{asset('FRONTEND')}}/js/jquery.min.js"></script>
    <script src="{{asset('FRONTEND')}}/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('FRONTEND')}}/js/custom.js"></script>