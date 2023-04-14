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

            Selamat Datang 
            <table border="3">
                <tr>
                <th>No</th>
                <th>Category Name</th>
                <th>User ID</th>
                <th>Created At</th>
                </tr>
                @php($i = 1)
                @foreach($categories as $category)
                <tr> 
                <td>{{$categories->firstItem()+$loop->index}}</td>
                  <td>{{$category->category_name}}</td>
                  <td>{{$category->user_id}}</td>
                  <td>
                  @if($category->created_at==NULL)
                    <span class="text-danger">Tidak Ada Tanggal</span>
                  @else
                  {{Carbon\Carbon::parse($category->created_at)->diffForHumans()}}
                  @endif
                </td>
                </tr>
                @endforeach
            </table>
        
            {{$categories->links()  }}  
            <div class="col-md-4">
              
              <div class="card">
                
                @if(session('success'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>{{session('success')}}</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                @endif
                <div class="card-header">Add Category
                </div>
                <div class="card-body">
                  <form action="{{route('store.category')}}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="example">Category Name</label>
                      <input type="text" name="category_name" class="form-control">
                    </div>
                    @error('category_name')   
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    <button type="submit" class="btn btn-primary">Add Category</button>
                  </form>
                  
                </div>
                
                    </div>
                    
                </div>
                
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
<script src="{{asset('BACKEND')}}/assets/js/custom.js"></script>




  </body>
</html>

