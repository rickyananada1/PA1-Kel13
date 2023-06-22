@extends('layouts.backend.main')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                Form Edit Kategori Pengumuman
            </div>
            <div class="card-body">
                @if(session('success'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{session('success')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <form action="{{url('/Pengumuman/update/'.$pengumuman->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="input-wrapper">
                        <label for="exampleInputEmail1">Judul</label>
                        <div class="input-group">
                            <input type="text" name="judul" class="form-control" placeholder="Masukkan Nama" value="{{$pengumuman->judul}}">
                        <div class="input-group-append">
                          <span class="input-group-text" style="color: red;">*</span>
                      </div>
                    </div>
                        @error('judul')  
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Deskripsi Pengumuman</label>
                        <textarea name="isi_pengumuman" id="summernote" class="form-control" rows="10" cols="50" placeholder="Masukkan Deskripsi">{{$pengumuman->isi_pengumuman ?? ''}}</textarea>
                        @error('isi_pengumuman')  
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<br>
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
