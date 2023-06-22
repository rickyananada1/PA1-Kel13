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
        Form Berita
      </div>
      <div class="card-body">
        <form action="{{route('add.isiberita')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <div class="input-wrapper">
            <label for="exampleInputEmail1">Judul Berita</label>
            <div class="input-group">
            <input type="text" name="judul_berita" class="form-control" placeholder="Masukkan Nama" value="">
            <div class="input-group-append">
              <span class="input-group-text" style="color: red;">*</span>
          </div>
        </div>
            @error('judul_berita')  
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
        </div>
        <div class="form-group">
          <div class="input-wrapper">
          <label for="exampleInputEmail1">Gambar</label>
          <div class="input-group">
            <input type="file" name="brand_image" class="form-control" placeholder="Masukkan Alamat" value="">
          <div class="input-group-append">
            <span class="input-group-text" style="color: red;">*</span>
        </div>
      </div>
          @error('brand_image')  
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
        </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Deskripsi Berita</label>
            <textarea name="isi_berita" id="summernote" class="form-control" placeholder="Masukkan Deskripsi"></textarea>
            @error('isi_berita')  
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Kategori</label>
            <select name="category_id" class="form-control">
              <option value="" disabled selected hidden>Masukkan Category Berita</option>
              @foreach($categorys as $item)
              <option value="{{$item->id}}">{{$item->category_name}}</option>
              @endforeach
            </select>
          </div>
          <br><br>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
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
