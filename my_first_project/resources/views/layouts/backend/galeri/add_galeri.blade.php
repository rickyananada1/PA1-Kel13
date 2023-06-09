@extends('layouts.backend.main')

@section('content')

<div class="card">

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
            <div class="card-header">
              Form Tambah Data Galeri
            </div>
            <div class="card-body">
            <form action="{{route('add.gambar')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Judul Gambar</label>
                  <input type="text" name="judul_galeri" class="form-control"  placeholder="Masukkan Nama" value="">
                  @error('judul_galeri')  
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Gambar</label>
                  <input type="file" name="brand_image[]" class="form-control" placeholder="Masukkan Alamat" value="" multiple>
                  @error('brand_image')  
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
               <br><br>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
        </div>
        </div>
</div>
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