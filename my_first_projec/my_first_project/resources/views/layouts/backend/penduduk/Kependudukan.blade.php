<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Sleek - Admin Dashboard Template</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />


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
</head>


<body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
  <script>
    NProgress.configure({ showSpinner: false });
    NProgress.start();
  </script>

  <div class="mobile-sticky-body-overlay"></div>

  <div class="wrapper">
    <!-- Left Sidebar -->
    @include('layouts.backend.sidebar')

    <div class="page-wrapper">
      <!-- Header -->
      @include('layouts.backend.header')

      <div class="content-wrapper">
        <br><br>
        @if(session('success'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>{{session('success')}}</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
        <div class="card-header">
          <h3>Data Penduduk</h3>
        </div>
        <a href="{{route('tambah.penduduk')}}" class="btn btn-success">Tambah +</a>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col" width="130px">id kependudukan</th>
              <th scope="col">nama</th>
              <th scope="col">status</th>
              <th scope="col">alamat</th>
              <th scope="col">date_of_birth</th>
              <th scope="col">Agama</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @php($i = 1)
            @foreach($kependudukan as $category)
            <tr>
              <th scope="row">{{$category->id_kependudukan}}</th>
              <td>{{$category->nama}}</td>
              <td>{{$category->status}}</td>
              <td>{{$category->alamat}}</td>
              <td>{{$category->date_of_birth}}</td>
              <td>{{$category->agama}}</td>
              <td>
                <a href="{{url('/Penduduk/edit/'.$category->id_kependudukan)}}" class="btn btn-info">Edit</a>
                <a href="{{url('/Penduduk/softdelete/'.$category->id_kependudukan)}}" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>

        {{$kependudukan->links()}}
      </div>
    </div>
  </div>
               
           


     

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('BACKEND')}}/assets/plugins/nprogress/nprogress.js"></script







  </body>
</html>
