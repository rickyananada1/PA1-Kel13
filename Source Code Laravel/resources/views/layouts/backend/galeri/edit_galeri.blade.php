@extends('layouts.backend.main')

@section('content')
<div class="row justify-content-center">
  <div class="col-lg-8 mx-auto">
    <div class="card">
      <div class="card-header">
        Form Edit Data
    </div>
    <div class="card-body">
      <form action="{{url('/Galeri/update/gambar/'.$galeri->id)}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="content-wrapper">
          <div class="container"><br><br>
            @if(session('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>{{session('success')}}</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif

            <div class="form-group">

                <input type="hidden" class="form-control" name="old_image" value="{{$galeri->brand_image}}">
                <div class="form-group">
                  <div class="input-wrapper">
                  <label for="exampleInputEmail1">Judul Gambar</label>
                  <div class="input-group">
                    <input type="text" name="judul_galeri" class="form-control"  placeholder="Masukkan Nama" value="{{$galeri->judul_galeri}}">
                  <div class="input-group-append">
                    <span class="input-group-text" style="color: red;">*</span>
                </div>
              </div>
                  @error('judul_galeri')  
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <div class="input-wrapper">
                <label for="exampleInputEmail1">Gambar</label>
                <div class="input-group">
                  <input type="file" name="brand_image[]" class="form-control" placeholder="Masukkan Alamat"   value="{{$galeri->brand_image}}" multiple="">
                <div class="input-group-append">
                  <span class="input-group-text" style="color: red;">*</span>
              </div>
            </div>
                @error('brand_image')  
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
            </div>
                @foreach(json_decode($galeri->brand_image) as $image)
    <input type="hidden" name="old_brand_image[]" value="{{$image}}">
    <img src="{{asset($image)}}" style="height:100px; width:200px;" alt="">
@endforeach
               <br><br>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
        </div>


      </div>
    </div>
  </div>
  <br>
</div> 
@endsection
@section('scripts')

<script>
  $(document).ready(function() {
    $('#summernote').summernote({
      placeholder: 'Masukkan Deskripsi',
      tabsize: 2,
      height: 200
    });
  });
</script>
@endsection
