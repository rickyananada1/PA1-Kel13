<style>
    .card-header {
        background-color: #f8f9fa;
        border-bottom: none;
    }

    .form-control {
        border-color: #ced4da;
        border-radius: 4px;
    }
</style>


@extends('layouts.backend.main')

@section('content')
<div class="penduduk">
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
            <h3>Data Penduduk</h3>
            <a href="{{ route('tambah.penduduk') }}" class="btn btn- btn-outline-light">Tambah Data</a>
        </div>
    
   
        <div class="card-header d-flex justify-content-between align-items-center">
            <div class="w-75">
                <div class="form-group">
                    <input type="text" id="searchInput" class="form-control" style="width: 100%" placeholder="Cari Nama">
                </div>
            </div>
            <div class="w-15 ml-auto">
                <div class="form-group">
                    <label for="perPageSelect" class="sr-only">Filter Data</label>
                    <select id="perPageSelect" class="form-control">
                        <option value="5" {{ $perPage == 5 ? 'selected' : '' }}>5 Data</option>
                        <option value="10" {{ $perPage == 10 ? 'selected' : '' }}>10 Data</option>
                        <option value="20" {{ $perPage == 20 ? 'selected' : '' }}>20 Data</option>
                        <option value="100" {{ $perPage == 100 ? 'selected' : '' }}>100 Data</option>
                        <option value="0" {{ $perPage == 0 ? 'selected' : '' }}>Semua Data</option>
                    </select>
                </div>
            </div>
        </div>
        
    
        
    <div class="card-header d-flex justify-content-between align-items-center">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <tr>
                    <th class="text-center">NIK</th>
                    <th class="text-center">Nama Lengkap</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Hubungan</th>
                    <th class="text-center">Tempat Lahir</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">Golongan darah</th>
                    <th class="text-center">Tanggal Lahir</th>
                    <th class="text-center">Agama</th>
                    <th class="text-center">Usia</th>
                    <th class="text-center">Jenis Kelamin</th>
                    <th class="text-center">Nama Kepala Keluarga</th>
                    <th class="text-center">Aksi</th>
                </tr>
                @if($kependudukan->isEmpty())
                    <tr>
                        <td colspan="12" class="text-center">Data Kosong</td>
                    </tr>
                @else
                    @foreach($kependudukan as $category)
                    <tr class="table-row">
                        <td class="text-center">{{$category->nik}}</td>
                        <td class="text-center">{{$category->nama}}</td>
                        <td class="text-center">{{$category->status}}</td>
                        <td class="text-center">{{$category->hubungan}}</td>
                        <td class="text-center">{{$category->tempat_lahir}}</td>
                        <td class="text-center">{{$category->alamat}}</td>
                        <td class="text-center">{{$category->golongan_darah}}</td>
                        <td class="text-center">{{$category->date_of_birth}}</td>
                        <td class="text-center">{{$category->agama}}</td>
                        <td class="text-center">{{$category->usia}}</td>
                        <td class="text-center">{{$category->Jenis_Kelamin}}</td>
                        <td>@if($category->categorykeluarga)
                            {{$category->categorykeluarga->nama_kepala_keluarga}}
                          @else
                            Nama Kepala Keluarga Telah Hilang/Dihapus
                          @endif</td>
                        <td class="text-center">
                            <div class="btn-group" role="group">
                                <a href="{{url('/Penduduk/edit/'.$category->nik)}}" class="btn btn-info">Edit</a>
                                <a href="{{url('/Penduduk/softdelete/'.$category->nik)}}" class="btn btn-danger">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    
                    @endforeach
                @endif
            </table>
        </div>
    </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#searchInput').on('keyup', function () {
            var value = $(this).val().toLowerCase();
            $('table tr').filter('.table-row').each(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });
    });


    $(document).ready(function () {
        $('#perPageSelect').on('change', function () {

            var perPage = $(this).val();

            var url = window.location.href.split('?')[0] + '?perPage=' + perPage;

            window.location.href = url;
        });
    }); 

</script>

@endsection


