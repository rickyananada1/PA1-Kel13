@extends('layouts.backend.main')

@section('content')
<div class="card">
  <br><br>
      @if(session('success'))
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{ session('success') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif

      <div class="card-header">
        @isset($meta)
          Edit Halaman
        @else
          Tambah Halaman
        @endisset
      </div>
      <div class="card-body">
        <form action="{{ isset($meta) ? route('update.isi.meta', $meta->id) : route('add.isi.meta') }}" method="POST" enctype="multipart/form-data">
          @csrf
          @isset($meta)
            @method('PUT')
          @endisset
          <div class="form-group">
            <div class="input-wrapper">
            <label for="judul">Judul Halaman</label>
            <div class="input-group">
            <input type="text" name="judul" class="form-control" placeholder="Masukkan Judul" value="{{ isset($meta) ? $meta->judul : '' }}">
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
            <label for="deskripsi">Deskripsi Halaman</label>
            <textarea name="deskripsi" id="summernote" class="form-control" placeholder="Masukkan Deskripsi">{{ isset($meta) ? $meta->deskripsi : '' }}</textarea>
            @error('deskripsi')  
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <br><br>
          <button type="submit" class="btn btn-primary">{{ isset($meta) ? 'Update' : 'Submit' }}</button>
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
