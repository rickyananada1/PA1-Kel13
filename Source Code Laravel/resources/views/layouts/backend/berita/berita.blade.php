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

  <h3>Berita</h3>

  <a href="{{route('add.berita')}}" class="btn btn- btn-outline-light">Tambah +</a>
</div>
<div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered">
      <tr>
        <th class="text-center">No</th>
        <th class="text-center"width="160px">Judul Berita</th>
        <th class="text-center" width="130px">Gambar</th>
        <th class="text-center">Deskripsi</th>
        <th class="text-center">Kategori</th>
        <th class="text-center">Dibuat Pada</th>
        <th class="text-center">Aksi</th>
      </tr>
      @if($berita->isEmpty())
      <tr>
          <td colspan="8" class="text-center">Data Kosong</td>
      </tr>
  @else
      @php($i = 1)
      @foreach($berita as $category)
        <tr> 
          <td class="text-center">{{$berita->firstItem()+$loop->index}}</td>
          <td class="text-center">{{$category->judul_berita}}</td>
          <td class="text-center"><img src="{{asset($category->brand_image)}}" style="height:200px; width:300px;" alt=""></td>
          <td class="text-center">{!! Illuminate\Support\Str::limit(strip_tags($category->isi_berita), 30) !!}</td>
          <td>@if($category->categoryberita)
            {{$category->categoryberita->category_name}}
          @else
            Category Deleted
          @endif</td>
          <td class="text-center">
            @if($category->created_at==NULL)
              <span class="text-danger">Tidak Ada Tanggal</span>
            @else
              {{Carbon\Carbon::parse($category->created_at)->diffForHumans()}}
            @endif
          </td>
          <td class="text-center">
            <div class="d-flex justify-content-between align-items-center">
                <div class="mr-2">
                    <a href="{{ url('/Berita/edit/berita/'.$category->id) }}" class="btn btn-info">Edit</a>
                </div>
                <div>
                    <a href="{{ url('/Berita/deletes/'.$category->id) }}" onclick="return confirm('Kamu Yakin Data akan dihapus')" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </td>
        
        </tr>
      @endforeach
      @endif
    </table>
  </div>
    {{$berita->links()  }}  
  </div>
</div>
@endsection
