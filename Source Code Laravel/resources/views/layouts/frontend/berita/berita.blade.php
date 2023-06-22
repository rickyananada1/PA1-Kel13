<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Desa Balige II</title>

    <!-- Favicon -->
    <link href="{{ asset('FRONTEND') }}/assets/Foto/icon.png" rel="icon">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- CSS FILES -->
    <link href="{{ asset('FRONTEND') }}/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('FRONTEND') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('FRONTEND') }}/css/swiper.css">
    <link rel="stylesheet" href="{{ asset('FRONTEND') }}/css/animasi.css">
    <link rel="stylesheet" href="{{ asset('FRONTEND') }}/css/responsive.css">

    <style>
        .no-results {
            display: none;
            margin-top: 60px;
            padding: 174px;
            text-align: center;
            font-size: 40px;
        }
    </style>
</head>

<body>
    @include('layouts.frontend.body.header')

    <div class="container py-1">
        <h1>Berita Desa</h1>
        <div class="row">
            <div class="col-md-10 mb-4">
                <div class="form-group">
                    <input type="text" id="searchInput" class="form-control" style="width: 100%" placeholder="Search">
                </div>
            </div>
            <div class="col-md-2 mb-4">
                <div class="form-group">
                    <select id="categoryFilter" class="form-control">
                        <option value="all">Kategori</option>
                        <option value="all">Semua</option>
                        @foreach($categoryberita as $item)
                        <option value="{{$item->category_name}}">{{$item->category_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="row" id="cardRow">
            @foreach($berita as $produk)
            @if($produk->categoryberita)
            <div class="col-md-4 mb-4 cardColumn" data-category="{{ $produk->categoryberita ? $produk->categoryberita->category_name : '' }}">
                <div class="card border-0">
                    <img src="{{ asset($produk->brand_image) }}" class="card-img-top zoom-img"
                        style="max-width: 100%; max-height: 200px; object-fit: cover;"
                        alt="{{ $produk->judul_berita }}">

                    <div class="card-body">
                        <div class="card-text-group" style="text-align: left;">
                            <i class="fas fa-user-shield"></i>
                            <p class="card-text" style="display: inline-block;">{{ $produk->admin->jabatan }}</p>
                            <span>|</span>
                            <i class="fas fa-fw fa-clock"></i>
                            <p class="card-text" style="display: inline-block; margin-left: 5px; margin-right: 5px;">
                                <?php
                                $now = \Carbon\Carbon::now();
                                $created_at = \Carbon\Carbon::parse($produk->created_at)->locale('id');
                                if ($created_at->diffInHours($now) < 24) {
                                    echo $created_at->diffForHumans();
                                } else {
                                    echo $created_at->format('d M Y');
                                }
                                ?>
                            </p>
                            <span>|</span>
                            <i class="fas fa-briefcase"></i>
                            <p class="card-text card-text-category" style="display: inline-block; margin-left: 5px;">
                                {{ $produk->categoryberita ? $produk->categoryberita->category_name : 'Tidak ada kategori' }}
                            </p>
                        </div>
                        <h4><a href="{{ route('isi_berita', $produk->slug) }}">{{ $produk->judul_berita }}</a></h4>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            <div class="col-md-12 no-results">
                <h3>Belum ada Berita Terbaru</h3>
            </div>
        </div>
    </div>


    @include('layouts.frontend.body.footer')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>


    <script>
        $('#searchInput').on('keyup', function() {
            filterResults();
        });

        $('#categoryFilter').on('change', function() {
            filterResults();
        });

        function filterResults() {
            var searchValue = $('#searchInput').val().toLowerCase();
            var selectedCategory = $('#categoryFilter').val().toLowerCase();

            $('.cardColumn').each(function() {
                var cardText = $(this).text().toLowerCase();
                var cardCategory = $(this).data('category').toLowerCase();

                if ((selectedCategory === 'all' || cardCategory === selectedCategory) && (cardText.indexOf(searchValue) > -1)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });

            if ($('.cardColumn:visible').length === 0) {
                $('.no-results').show(); // Show a message if no results found
            } else {
                $('.no-results').hide(); // Hide the message if there are results
            }
        }
    </script>
    <!-- JAVASCRIPT FILES -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('FRONTEND') }}/js/swiper.min.js"></script>
    <script src="{{ asset('FRONTEND') }}/js/animasi.js"></script>
    <script src="{{ asset('FRONTEND') }}/js/jquery.min.js"></script>
    <script src="{{ asset('FRONTEND') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('FRONTEND') }}/js/custom.js"></script>
</body>

</html>
