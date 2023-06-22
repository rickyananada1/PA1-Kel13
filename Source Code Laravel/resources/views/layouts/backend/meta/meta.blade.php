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

  <h3>Halaman Desa</h3>

  <a href="{{route('add.meta')}}" class="btn btn- btn-outline-light">Tambah +</a>
</div>
<div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered">
      <tr>
        <th class="text-center">No</th>
        <th class="text-center"width="160px">Judul Halaman</th>
        <th class="text-center" width="130px">Isi Halaman</th>
        <th class="text-center">Dibuat Pada</th>
        <th class="text-center">Aksi</th>
      </tr>
      @if($meta->isEmpty())
      <tr>
          <td colspan="8" class="text-center">Data Kosong</td>
      </tr>
  @else
      @php($i = 1)
      @foreach($meta as $category)
        <tr> 
          <td class="text-center">{{$meta->firstItem()+$loop->index}}</td>
          <td class="text-center">{{$category->judul}}</td>
          <td class="text-center">{!! Illuminate\Support\Str::limit(strip_tags($category->deskripsi), 30) !!}</td>
          <td class="text-center">
            @if($category->created_at==NULL)
              <span class="text-danger">Tidak Ada Tanggal</span>
            @else
              {{Carbon\Carbon::parse($category->created_at)->diffForHumans()}}
            @endif
          </td>
          <td class="text-center">
            <a href="{{url('/Meta/edit/Halaman/'.$category->id )}}" class="btn btn-info">Edit</a>
            <a href="{{url('/Meta/deletes/Halaman/'.$category->id )}}" onclick="return confirm('Kamu Yakin Data akan dihapus')" class="btn btn-danger">Hapus</a>
          </td>
        </tr>
      @endforeach
      @endif
    </table>
  </div>
    {{$meta->links()  }}  
  </div>
</div>
@endsection
