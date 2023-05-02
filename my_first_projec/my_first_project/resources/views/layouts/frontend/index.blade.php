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

</head>

<body>


<!-- Navbar Start -->
@include('layouts.frontend.body.header')


    <!-- Utama Start -->
    <div class="bg-image" style="background-image: url('{{asset('FRONTEND')}}/assets/Foto/6307296.jpg'); background-repeat: no-repeat; background-size: cover; height: 90vh;">
        <div class="text-container">
            <h1 class="animasi animasi_InDown">Selamat Datang di Website Resmi</h1>
            <p class="animasi animasi_InUp">Desa Balige II</p>
        </div>
    </div>
    <!-- Utama End -->

<br>
     <!-- Service Start -->
<div class="container-fluid-max py-5 bg-light">
      <div class="container">
        <div class="section-title mb-4 pb-2 py-2">
          <h1 class="title mb-4 text-center py-3">Desa Balige II</h1>
      </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
            <div class="profile-card-2"><img src="{{asset('FRONTEND')}}/assets/Foto/6307296.jpg" class="img img-responsive">
                <div class="profile-name">PROFILE</div>
                <div class="profile-username">Desa Balige II merupakan desa yang berada di kecamatan Balige, Toba.Yuk, Kenali kami secara dekat.</div>
            </div>  
        </div>
        
        <div class="col-md-4">
            <div class="profile-card-2"><img src="{{asset('FRONTEND')}}/assets/Foto/6307296.jpg" class="img img-responsive">
                <div class="profile-name">Hubungi Kami</div>
                <div class="profile-username">Hubungi Kami  jika kamu memiliki kendala di wilayah Balige II</div>
                <div class="profile-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
            </div> 
        </div>
                <div class="col-md-4">
                    <div class="profile-card-2"><img src="{{asset('FRONTEND')}}/assets/Foto/6307296.jpg" class="img img-responsive">
                        <div class="profile-name">Produk Desa</div>
                        <div class="profile-username">Mari Bersama - sama mengunjungi desa dan melihat produk-produk lokal yang mereka hasilkan </div>
                        <div class="profile-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
                    </div> 
        </div>
            </div>
        </div>
</div>
</div>
    <!-- Service End -->

    <!-- Berita Start -->

    <div class="container py-5">
        <div class=" text-black">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
              <h2 class="py-3">Berita</h2>
              <a href="#" class="fs-12">See All</a>
            </div>
            <div class="news-item d-flex align-items-center">
                <div class="news-image">
                    <img src="assets/Foto/6307296.jpg" alt="thumb" class="rounded news-image__img" />
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
                    <img src="assets/Foto/6307296.jpg" alt="thumb" class="rounded news-image__img" />
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
                <img src="assets/Foto/6307296.jpg" alt="thumb" class="rounded news-image__img" />
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


        <!-- Pemerintahan Stard -->
     <div class="container-fluid-max bg-light py-4">
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
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="team text-center rounded p-3 py-4">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="200px" class="img-fluid avatar avatar-medium shadow rounded-pill" alt="">
                        <div class="content mt-3">
                            <h4 class="title mb-0">Lisa Martin</h4>
                            <small class="text-muted">Kepala Desa</small>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="team text-center rounded p-3 py-4">
                        <img src="https://bootdey.com/img/Content/avatar/avatar8.png" width="200px" class="img-fluid avatar avatar-medium shadow rounded-pill" alt="">
                        <div class="content mt-3">
                            <h4 class="title mb-0">Calvin Carlo</h4>
                            <small class="text-muted">Seketaris Desa</small>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="team text-center rounded p-3 py-4">
                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" width="200px" class="img-fluid avatar avatar-medium shadow rounded-pill" alt="">
                        <div class="content mt-3">
                            <h4 class="title mb-0">Richha Jotchi</h4>
                            <small class="text-muted">Ketua KPD</small>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
    
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="team text-center rounded p-3 py-4">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="200px" class="img-fluid avatar avatar-medium shadow rounded-pill" alt="">
                        <div class="content mt-3">
                            <h4 class="title mb-0">Lisa Martin</h4>
                            <small class="text-muted">Anonim</small>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="team text-center rounded p-3 py-4">
                        <img src="https://bootdey.com/img/Content/avatar/avatar8.png" width="200px" class="img-fluid avatar avatar-medium shadow rounded-pill" alt="">
                        <div class="content mt-3">
                            <h4 class="title mb-0">Calvin Carlo</h4>
                            <small class="text-muted">Anonim</small>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="team text-center rounded p-3 py-4">
                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" width="200px" class="img-fluid avatar avatar-medium shadow rounded-pill" alt="">
                        <div class="content mt-3">
                            <h4 class="title mb-0">Richha Jotchi</h4>
                            <small class="text-muted">Anonim</small>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div>
        </div>

        <!-- Pemerintahan End -->



<!-- Testimonial Start -->

<div class="slider-1">
    <div class="container">
        <h1 class="text-center">Kata Mereka</h1>
        <hr class="divider" />
        <div class="row">
            <div class="col-lg-12">

                <!-- Card Slider -->
                <div class="slider-container bg-light py-lg-5">
                    <div class="swiper-container card-slider">
                        <div class="swiper-wrapper">
                            
                            <!-- Slide -->
                            <div class="swiper-slide">
                                <p class="testimonial-text">“Desa ini telah mengalami perbuahan yang sangat siknifikan”</p>
                                <div class="testimonial-author">Mr. Cikamput</div>
                            </div> 
                            <!-- end of slide -->
    
                            <!-- Slide -->
                            <div class="swiper-slide">
                                <p class="testimonial-text">“Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium placeat pariatur quidem numquam, non quae voluptas iure! Autem, nesciunt consectetur eligendi consequatur reprehenderit unde eum atque! Expedita exercitationem aspernatur delectus!”</p>
                                <div class="testimonial-author">John Spiker</div>
                            </div> 
                            <!-- end of slide -->
    
                            <!-- Slide -->
                            <div class="swiper-slide">
                                <p class="testimonial-text">“Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, distinctio quam illum praesentium, tenetur quae eveniet recusandae dolorum sint assumenda neque quo, error dolores hic earum nisi dolor animi eligendi?”</p>
                                <div class="testimonial-author">Stella Virtuoso</div>
                            </div> 
                            <!-- end of slide -->
    
                        </div> 
    
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <!-- end of add arrows -->
    
                    </div> 
                </div> 
                

            </div> 
        </div> 
    </div> 
</div>


<!-- Testimonial End -->
        
<div class="page-section bg-light py-5" id="contact">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 col-xl-6 text-center">
                <h2 class="mt-0">Komentar</h2>
                <hr class="divider" />
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
            <div class="col-lg-6">
                <form id="contactForm" >
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="nama" type="text" placeholder="Enter your name..." style="border-radius: 50px;" />
                        <label for="name">Nama</label>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="email" placeholder="name@example.com" style="border-radius: 50px;" />
                        <label for="email">Email</label>
                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" style="border-radius: 50px;" />
                        <label for="phone">No. Telepon</label>
                    </div>
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem ;border-radius: 50px;"></textarea>
                        <label for="message">Pesan</label>
                    </div>
                    
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary" id="submitButton" type="submit" style="padding: 10px 20px; font-size: 15px; border-radius: 50px;">Kirim</button>
                      </div>                      
                </form>
            </div>
        </div>
    </div>
</div>


@include('layouts.frontend.body.footer')
<!-- Footer End -->



    <!-- JAVASCRIPT FILES -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{asset('FRONTEND')}}/js/swiper.min.js"></script>
    <script src="{{asset('FRONTEND')}}/js/animasi.js"></script>
    <script src="{{asset('FRONTEND')}}/js/jquery.min.js"></script>
    <script src="{{asset('FRONTEND')}}/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('FRONTEND')}}/js/custom.js"></script>

</body>

</html>



<!-- Footer nya masih bermaslaah (Belum responsive) -->
<!-- Bagian berita belum responsive -->