<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Balige II - Admin</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('BACKEND/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('BACKEND/asset/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    

    <style>
        /* Gaya untuk tabel */
        <style>
    .asterisk-red {
    color: red;
}
        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
        }
    
        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: middle;
            border-top: 1px solid #dee2e6;
        }
    
        .table th {
            font-weight: bold;
            text-align: center;
            background-color: #f8f9fa;
        }
    
        .table tbody tr:hover {
            background-color: #f8f9fa;
        }
    
        .table tbody td {
            text-align: center;
        }
    
        /* Gaya untuk tombol aksi */
        .btn {
            padding: 0.375rem 0.75rem;
            font-size: 0.875rem;
            line-height: 1.5;
            border-radius: 0.25rem;
        }
    
        .btn-success {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745;
        }
    
        .btn-info {
            color: #fff;
            background-color: #17a2b8;
            border-color: #17a2b8;
        }
    
        .btn-danger {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
        }
    
        /* Gaya untuk alert */
        .alert {
            position: relative;
            padding: 0.75rem 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: 0.25rem;
        }
    
        .alert-warning {
            color: #856404;
            background-color: #fff3cd;
            border-color: #ffeeba;
        }
    
        .close {
            float: right;
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1;
            color: #000;
            text-shadow: 0 1px 0 #fff;
            opacity: .5;
        }
    
    </style>

</head>



<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

      <!-- Sidebar -->
           
      @include('layouts.backend.sidebar')
 <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

          <!-- Main Content -->
          <div id="content">

@include('layouts.backend.header')

              <div class="container-fluid">

                <!-- Page Heading -->
                
                @auth
    <div class="container-fluid d-flex align-items-center justify-content-center" style="transform: translateY(250%);">
        <!-- Page Heading -->
        @if(Request::is('dashboard')) 
            <h1 class="text-center">
                <span id="greeting"></span>,
                <span>{{ Auth::user()->name }}</span>
                <br>
                Selamat datang di halaman Admin 
            </h1> 
        @endif
    </div>
@endauth



                @if(session()->has('message'))
<div class="alert alert-{{ session()->get('alert-type') }} alert-dismissible fade show" role="alert">
    {{ session()->get('message') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif




@yield('content')


                <!-- /.container-fluid -->

              </div>
              </div>
              <!-- End of Main Content -->
  
              <!-- End of Footer -->
  
          </div>
          <!-- End of Content Wrapper -->
  
      </div>
      <!-- End of Page Wrapper -->
  
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>
      </a>
  
      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                  </button>
              </div>
              <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
              <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="{{ route('logout') }}">Logout</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
          </div>
      </div>
  </div>
  
    
  <script>
    // Mendapatkan waktu saat ini dari komputer pengguna
    var currentTime = new Date();
    var currentHour = currentTime.getHours();
    
    // Menentukan salam berdasarkan waktu
    var greeting = '';
    if (currentHour < 12) {
        greeting = 'Selamat pagi';
    } else if (currentHour < 18) {
        greeting = 'Selamat siang';
    } else {
        greeting = 'Selamat malam';
    }
    
    // Menampilkan salam pada elemen dengan id "greeting"
    document.getElementById('greeting').innerText = greeting;






</script>


<!-- Bootstrap core JavaScript-->
<script src="{{ asset('BACKEND/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('BACKEND/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('BACKEND/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('BACKEND/js/sb-admin-2.min.js') }}"></script>

<!-- Page level plugins -->
<script src="{{ asset('BACKEND/vendor/chart.js/Chart.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('BACKEND/js/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('BACKEND/js/demo/chart-pie-demo.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
@yield('scripts')
  </body>
</html>
