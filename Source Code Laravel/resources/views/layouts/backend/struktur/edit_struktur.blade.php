@extends('layouts.backend.main')

@section('content')

<div class="row justify-content-center">
  <div class="col-lg-8 mx-auto">
    <div class="card">
      <div class="card-header">
        Form Edit Struktur Desa
    </div>
    <div class="card-body">
      <form action="{{url('/Struktur/update/Struktur/'.$struktur->id)}}" method="POST" enctype="multipart/form-data">
        @csrf


<div class="content-wrapper">
  <div class="container">
    @if(session('success'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>{{session('success')}}</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    <form action="{{url('/Struktur/update/Struktur/'.$struktur->id)}}" method="POST" enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="old_image" value="{{$struktur->brand_image}}">
      <div class="form-group">
        <div class="input-wrapper">
        <label for="exampleInputEmail1">Nama Lengkap</label>
        <div class="input-group">
          <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" value="{{$struktur->nama}}">
        <div class="input-group-append">
          <span class="input-group-text" style="color: red;">*</span>
      </div>
    </div>
        @error('nama')  
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
    </div>
    <div class="form-group">
      <div class="input-wrapper">
      <label for="exampleInputEmail1">Jabatan</label>
      <div class="input-group">
        <input type="text" name="jabatan" class="form-control" placeholder="Masukkan Jabatan" value="{{$struktur->jabatan}}">
      <div class="input-group-append">
        <span class="input-group-text" style="color: red;">*</span>
    </div>
  </div>
      @error('jabatan')  
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
  </div>
  <div class="form-group">
    <div class="input-wrapper">
    <label for="exampleInputEmail1">Gambar</label>
      <div class="input-group">
        <input type="file" name="brand_image" class="form-control" placeholder="Masukkan Alamat" value="{{$struktur->brand_image}}">
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
        <img src="{{asset($struktur->brand_image)}}" style="height:200px; width:300px;" alt="">
      </div>
      <br><br>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

@endsection
