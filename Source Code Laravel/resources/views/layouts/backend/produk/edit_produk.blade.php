@extends('layouts.backend.main')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                Form Edit Produk
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
                <form action="{{url('/Produk/update/Produk/'.$produk->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="old_image" value="{{$produk->brand_image}}">
                    <div class="form-group">
                        <div class="input-wrapper">
                        <label for="exampleInputEmail1">Judul Gambar</label>
                        <div class="input-group">
                            <input type="text" name="judul_produk" class="form-control" placeholder="Masukkan Nama" value="{{$produk->judul_produk}}">
                        <div class="input-group-append">
                            <span class="input-group-text" style="color: red;">*</span>
                        </div>
                      </div>
                        @error('judul_produk')  
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Deskripsi Produk</label>
                        <textarea name="isi_produk" id="summernote" class="form-control" rows="10" cols="50" placeholder="Masukkan Deskripsi">{{$produk->isi_produk ?? ''}}</textarea>
                        @error('isi_produk')  
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <div class="input-wrapper">
                        <label for="exampleInputEmail1">Gambar</label>
                          <div class="input-group">
                            <input type="file" name="brand_image" class="form-control" placeholder="Masukkan Alamat" value="{{$produk->brand_image}}">
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
                            <option value="" disabled selected hidden>Masukkan Category Produk</option>
                            @foreach($category as $item)
                                <option value="{{$item->id}}" {{ $item->id == $produk->category_id ? 'selected' : '' }}>
                                    {{$item->category_name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <img src="{{asset($produk->brand_image)}}" style="height:200px; width:300px;" alt="">
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
  