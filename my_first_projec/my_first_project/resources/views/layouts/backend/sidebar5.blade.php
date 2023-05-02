<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin Balige ll</div>
    </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
       
    <li  class="has-sub active expand" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                aria-expanded="false" aria-controls="dashboard">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">Penduduk</span> <b class="caret"></b>
              </a>
              <ul  class="collapse show"  id="dashboard"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                  
                  
                    
                      <li  class="active" >
                        <a class="sidenav-item-link" href="{{route('user.penduduk')}}">
                          <span class="nav-text">Data Penduduk</span>
                          
                        </a>
                      </li>
                    
                  

                  
                  
                    
                      <li >
                        <a class="sidenav-item-link" href="{{route('hapus.penduduk')}}">
                          <span class="nav-text">Data Sampah Penduduk</span>
                          
                    
                          
                        </a>
                      </li>
                    
                  

                  
                </div>
              </ul>
            </li>
          

          

          
            <li class="has-sub active expand">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard1"
                aria-expanded="false" aria-controls="dashboard1">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">Galeri Desa</span> <b class="caret"></b>
              </a>
              <ul class="collapse show" id="dashboard1" data-parent="#sidebar-menu">
                <div class="sub-menu">
                  <li class="active">
                    <a class="sidenav-item-link" href="{{route('users.galeri')}}">
                      <span class="nav-text">Galeri</span>
                    </a>
                  </li>
                </div>
              </ul>
            </li>
            
          

          

          
            <li class="has-sub active expand">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard2"
                aria-expanded="false" aria-controls="dashboard2">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">Berita Desa</span> <b class="caret"></b>
              </a>
              <ul class="collapse show" id="dashboard2" data-parent="#sidebar-menu">
                <div class="sub-menu">
                  <li class="active">
                    <a class="sidenav-item-link" href="{{route('users.berita')}}">
                      <span class="nav-text">Berita</span>
                    </a>
                  </li>
                </div>
              </ul>
            </li>
          

            <li class="has-sub active expand">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard3"
                aria-expanded="false" aria-controls="dashboard3">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">Produk Desa</span> <b class="caret"></b>
              </a>
              <ul class="collapse show" id="dashboard3" data-parent="#sidebar-menu">
                <div class="sub-menu">
                  <li class="active">
                    <a class="sidenav-item-link" href="{{route('users.produk')}}">
                      <span class="nav-text">Produk</span>
                    </a>
                  </li>
                </div>
              </ul>
            </li>
            
            <li class="has-sub active expand">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard4"
                aria-expanded="false" aria-controls="dashboard4">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">Struktur Desa</span> <b class="caret"></b>
              </a>
              <ul class="collapse show" id="dashboard4" data-parent="#sidebar-menu">
                <div class="sub-menu">
                  <li class="active">
                    <a class="sidenav-item-link" href="{{route('users.struktur')}}">
                      <span class="nav-text">Struktur</span>
                    </a>
                  </li>
                </div>
              </ul>
            </li>



</ul>

