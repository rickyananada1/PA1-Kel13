@extends('layouts.backend.main')

@section('content')

<div class="card">
    @if(session('success'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{session('success')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="card-header">
        Data Sampah Penduduk
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Nama Lengkap</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">Tanggal Lahir</th>
                    <th class="text-center">Agama</th>
                    <th class="text-center">Jenis Kelamin</th>
                    <th class="text-center">Aksi</th>
                </tr>
                @if($trashCat->isEmpty())
                        <tr>
                            <td colspan="7" class="text-center">Data Kosong</td>
                        </tr>
                @else
                    @php($i = 1)
                    @foreach($trashCat as $category)
                    <tr class="table-row">
                        <td class="text-center">{{$category->id_kependudukan}}</td>
                        <td class="text-center">{{$category->nama}}</td>
                        <td class="text-center">{{$category->status}}</td>
                        <td class="text-center">{{$category->alamat}}</td>
                        <td class="text-center">{{$category->date_of_birth}}</td>
                        <td class="text-center">{{$category->agama}}</td>
                        <td class="text-center">{{$category->Jenis_Kelamin}}</td>
                        <td class="text-center">
                            <a href="{{url('/Penduduk/restore/'.$category->id_kependudukan )}}" class="btn btn-info">restore</a>
                            <a href="{{url('/Penduduk/delete/'.$category->id_kependudukan)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                @endif
            </table>
        </div>
    </div>
    {{$trashCat->links()}}
</div>
</div>
    @endsection