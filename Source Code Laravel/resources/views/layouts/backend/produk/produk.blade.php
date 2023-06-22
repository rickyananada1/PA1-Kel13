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
        <h3>Produk</h3>
        <a href="{{route('add.produk')}}" class="btn btn- btn-outline-light">Tambah +</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama Produk</th>
                        <th class="text-center" width="130px">Gambar</th>
                        <th class="text-center">Deskripsi</th>
                        <th class="text-center">Kategori</th>
                        <th class="text-center">Dibuat Pada</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if($produk->isEmpty())
                    <tr>
                        <td colspan="8" class="text-center">Data Kosong</td>
                    </tr>
                    @else
                    @php($i = 1)
                    @foreach($produk as $category)
                    <tr>
                        <td class="text-center">{{$produk->firstItem() + $loop->index}}</td>
                        <td class="text-center">{{$category->judul_produk}}</td>
                        <td class="text-center"><img src="{{asset($category->brand_image)}}" style="height:200px; width:300px;" alt=""></td>
                        <td class="text-center">{!! Illuminate\Support\Str::limit(strip_tags($category->isi_produk), 30) !!}</td>
                        <td>
                            @if($category->category)
                                {{$category->category->category_name}}
                            @else
                                Tidak ada Kategori
                            @endif
                        </td>
                        <td class="text-center">
                            @if($category->created_at==NULL)
                            <span class="text-danger">Tidak Ada Tanggal</span>
                            @else
                            {{Carbon\Carbon::parse($category->created_at)->diffForHumans()}}
                            @endif
                        </td>
                        <td class="text-center">
                            <a href="{{url('/Produk/edit/Produk/'.$category->id)}}" class="btn btn-info">Edit</a>
                            <a href="{{url('/Produk/deletes/'.$category->id)}}" onclick="return confirm('Kamu Yakin Data akan dihapus')" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </table>
        </div>
                {{$produk->links()}}
            </div>
        </div>
    </div>
</div>
@endsection
