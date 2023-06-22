@extends('layouts.backend.main')

@section('content')

        <div class="card">
            <div class="card-header">
                Form Edit Data
            </div>
            <div class="card-body">
                <form action="{{url('/Meta/update/Halaman/'.$meta->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="old_image" value="{{$meta->brand_image}}">
                    <div class="form-group">
                      <div class="input-wrapper">
                      <label for="judul">Judul Halaman</label>
                      <div class="input-group">
                        <input type="text" name="judul" class="form-control"  placeholder="Masukkan Nama" value="{{$meta->judul}}">
                      <div class="input-group-append">
                        <span class="input-group-text" style="color: red;">*</span>
                    </div>
                  </div>
                      @error('judul')  
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>  
                    <div class="form-group">
                        <label for="exampleInputEmail1">Deskripsi Gambar</label>
                        <textarea name="deskripsi" id="summernote" class="form-control" rows="10" cols="50" placeholder="Masukkan Deskripsi">{{$meta->deskripsi ?? ''}}</textarea>
                        @error('deskripsi')  
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
@endsection
@section('scripts')

<script>
  $(document).ready(function() {
    $('#summernote').summernote({
      placeholder: 'Masukkan Deskripsi',
      tabsize: 2,
      height: 1000
    });
  });
</script>
@endsection