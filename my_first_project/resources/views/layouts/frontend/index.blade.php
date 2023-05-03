@include('layouts.frontend.body.header')
@php
    $strukturs = DB::table('strukturs')->get();
    $galeris = DB::table('galeris')->get();
@endphp
<!-- Carousel Start -->
<div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{asset('FRONTEND')}}/assets/Foto/utama.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <h3 class="display-1 text-white mb-5 animated slideInDown">Selamat Datang di Website Resmi</h3>
                                <img class="img-fluid animated slideInDown " src="{{asset('FRONTEND')}}/assets/Foto/logo.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{asset('FRONTEND')}}/assets/Foto/utama.jpg" alt="Image">
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


<!-- 3 Card Start  -->
<div class="container-fluid-max py-5 bg-light">
    <div class="container">
      <div class="section-title mb-4 pb-2 py-2">
        <h1 class="title mb-4 text-center py-3 wow fadeInDown" data-wow-delay="0.5s" id="judul3">Desa Balige II</h1>
    </div>
      <div class="container">
          <div class="row">
              <div class="col-md-4">
                  <div class="profile-card-2 wow fadeInUp" data-wow-delay="0.2s" onclick="window.location.href='profile-desa.html'"><img src="{{asset('FRONTEND')}}/assets/Foto/6307296.jpg" class="img img-responsive">
              <div class="profile-name">PROFILE</div>
              <div class="profile-username">Desa Balige II merupakan desa yang berada di kecamatan Balige, Toba.Yuk, Kenali kami secara dekat.</div>
          </div>  
      </div>
      
      <div class="col-md-4">
          <div class="profile-card-2 wow fadeInDown" data-wow-delay="0.3s" onclick="window.location.href='kontak.html'"><img src="{{asset('FRONTEND')}}/assets/Foto/6307296.jpg" class="img img-responsive">
              <div class="profile-name">Hubungi Kami</div>
              <div class="profile-username">Hubungi Kami  jika kamu memiliki kendala di wilayah Balige II</div>
              <div class="profile-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
          </div> 
      </div>
              <div class="col-md-4">
                  <div class="profile-card-2 wow fadeInUp" data-wow-delay="0.2s" onclick="window.location.href='produkdesa.html'"><img src="{{asset('FRONTEND')}}/assets/Foto/6307296.jpg" class="img img-responsive">
                      <div class="profile-name">Produk Desa</div>
                      <div class="profile-username">Mari Bersama - sama mengunjungi desa dan melihat produk-produk lokal yang mereka hasilkan </div>
                      <div class="profile-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
                  </div> 
      </div>
          </div>
      </div>
</div>
</div>
<!-- 3 Card End  -->



<!-- Facts Start -->
<div class="container-fluid facts my-5 py-5" data-parallax="scroll" data-image-src="{{asset('FRONTEND')}}/assets/Foto/6307296.jpg">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                <span class="fs-5 fw-semi-bold text-light">Jumlah Penduduk</span>
            </div>
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                <span class="fs-5 fw-semi-bold text-light">Pelajar</span>
            </div>
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                <span class="fs-5 fw-semi-bold text-light">Laki - Laki</span>
            </div>
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                <span class="fs-5 fw-semi-bold text-light">Perempuan</span>
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
        <button class="btn-dark">Lihat Semua Statistik</button>
      </div>
      <div class="col-md-6 d-flex align-items-center justify-content-center">
        <div id="piechart3d" style="max-width: 100%; height: 500px;"></div>
      </div>
    </div>
  </div>
  

<!-- Desa Dalam Data  End-->


<hr>


<!-- Weekly2-News start -->
<div class="weekly2-news-area pt-50 pb-30 gray-bg">
<div class="container">
    <div class="weekly2-wrapper">
        <div class="row">
            <!-- Banner -->
            <div class="col-lg-12">
                <div class="slider-wrapper">
                    <!-- section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="small-tittle mb-30">
                                <h1>Kabar Desa</h1>
                                <a href="" style="float:right;">Lihat Semua</a>
                            </div>
                        </div>
                    </div>
                                                                    
                    <!-- Slider -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="weekly2-news-active d-flex">
                                <!-- Single -->
                                <div class="weekly2-single">
                                    <div class="weekly2-img">
                                        <img src="{{asset('FRONTEND')}}/assets/Foto/6307296.jpg" alt="">
                                    </div>
                                    <div class="weekly2-caption">
                                        <h4><a href="#">Kabar Terbaru Desa Balige II,Balige</a></h4>
                                        <p>Togar  |  4 Jam Yang lalu</p>
                                    </div>
                                </div> 
                                <!-- Single -->
                                <div class="weekly2-single">
                                    <div class="weekly2-img">
                                        <img src="{{asset('FRONTEND')}}/assets/Foto/6307296.jpg" alt="">
                                    </div>
                                    <div class="weekly2-caption">
                                        <h4><a href="#">Kabar Terbaru Desa Balige II,Balige</a></h4>
                                        <p>Togar  |  4 Jam Yang lalu</p>
                                    </div>
                                </div> 
                                <!-- Single -->
                                <div class="weekly2-single">
                                    <div class="weekly2-img">
                                        <img src="{{asset('FRONTEND')}}/assets/Foto/6307296.jpg" alt="">
                                    </div>
                                    <div class="weekly2-caption">
                                        <h4><a href="#">Kabar Terbaru Desa Balige II,Balige</a></h4>
                                        <p>Togar  |  4 Jam Yang lalu</p>
                                    </div>
                                </div> 
                                <!-- Single -->
                                <div class="weekly2-single">
                                    <div class="weekly2-img">
                                        <img src="{{asset('FRONTEND')}}/assets/Foto/6307296.jpg" alt="">
                                    </div>
                                    <div class="weekly2-caption">
                                        <h4><a href="#">Kabar Terbaru Desa Balige II,Balige</a></h4>
                                        <p>Togar  |  4 Jam Yang lalu</p>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>           
<!-- End Weekly-News -->


<!-- Pemerintahan Start -->
<div class="container-fluid-max py-5 bg-light">
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <div class="section-title mb-4 pb-2">
                <h1 class="title mb-4">Pemerintahan Desa</h1>
                <p class="text-muted para-desc mx-auto mb-0">Berikut adalah para perangkat desa</p>
            </div>
        </div><!--end col-->
    </div><!--end row-->

    <div class="row">
        @foreach ($strukturs as $item)
        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
            <div class="team text-center rounded p-3 py-4">
                <img src="{{$item->brand_image}}" width="1000px" class="img-fluid avatar avatar-medium shadow rounded-pill" alt="">
                <div class="content mt-3">
                    <h4 class="title mb-0">{{$item->nama}}</h4>
                    <small class="text-muted">{{$item->jabatan}}</small>
                </div>
            </div>
        </div>
        @endforeach<!--end col-->
    </div>
</div>
</div>
<!-- Pemerintahan End  -->




<!-- Quote Start -->
<div class="container-fluid comment my-5 py-5" data-parallax="scroll" data-image-src="{{asset('FRONTEND')}}/assets/Foto/6307296.jpg">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="bg-white rounded p-4 p-sm-5 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-5 text-center mb-5">Berikan Komentar Anda</h1>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control bg-light border-0" id="gname" placeholder="Gurdian Name">
                                <label for="gname">Nama</label>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="email" class="form-control bg-light border-0" id="gmail" placeholder="Gurdian Email">
                                <label for="gmail">Email</label>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-floating">
                                <input type="text" class="form-control bg-light border-0" id="cname" placeholder="Child Name">
                                <label for="cname">Nomor Telephone</label>
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control bg-light border-0" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn btn-primary py-3 px-4" type="submit">Submit Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quote End -->


<!-- Galeri in Home -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-5 mb-5">Galeri</h1>
        </div>
        </div>
        <div class="row">

            @foreach ($galeris as $item)
            <div class="col-lg-3 col-md-4 col-xs-6 thumb rounded-top wow fadeInDown" data-wow-delay="0.2s">
                <a href="{{route('user.galeri')}}" class="fancybox" rel="ligthbox">
                    <img  src="{{$item->brand_image}}" class="zoom img-fluid "  alt="">
                   
                </a>
            </div>
            @endforeach                
       </div>

    </div>
</div>
<!-- Projects End -->
@include('layouts.frontend.body.footer')