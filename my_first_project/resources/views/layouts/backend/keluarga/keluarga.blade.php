@extends('layouts.backend.main')

@section('content')
<div class="galeri">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center bg-primary text-white">
    @if(session('success'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{session('success')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
        <h3>Kode Keluarga</h3>
        <a href="{{route('kode.addkeluarga')}}" class="btn btn- btn-outline-light">Tambah +</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Kode keluarga</th>
                        <th class="text-center">Nama Kepala Keluarga</th>
                        <th class="text-center">Dibuat Pada</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if($kodekeluarga->isEmpty())
                    <tr>
                        <td colspan="8" class="text-center">Data Kosong</td>
                    </tr>
                    @else
                    @php($i = 1)
                    @foreach($kodekeluarga as $category)
                    <tr>
                        <td class="text-center">{{$kodekeluarga->firstItem() + $loop->index}}</td>
                        <td class="text-center">{{$category->kode_keluarga}}</td>
                        <td class="text-center">{{$category->nama_kepala_keluarga}}</td>
                        <td class="text-center">
                            @if($category->created_at==NULL)
                            <span class="text-danger">Tidak Ada Tanggal</span>
                            @else
                            {{Carbon\Carbon::parse($category->created_at)->diffForHumans()}}
                            @endif
                        </td>
                        <td class="text-center">
                            <a href="{{url('/Kode_keluarga/edit/Keluarga/'.$category->kode_keluarga)}}" class="btn btn-info">Edit</a>
                            <a href="{{url('/Kode_keluarga/deletes/Keluarga/'.$category->kode_keluarga)}}" onclick="return confirm('Kamu Yakin Data akan dihapus')" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </table>
        </div>
                {{$kodekeluarga->links()}}
            </div>
        </div>
    </div>
</div>
@endsection
