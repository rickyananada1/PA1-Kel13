<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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

    <link rel="stylesheet" href="{{asset('FRONTEND')}}/css/frontend.css">

    <link rel="stylesheet" href="{{asset('FRONTEND')}}/lib/animate/animate.css">

    <link rel="stylesheet" href="{{asset('FRONTEND')}}/lib/owlcarousel/assets/owl.carousel.min.css">

    <link rel="stylesheet" href="{{asset('FRONTEND')}}/lib/animate/animate.min.css">    
   
    <link rel="stylesheet" href="{{asset('FRONTEND')}}/lib/animate.min.css">    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    <style>

.zoom-img {
  transition: transform 0.3s ease;
}

.zoom-img:hover {
  transform: scale(1.1);
}

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
    

    .fixed-image {
    position: fixed;
    right: 15px;
    bottom: 15px;
    width: 200px;
    height: 100px; 
    z-index: 9999; 

    
  } 
  .card-body .card-text-group {
    font-size: 12px; /* Atur ukuran teks yang sesuai */
  }
  

</style>

</head>

<body>
@include('layouts.frontend.body.header')



<!-- Carousel Start -->
<div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
  <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
          <div class="carousel-item active">
              <img class="w-100 img-fluid" src="{{asset('FRONTEND')}}/assets/Foto/utama.jpg" alt="Image">
              <div class="carousel-caption">
                  <div class="container">
                      <div class="row justify-content-center">
                          <div class="col-lg-8">
                              <h3 class="display-1 text-white mb-5 animated slideInDown">Selamat Datang di Website Resmi</h3>
                              <img class="img-fluid animated slideInDown" src="{{asset('FRONTEND')}}/assets/Foto/logo.png" alt="">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="carousel-item">
              <img class="w-100 img-fluid" src="{{asset('FRONTEND')}}/assets/Foto/utama.jpg" alt="Image">
              <div class="carousel-caption">
                  <div class="container">
                      <div class="row justify-content-center">
                          <div class="col-lg-7">
                              <h1 class="display-1 text-white mb-5 animated slideInDown">#MenujuDesaMaju</h1>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
     
  </div>
</div>

<!-- Carousel End -->



    <!-- Feature Start -->
    <div class="container-fluid bg-light bg-icon my-5 py-6">
      <div class="container">
          <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
              <h1 class="display-5 mb-3 py-2">Desa Balige II</h1>
                <p>Menjelajahi Keindahan Sosial dan Budaya Desa Balige II</p>
            </div>
          <div class="row g-4">
              <div class="col-lg-4 col-md-6 wow fadeInUp " data-wow-delay="0.1s">
                  <div class="bg-white text-center h-100 p-4 p-xl-5">
                      <img class="img-fluid mb-4" src="{{asset('FRONTEND')}}/assets/Foto/500.png" alt="">
                      <h4 class="mb-3">Profile</h4>
                      <p class="mb-4">Desa Balige II merupakan desa yang berada di kecamatan Balige, Toba.Yuk, Kenali kami secara dekat.</p>
                      @foreach ($meta as $item)
                      @if ($item->meta_name === 'profile-desa')
                      <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="{{ route('halaman.desa', $item->meta_name) }}">Selanjutnya</a>
                      @endif
                      @endforeach
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                  <div class="bg-white text-center h-100 p-4 p-xl-5">
                      <img class="img-fluid mb-4" src="{{asset('FRONTEND')}}/assets/Foto/123.png" alt="">
                      <h4 class="mb-3">Hubungi Kami</h4>
                      <p class="mb-4">Hubungi Kami melalui informasi kontak yang tertera jika kamu memiliki kendala di wilayah Balige II</p>
                      @foreach ($meta as $item)
                      @if ($item->meta_name === 'kontak')
                      <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="{{ route('halaman.desa', $item->meta_name) }}">Selanjutnya</a>
                      @endif
                      @endforeach
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                  <div class="bg-white text-center h-100 p-4 p-xl-5">
                      <img class="img-fluid mb-4" src="{{asset('FRONTEND')}}/assets/Foto/3.png" alt="">
                      <h4 class="mb-3">Produk Desa</h4>
                      <p class="mb-4">Mari Bersama - sama mengunjungi desa dan melihat produk-produk lokal yang mereka hasilkan </p>
                      <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="{{route('index.produk')}}">Selanjutnya</a>
                  </div>
              </div>
          </div>
          <br>
      </div>
  </div>
  <!-- Feature End -->



<!-- Facts Start -->
<div class="container-fluid facts my-5 py-5" data-parallax="scroll" data-image-src="{{asset('FRONTEND')}}/assets/Foto/6307296.jpg">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-4 text-white" data-toggle="counter-up">{{ $kependudukan->count() }}</h1>
                <span class="fs-5 fw-semi-bold text-light">Jumlah Penduduk</span>
            </div>
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                <h1 class="display-4 text-white" data-toggle="counter-up">{{ $kependudukan->where('status', 'Kawin')->count() }}</h1>
                <span class="fs-5 fw-semi-bold text-light">Sudah Kawin</span>
            </div>
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                <h1 class="display-4 text-white" data-toggle="counter-up">{{ $kependudukan->where('hubungan','Kepala Keluarga')->count() }}</h1>
                <span class="fs-5 fw-semi-bold text-light">Kartu Keluarga</span>
            </div>
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
              <h1 class="display-4 text-white" data-toggle="counter-up">{{ $kependudukan->where('usia', '>=', 30)->count() }}</h1>
              <span class="fs-5 fw-semi-bold text-light">Orang Tua</span>
          </div>
        </div>
    </div>
</div>
<!-- Facts End -->


<!-- Desa Dalam Data  Start-->

<div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1>Desa Dalam Data</h1>
        <p>Sistem kami memungkinkan dalam melakukan pendataan secara tepat, akurat dan akuntabel. Diolah oleh tim pendata Desa kami.</p>
        <form method="GET">
            <button type="submit" class="btn-dark" formaction="{{ route('user.datadesa') }}">Lihat Semua Statistik</button>
          </form>
                </div>
      @php
    $sudahKawinCount = $kependudukan->where('status', 'Kawin')->count();
    $belumKawinCount = $kependudukan->where('status', 'Belum Kawin')->count();
@endphp
      <div class="col-md-6 d-flex align-items-center justify-content-center">
        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
    </div>
    </div>
  </div>
  

<!-- Desa Dalam Data  End-->


<hr>

<section class="pt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <h3 class="mb-3">Kabar Desa</h3>
        </div>
        <div class="col-6 text-right">
          <a class="btn btn-primaryx mb-3" href="#carouselExampleIndicators2" role="button" data-slide="next" style="float: right; margin-top: 12px;">
            <i class="fa fa-arrow-right"></i>
          </a>
          <a class="btn btn-primaryx mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev" style="float: right; margin-top: 12px; margin-right: 3px;">
            <i class="fa fa-arrow-left"></i>
          </a>

          <form method="GET">
            <button type="submit" class="btn-dark" style="float: right; margin-top: 15px; margin-right: 5px;" formaction="{{ route('halaman.pengumuman') }}"><i class="fas fa-bell">&nbsp;</i>Pengumuman</button>
          </form>

        </div>
  
        <div class="col-12">
          <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <?php
              $berita = $berita->sortByDesc('created_at');
              ?>
              @foreach($berita->chunk(3) as $index => $chunk)
              <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                <div class="row">
                  @foreach($chunk as $item)
                  <div class="col-md-4 mb-3">
                    <div class="card" style="border: none;">
                      <a href="{{route('isi_berita',$item->slug)}}">
                        <img class="img-fluid zoom-img" alt="Berita" src="{{$item->brand_image}}" style="object-fit: cover; width: 100%; height: 300px;">
                      </a>
                      <div class="card-body">
                        <div class="card-text-group" style="text-align: left;">
                          <i class="fas fa-user-shield"></i>
                        <p class="card-text" style="display: inline-block;">{{ $item->admin->jabatan }}</p>
                          <span>|</span>
                          <i class="fas fa-fw fa-clock"></i>
                          <p class="card-text" style="display: inline-block; margin-left: 5px; margin-right: 5px;">
                            <?php
                            $now = \Carbon\Carbon::now();
                            $created_at = \Carbon\Carbon::parse($item->created_at)->locale('id');
                            if ($created_at->diffInHours($now) < 24) {
                              echo $created_at->diffForHumans();
                            } else {
                              echo $created_at->format('d M Y');
                            }
                            ?>
                          </p>
                          <span>|</span>
                          <i class="fas fa-briefcase"></i>
                          <p class="card-text" style="display: inline-block; margin-left: 5px;">{{$item->categoryberita->category_name}}</p>
                        </div>
                        <h4><a href="{{route('isi_berita',$item->slug)}}">{{$item->judul_berita}}</a></h4>
                        </div>
                    </div>
                    </div>
                    @endforeach                        
                        </div>
                    </div>
                    @endforeach
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
  


<!-- Pemerintahan Start -->
<div class="container-fluid-max py-5 bg-light">
  <div class="container">
      <div class="row">
          <div class="col-12 text-center">
              <div class="section-title mb-4 pb-2">
                  <h1 class="title mb-4 wow fadeInDown" data-wow-delay="0.1s">Pemerintahan Desa</h1>
                  <p class="text-muted para-desc mx-auto mb-0">Berikut adalah para Aparatur desa</p>
              </div>
          </div>
      </div><!--end row-->

      <div class="row">
          @foreach ($strukturs as $item)
          <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
              <div class="team text-center rounded p-3 py-4">
                  <img src="{{$item->brand_image}}" class="img-fluid avatar avatar-medium shadow rounded-circle wow fadeInDown zoom-img" data-wow-delay="0.1s" style="object-fit: cover; width: 200px; height: 200px;" alt="">
                  <div class="content mt-3">
                      <h4 class="title mb-0 wow fadeInDown" data-wow-delay="0.1s">{{$item->nama}}</h4>
                      <small class="text-muted wow fadeInDown" data-wow-delay="0.1s">{{$item->jabatan}}</small>
                  </div>
              </div>
          </div>
          @if($loop->iteration % 3 == 0)
              </div><div class="row">
          @endif
          @endforeach<!--end col-->
      </div>
  </div>
</div>

<!-- Pemerintahan End  -->

<div class="container-xxl py-5">
    <div class="container">
        </div>
    </div>


  <div class="container">
    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
    <h1 class="display-5 mb-5">Galeri</h1>
  </div>
  <div class="site-section bg-left-half mb-5">
    <div class="container owl-2-style">
      <h2 class="text-primary py-2"></h2>
      <div class="owl-carousel owl-2">
        @foreach($galeris as $item)
          @php
          $images = json_decode($item->brand_image);
          @endphp
          <div class="media-29101">
            <a href="{{ route('isi_galeri', $item->slug) }}"><img src="{{ asset($images[0]) }}" alt="Image" style="object-fit: cover; width: 100%; height: 200px;" class="img-fluid zoom-img"></a>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>








<!-- Projects End -->
@include('layouts.frontend.body.footer')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
<script>
$(document).ready(function() {
  // Atur kecepatan transisi carousel menjadi 0.5 detik
  $('#carouselExampleIndicators').carousel({
    interval: 500
  });
});
</script>

<script>
    var xValues = ["Sudah Kawin", "Belum Kawin"];
    var yValues = [@json($sudahKawinCount), @json($belumKawinCount)];
    var barColors = ["#b91d47", "#00aba9"];
    
    new Chart("myChart", {
        type: "pie",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {
            title: {
                display: true,
                text: "Data Kependudukan (Sudah Kawin vs Belum Kawin)"
            }
        }
    });
</script>
   
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{asset('FRONTEND')}}/js/swiper.min.js"></script>

<script src="{{asset('FRONTEND')}}/js/animasi.js"></script>
<script src="{{asset('FRONTEND')}}/js/jquery.min.js"></script>
<script src="{{asset('FRONTEND')}}/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('FRONTEND')}}/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="{{asset('FRONTEND')}}/js/custom.js"></script>

</body>

</html>