@extends('layouts.backend.main')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                Form Edit Data
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
                <form action="{{url('/Kode_keluarga/update/Keluarga/'.$category->kode_keluarga)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="input-wrapper">
                        <label for="exampleInputEmail1">Nama Kepala Keluarga</label>
                        <div class="input-group">
                        <input type="text" name="nama_kepala_keluarga" class="form-control" placeholder="Masukkan Nama" value="{{$category->nama_kepala_keluarga}}">
                        <div class="input-group-append">
                            <span class="input-group-text" style="color: red;">*</span>
                        </div>
                    </div>
                        @error('nama_kepala_keluarga')  
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                    <div class="form-group">
                        <div class="input-wrapper">
                        <label for="exampleInputEmail1">NIK Kepala Keluarga</label>
                        <div class="input-group">
                        <input type="text" name="kode_keluarga" class="form-control" placeholder="Masukkan Nama" value="{{$category->kode_keluarga}}">
                        <div class="input-group-append">
                            <span class="input-group-text" style="color: red;">*</span>
                        </div>
                    </div>
                        @error('kode_keluarga')  
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
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
