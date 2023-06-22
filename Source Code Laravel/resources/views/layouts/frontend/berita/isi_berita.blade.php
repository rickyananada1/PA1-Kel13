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
  <link rel="stylesheet" href="{{asset('FRONTEND')}}/css/berita.css">
  <link rel="stylesheet" href="{{asset('FRONTEND')}}/css/swiper.css">
  <link rel="stylesheet" href="{{asset('FRONTEND')}}/css/animasi.css">
  <link rel="stylesheet" href="{{asset('FRONTEND')}}/css/responsive.css">

  <style>
      body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    #content {
    max-width: 800px; /* Adjust the maximum width as needed */
    margin: 0 auto; /* Center the container horizontally */
    padding: 20px; /* Add padding to create some space around the content */
    box-sizing: border-box; /* Include padding in the total width of the container */
  }
    footer {
      margin-top: auto;
      height: 100px; /* Ganti 100px dengan tinggi sebenarnya dari footer Anda */
    }

    .zoom-img {
      transition: transform 0.3s ease;
    }

    .zoom-img:hover {
      transform: scale(1.1);
    }
  </style>
</head>

<body>
  <!-- Header -->
  @include('layouts.frontend.body.header')


  <div class="container">
    <body class="single">

      <div class="col-9">
        <h2>{{$berita->judul_berita}}</h2>
      </div>
      <div class="category-date">
        <i class="fas fa-user-shield"></i>
        <p class="card-text" style="display: inline-block;">{{ $berita->admin->jabatan }}</p>
        &nbsp;
        <i class="fas fa-briefcase"></i>
        <a href="">{{$berita->categoryberita->category_name}}</a>
        &nbsp;
        <i class="fas fa-fw fa-clock"></i>
        <a><p class="card-text" style="display: inline-block; margin-left: 5px; margin-right: 5px;">
          <?php
          $now = \Carbon\Carbon::now();
          $created_at = \Carbon\Carbon::parse($berita->created_at)->locale('id');
          if ($created_at->diffInHours($now) < 24) {
              echo $created_at->diffForHumans();
          } else {
              echo $created_at->format('d M Y');
       }
      ?>
      </p></a>
      </div>
      <hr>
      <div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
        <div class="container paddding">
          <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
              <div id="content">
              <img src="{{ asset($berita->brand_image) }}" class="img-fluid center" style="width: 100%; height: 50%;">
              <p>{!!$berita->isi_berita!!}</p>
            </div>
          </div>
            <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
              <div>
                <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Berita Lainnya</div>
              </div>

              @foreach($categoryberita as $category)
              @foreach($category->berita->sortByDesc('created_at')->take(10) as $berita_lainnya)
              <div class="row pb-3">
                <div class="col-5 align-self-center">
                  <a href="{{ route('isi_berita',$berita_lainnya->slug) }}"><img src="{{ asset($berita_lainnya->brand_image) }}" alt="img" class="fh5co_most_trading zoom-img" style="width: 100%; height: 60px; object-fit: cover;"></a>
                </div>
                <div class="col-7 paddding">
                  <a href="{{ route('isi_berita',$berita_lainnya->slug) }}" class="card-link"><div class="most_fh5co_treding_font">{{ $berita_lainnya->judul_berita }}</div></a>
                  <div class="most_fh5co_treding_font_123">{{$berita->created_at->locale('id')->format('d F Y')}}</div>
                </div>
              </div>
              @endforeach
              @endforeach

              <div>
                <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Pengumuman</div>
              </div>
              <div class="clearfix"></div>
              <div class="fh5co_tags_all">
              <ul>
                @foreach($pengumuman as $announ)
                <li><a href="{{ route('isi_pengumumans',$announ->slug) }}">{{ $announ->judul }}</a></li>
                @endforeach
              </ul>
              </div>

              <div>
                <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Kategori</div>
              </div>
              <div class="clearfix"></div>
              <div class="fh5co_tags_all">
                @foreach($categoryberita as $category)
                <p class="fh5co_tagg">{{ $category->category_name }}</p>
                @endforeach
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    @include('layouts.frontend.body.footer')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    <!-- JAVASCRIPT FILES -->

</body>

</html>
