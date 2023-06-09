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
        <label for="exampleInputEmail1">Nama</label>
        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" value="{{$struktur->nama}}">
        @error('nama')  
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <div class="form-group">    
        <label for="exampleInputEmail1">Jabatan</label>
        <input type="text" name="jabatan" class="form-control" placeholder="Masukkan Jabatan" value="{{$struktur->jabatan}}">
        @error('jabatan')  
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Edit Gambar</label>
        <input type="file" name="brand_image" class="form-control" placeholder="Masukkan Alamat" value="{{$struktur->brand_image}}">
        @error('brand_image')  
        <span class="text-danger">{{$message}}</span>
        @enderror
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
