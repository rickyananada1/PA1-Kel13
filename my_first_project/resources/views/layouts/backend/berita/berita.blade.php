<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Sleek - Admin Dashboard Template</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="{{asset('BACKEND')}}/assets/plugins/toaster/toastr.min.css" rel="stylesheet" />
  <link href="{{asset('BACKEND')}}/assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
  <link href="{{asset('BACKEND')}}/assets/plugins/flag-icons/css/flag-icon.min.css" rel="stylesheet"/>
  <link href="{{asset('BACKEND')}}/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
  <link href="{{asset('BACKEND')}}/assets/plugins/ladda/ladda.min.css" rel="stylesheet" />
  <link href="{{asset('BACKEND')}}/assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
  <link href="{{asset('BACKEND')}}/assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="{{asset('BACKEND')}}/assets/css/sleek.css" />

  

  <!-- FAVICON -->
  <link href="{{asset('BACKEND')}}/assets/img/favicon.png" rel="shortcut icon" />

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="{{asset('BACKEND')}}/assets/plugins/nprogress/nprogress.js"></script>
</head>


  <body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    <div class="mobile-sticky-body-overlay"></div>

    <div class="wrapper">
      
              <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
      @include('layouts.backend.sidebar')


      <div class="page-wrapper">
                  <!-- Header -->
      @include('layouts.backend.header')   


        <div class="content-wrapper">
            @if(session('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>{{session('success')}}</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif
            <div class="card-header"><h3>Berita</h3></div><br><br>
            <a href="{{route('add.berita')}}" class="btn btn-success">Tambah +</a>
            <table border="3">
                <tr>
                <th>No</th>
                <th>Judul Berita</th>
                <th width="130px">Gambar</th>
                <th>Deskripsi</th>
                <th>Created At</th>
                <th>Edit</th>
                </tr>
                @php($i = 1)
                @foreach($berita as $category)
                <tr> 
                <td>{{$berita->firstItem()+$loop->index}}</td>
                  <td>{{$category->judul_berita}}</td>
                  <td><img src="{{asset($category->brand_image)}}" style="height:200px; width:300px;" alt=""></td>
                  <td>{{$category->isi_berita}}</td>
                  <td>
                  @if($category->created_at==NULL)
                    <span class="text-danger">Tidak Ada Tanggal</span>
                  @else
                  {{Carbon\Carbon::parse($category->created_at)->diffForHumans()}}
                  @endif
                </td>
                <td>
                  <a href="{{url('/Berita/edit/berita/'.$category->id )}}" class="btn btn-info">Edit</a>
                  <a href="{{url('/Berita/deletes/'.$category->id )}}" onclick="return confirm('Kamu Yakin Data akan dihapus')" class="btn btn-danger">Delete</a>
                </td>
                </tr>
                @endforeach
            </table>
        
            {{$berita->links()  }}  
       
              
          
           


     

              @include('layouts.backend.footer')

      </div>
    </div>

    
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
<script src="{{asset('BACKEND')}}/assets/plugins/jquery/jquery.min.js"></script>
<script src="{{asset('BACKEND')}}/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('BACKEND')}}/assets/plugins/toaster/toastr.min.js"></script>
<script src="{{asset('BACKEND')}}/assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
<script src="{{asset('BACKEND')}}/assets/plugins/charts/Chart.min.js"></script>
<script src="{{asset('BACKEND')}}/assets/plugins/ladda/spin.min.js"></script>
<script src="{{asset('BACKEND')}}/assets/plugins/ladda/ladda.min.js"></script>
<script src="{{asset('BACKEND')}}/assets/plugins/jquery-mask-input/jquery.mask.min.js"></script>
<script src="{{asset('BACKEND')}}/assets/plugins/select2/js/select2.min.js"></script>
<script src="{{asset('BACKEND')}}/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="{{asset('BACKEND')}}/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
<script src="{{asset('BACKEND')}}/assets/plugins/daterangepicker/moment.min.js"></script>
<script src="{{asset('BACKEND')}}/assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="{{asset('BACKEND')}}/assets/plugins/jekyll-search.min.js"></script>
<script src="{{asset('BACKEND')}}/assets/js/sleek.js"></script>
<script src="{{asset('BACKEND')}}/assets/js/chart.js"></script>
<script src="{{asset('BACKEND')}}/assets/js/date-range.js"></script>
<script src="{{asset('BACKEND')}}/assets/js/map.js"></script>
<script src="{{asset('BACKEND')}}/assets/js/custom.js"></script>




  </body>
</html>
