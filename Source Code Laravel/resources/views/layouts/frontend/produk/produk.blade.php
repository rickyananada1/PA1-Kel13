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

    <hr>

<div class="container py-1">
    <h1>Produk Desa</h1>
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
                    @foreach($categoryproduk as $item)
                    <option value="{{$item->category_name}}">{{$item->category_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="row" id="ads">
        @foreach($produks as $produk)
        @if($produk->category)
        <div class="col-md-4 mb-4 cardColumn" data-category="{{ $produk->category->category_name }}">
            <div class="card rounded">
                <div class="card-image">
                    <img class="card-img-top" src="{{asset($produk->brand_image)}}" style="height: 200px; object-fit: cover;" alt="Alternate Text" />
                </div>
                <div class="card-image-overlay m-auto py-1">
                    <span class="card-detail-badge"><i class="fas fa-user-shield"></i><p class="card-text" style="display: inline-block;">&nbsp;{{ $produk->jabatans->jabatan }}</p></span>
                    <span class="card-detail-badge">
                        <?php
                        $now = \Carbon\Carbon::now();
                        $created_at = \Carbon\Carbon::parse($produk->created_at)->locale('id');
                        if ($created_at->diffInHours($now) < 24) {
                            echo $created_at->diffForHumans();
                        } else {
                            echo $created_at->format('d M Y');
                        }
                        ?>
                    </span>
                    <span class="card-detail-badge">{{ $produk->category->category_name }}</span>
                </div>
                <div class="card-body text-center">
                    <div class="ad-title m-auto">
                        <h5>{{ $produk->judul_produk }}</h5>
                    </div>
                    <button type="button" style="border-radius: 30px 30px 30px 30px; color:white;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter{{ $produk->id }}">Lihat Deskripsi
                    </button>
    
                    {{-- Modals --}}
                    <div class="modal fade" id="exampleModalCenter{{ $produk->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">{{ $produk->judul_produk }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    {!! $produk->isi_produk !!}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary text-white" data-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
    
    <div class="col-md-12 no-results">
        <h3>Belum ada Produk Terbaru</h3>
    </div>
    
</div>


    @include('layouts.frontend.body.footer')
    

    <!-- JAVASCRIPT FILES -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{asset('FRONTEND')}}/js/swiper.min.js"></script>
    <script src="{{asset('FRONTEND')}}/js/animasi.js"></script>
    <script src="{{asset('FRONTEND')}}/js/jquery.min.js"></script>
    <script src="{{asset('FRONTEND')}}/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('FRONTEND')}}/js/custom.js"></script>

    <script>
        $(document).ready(function() {
            $('#searchInput, #categoryFilter').on('keyup change', function() {
                var searchText = $('#searchInput').val().toLowerCase();
                var selectedCategory = $('#categoryFilter').val().toLowerCase();

                $('.cardColumn').each(function() {
                    var cardText = $(this).text().toLowerCase();
                    var cardCategory = $(this).data('category').toLowerCase();

                    var matchesSearch = cardText.indexOf(searchText) > -1 || searchText === '';
                    var matchesCategory = cardCategory === selectedCategory || selectedCategory === 'all';

                    if (matchesSearch && matchesCategory) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });

                if ($('.cardColumn:visible').length === 0) {
                    $('.no-results').show();
                } else {
                    $('.no-results').hide();
                }
            });

            // Show "Belum ada Produk Terbaru" message if no products available
            if ($('.cardColumn:visible').length === 0) {
                $('.no-results').show();
            }
        });
    </script>

</body>

</html>
