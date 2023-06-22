@extends('layouts.backend.main')

@section('content')
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

        <h3>Struktur Perangkat Desa</h3>
        <a href="{{route('add.struktur')}}" class="btn btn- btn-outline-light">Tambah +</a>
    </div>

    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Nama Lengkap</th>
                <th class="text-center" width="130px">Gambar</th>
                <th class="text-center">Jabatan</th>
                <th class="text-center">Dibuat Pada</th>
                <th class="text-center">Edit</th>
            </tr>

            @if($struktur->isEmpty())
            <tr>
                <td colspan="6" class="text-center">Data Kosong</td>
            </tr>
            @else

            @php($i = 1)
            @foreach($struktur as $category)
            <tr>
                <td class="text-center">{{$struktur->firstItem()+$loop->index}}</td>
                <td class="text-center">{{$category->nama}}</td>
                <td class="text-center"><img src="{{asset($category->brand_image)}}" style="height:200px; width:300px;" alt=""></td>
                <td class="text-center">{{$category->jabatan}}</td>
                <td class="text-center">
                    @if($category->created_at==NULL)
                    <span class="text-danger">Tidak Ada Tanggal</span>
                    @else
                    {{Carbon\Carbon::parse($category->created_at)->diffForHumans()}}
                    @endif
                </td>
                <td>
                    <a href="{{url('/Struktur/edit/Struktur/'.$category->id)}}" class="btn btn-info">Edit</a>
                    <a href="{{url('/Struktur/deletes/'.$category->id)}}" onclick="return confirm('Kamu Yakin Data akan dihapus')" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            @endforeach
            @endif
        </table>

        {{$struktur->links()}}
    </div>
</div>

@endsection
