<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Halaman</title>
    
    <style>
      .fixed-whatsapp {
  position: fixed;
  bottom: 20px;
  right: 20px;
  z-index: 9999;
}

.fixed-whatsapp a img {
  width: 300px;
  height: 100px;
}

    </style>
      
     <!-- Footer Start -->
     
     <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Balige II,Balige,Toba,Sumut</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 4883948 323</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>desabaligeII@gmail.com</p>
                
            </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Desa Balige II</h4>
                <a class="btn btn-link" href="{{ route('user.datadesa') }}">Data Penduduk</a>
                @foreach ($meta as $item)      
                <a class="btn btn-link" href="{{ route('halaman.desa', $item->meta_name) }}">{{ $item->judul }}</a>
            @endforeach
                <a class="btn btn-link" href="{{route('category_galeri')}}">Galeri</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Produk Desa</h4>
                    <a class="btn btn-link" href="{{route('index.produk')}}">Produk Desa</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Informasi</h4>
                <a class="btn btn-link" href="{{route('index.berita')}}">Berita</a>
                <a class="btn btn-link" href="{{ route('halaman.pengumuman') }}">Pengumuman</a>
                    <div class="position-relative w-100">
                    </div>
                </div>
            </div>
            
            <div class="fixed-whatsapp">
                <a href="https://wa.me/6281240417202">
                    <img src="{{asset('FRONTEND')}}/assets/Foto/tombol-wa.png" alt="">
                </a>
            </div>
    <!-- Footer End -->
    
    
    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Desa Balige II</a>, Bersama Memajukan Desa.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    Dev, Kel 13 PA I</a>
                </div>
            </div>
        </div>
    </div>
   
    
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('FRONTEND')}}/lib/wow/wow.min.js"></script>
    <script src="{{asset('FRONTEND')}}/lib/easing/easing.min.js"></script>
    <script src="{{asset('FRONTEND')}}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{asset('FRONTEND')}}/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{asset('FRONTEND')}}/lib/counterup/counterup.min.js"></script>
    <script src="{{asset('FRONTEND')}}/lib/parallax/parallax.min.js"></script>
    <script src="{{asset('FRONTEND')}}/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="{{asset('FRONTEND')}}/lib/lightbox/js/lightbox.min.js"></script>
    
    <!-- Pie chart -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!-- Template Javascript -->
    <script src="{{asset('FRONTEND')}}/js/main.js"></script>
    
    </body>
    
    </html>
