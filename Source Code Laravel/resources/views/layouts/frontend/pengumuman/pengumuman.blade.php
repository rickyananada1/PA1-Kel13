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

    <div class="container">
        <h1>Pengumuman</h1>
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="form-group">
                    <input type="text" id="searchInput" class="form-control" style="width: 100%" placeholder="Search">
                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-body">
                @if (count($pengumuman) === 0)
                <div class="no-results">Pengumuman tidak ada</div>
                @endif
                @foreach ($pengumuman as $item)
                <div class="border p-3 mb-3">
                    <h3 class="mb-3"><a href="{{ route('isi_pengumumans', $item->slug) }}">{{ $item->judul }}</a></h3>
                    <div class="category-date">
                        <i class="fas fa-user-shield"></i>
                        <span>|</span>
                        <i class="fas fa-fw fa-clock"></i>
                        <a>
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
                        </a>
                    </div>
                    <div class="col-12">
                        {!!str_word_count(strip_tags($item->isi_pengumuman)) > 50 ? implode(' ', array_slice(str_word_count(strip_tags($item->isi_pengumuman), 1), 0, 50)) . '...' : $item->isi_pengumuman!!} <a href="{{ route('isi_pengumumans', $item->slug) }}">Selanjutnya</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    @include('layouts.frontend.body.footer')

    <!-- JS FILES -->
    <script src="{{asset('FRONTEND')}}/js/jquery.min.js"></script>
    <script src="{{asset('FRONTEND')}}/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('FRONTEND')}}/js/swiper.min.js"></script>
    <script src="{{asset('FRONTEND')}}/js/jquery.ajaxchimp.min.js"></script>
    <script src="{{asset('FRONTEND')}}/js/counterup.min.js"></script>
    <script src="{{asset('FRONTEND')}}/js/jquery.waypoints.min.js"></script>
    <script src="{{asset('FRONTEND')}}/js/custom.js"></script>
    <script>
        $(document).ready(function() {
            // Menyimpan semua pengumuman pada saat halaman dimuat
            var allPengumuman = $('.border');

            // Menggunakan event input untuk melakukan pencarian secara real-time saat pengguna mengetikkan sesuatu
            $('#searchInput').on('input', function() {
                var searchValue = $(this).val().toLowerCase(); // Mendapatkan nilai pencarian dalam format huruf kecil

                // Menyembunyikan semua pengumuman
                $('.border').hide();

                // Menampilkan pengumuman yang sesuai dengan kriteria pencarian
                var filteredPengumuman = allPengumuman.filter(function() {
                    return $(this).text().toLowerCase().indexOf(searchValue) > -1;
                });

                // Menyembunyikan "Pengumuman" section jika tidak ada hasil pencarian
                if (filteredPengumuman.length === 0) {
                    $('.card.mb-3').hide();
                    $('.no-results').show(); // Menampilkan teks "Pengumuman tidak ada"
                } else {
                    $('.card.mb-3').show();
                    $('.no-results').hide(); // Menyembunyikan teks "Pengumuman tidak ada" jika ada hasil pencarian
                }

                // Menampilkan pengumuman yang sesuai dengan kriteria pencarian dan menyembunyikan pengumuman yang tidak sesuai
                filteredPengumuman.show();
            });
        });
    </script>
</body>

</html>
