@extends('layouts.backend.main')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                Form Edit Berita
            </div>
            <div class="card-body">
                <form action="{{url('/Berita/update/gambar/'.$berita->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="old_image" value="{{$berita->brand_image}}">
                    <div class="form-group">
                      <div class="input-wrapper">
                      <label for="exampleInputEmail1">Judul Berita</label>
                      <div class="input-group">
                        <input type="text" name="judul_berita" class="form-control"  placeholder="Masukkan Nama" value="{{$berita->judul_berita}}">
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
                        <label for="exampleInputEmail1">Deskripsi Berita</label>
                        <textarea name="isi_berita" id="summernote" class="form-control" rows="10" cols="50" placeholder="Masukkan Deskripsi">{{$berita->isi_berita ?? ''}}</textarea>
                        @error('isi_berita')  
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <div class="input-wrapper">
                        <label for="exampleInputEmail1">Gambar</label>
                        <div class="input-group">
                          <input type="file" name="brand_image" class="form-control" placeholder="Masukkan Alamat" value="{{$berita->brand_image}}">
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
                      <label for="exampleInputEmail1">Kategori</label>
                      <select name="category_id" class="form-control">
                        <option value="" disabled selected hidden>Masukkan Category Berita</option>
                          @foreach($categorys as $item)
                          <option value="{{$item->id}}" {{ $item->id == $berita->category_id ? 'selected' : '' }}>
                              {{$item->category_name}}
                          </option>
                          @endforeach
                      </select>
                  </div>
                    <div class="form-group">
                        <img src="{{asset($berita->brand_image)}}" style="height:200px; width:300px;" alt="">
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