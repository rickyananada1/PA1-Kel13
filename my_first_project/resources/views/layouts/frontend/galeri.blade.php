@include('layouts.frontend.body.header')
@php
$galeris = DB::table('galeris')->get();
@endphp
<div class="bg-light py-5">
    <div class="col-lg-8 col-xl-6 text-start">
        <h2 class="ms-sm-5">Galeri</h2>
        <hr style="height: 5px; width: 40px;  background-color: rgb(0, 255, 94); font-weight: bold; margin-left: 20px; margin-left: 75px;">
    </div>
    <div class="container">

        <div class="album py-5 bg-light">
            <div class="container">
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($galeris as $item)
                <div class="col">
                  <div class="card shadow-sm">
                    <img src="{{$item->brand_image}}" alt="">        
                    <div class="card-body">
                      <p class="card-text">{{$item->judul_galeri}}</p>
                      <p class="card-text">{{$item->deskripsi}}</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <button type="button" onclick="window.location.href='{{$item->brand_image}}'" class="btn btn-sm btn-outline-secondary">View</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
                  
                </div>
              </div>
            </div>
          </div>

        </div>
</div>










@include('layouts.frontend.body.footer')