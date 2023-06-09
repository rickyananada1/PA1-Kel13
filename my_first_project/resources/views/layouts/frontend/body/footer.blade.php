<style>
    .fixed-whatsapp:hover::before {
      content: "Hubungi Kami";
      display: block;
      position: absolute;
      background-color: green;
      color: white;
      padding: 5px 10px;
      border-radius: 5px;
      bottom: 100%;
      left: 50%;
      transform: translateX(-50%);
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
                @foreach ($categoryproduk as $item)
                <a class="btn btn-link" href="{{url('/Produk/Category/'.$item->category_name )}}">{{$item->category_name}}</a>
                @endforeach
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Informasi</h4>
            <a class="btn btn-link" href="">Berita</a>
            <a class="btn btn-link" href="">Pengumuman</a>
            <a class="btn btn-link" href="">Event</a>
                <div class="position-relative w-100">
                </div>
            </div>
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
<!-- Copyright End -->


<!-- Back to Top -->
{{-- <a class='fixed-whatsapp' href='https://wa.me/6282166284048?text=Hai%20Saya%20Kepala%20Desa%20Balige%20II' rel='nofollow noopener' target='_blank' title='Whatsapp'>
 --}}

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



{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
      var whatsappLink = document.createElement('a');
      whatsappLink.className = 'fixed-whatsapp';
      whatsappLink.href = 'https://wa.me/6282166284048?text=Hai%20Saya%20Kepala%20Desa%20Balige%20II';
      whatsappLink.setAttribute('rel', 'nofollow noopener');
      whatsappLink.setAttribute('target', '_blank');
      whatsappLink.setAttribute('title', 'WhatsApp');
      document.body.appendChild(whatsappLink);
    });
  </script> --}}


</body>

</html>