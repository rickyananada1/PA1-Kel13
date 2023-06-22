@extends('layouts.backend.main')

@section('content')

<div class="card">
  <div class="content-wrapper">
    <div class="container"><br><br>
      @if(session('success'))
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{session('success')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif

      <div class="card-header">
        Form Tambah Data
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('add.penduduk') }}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <div class="input-wrapper">
            <label for="exampleInputEmail1">NIK</label>
            <div class="input-group">
            <input type="number" name="nik" class="form-control" placeholder="Masukkan NIK" value="{{ old('nik') }}">
            <div class="input-group-append">
              <span class="input-group-text" style="color: red;">*</span>
          </div>
        </div>  
            @error('nik')  
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          </div>
          <div class="form-group">
            <div class="input-wrapper">
            <label for="exampleInputEmail1">Nama</label>
            <div class="input-group">
            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" value="{{ old('nama') }}">
            <div class="input-group-append">
              <span class="input-group-text" style="color: red;">*</span>
          </div>
        </div>  
            @error('nama')  
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
        </div>
          <div class="form-group">
            <div class="input-wrapper">
            <label for="exampleInputEmail1">Tempat Lahir</label>
            <div class="input-group">
            <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan tempat lahir" value="{{ old('tempat_lahir') }}">
            <div class="input-group-append">
              <span class="input-group-text" style="color: red;">*</span>
          </div>
        </div>  
            @error('tempat_lahir')  
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>  
          </div>
          <div class="form-group">
            <div class="input-wrapper">
            <label for="exampleInputEmail1">Alamat</label>
            <div class="input-group">
            <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat" value="{{ old('alamat') }}">
            <div class="input-group-append">
              <span class="input-group-text" style="color: red;">*</span>
          </div>
        </div> 
            @error('alamat')  
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div> 
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Tanggal Lahir</label>
            <input type="date" name="date_of_birth" class="form-control" placeholder="Masukkan Tanggal Lahir" value="{{ old('date_of_birth') }}">
            @error('date_of_birth')  
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <div class="input-wrapper">
            <label for="exampleInputEmail1">Usia</label>
            <div class="input-group">
            <input type="number" name="usia" class="form-control" placeholder="Masukkan Usia" value="{{ old('usia') }}">
            <div class="input-group-append">
              <span class="input-group-text" style="color: red;">*</span>
          </div>
        </div> 
            @error('usia')  
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
        </div> 
          <div class="form-group">
            <label for="exampleInputEmail1">Hubungan</label>
              <select name="hubungan" class="form-control" required>
                <option value="" disabled selected hidden>Masukkan hubungan Dengan Kepala Keluarga</option>
                <option>Kepala Keluarga</option>
                <option>Istri</option>
                <option>Anak Kandung</option>
              </select>

            @error('hubungan')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Status Kawin</label>
            <select name="status" class="form-control">
              <option value="" disabled selected hidden>Masukkan Status</option>
              <option>Kawin</option>
              <option>Belum Kawin</option>
            </select>
            @error('status')  
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Agama</label>
            <select name="agama" class="form-control">
              <option value="" disabled selected hidden>Masukkan Agama</option>
              <option>Kristen Katolik</option>
              <option>Islam</option>
              <option>Budha</option>
              <option>Kong Hucu</option>
              <option>Kristen Protestan</option>
            </select>
            @error('agama')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control">
              <option value="" disabled selected hidden>Masukkan Jenis Kelamin</option>
              <option>Laki-Laki</option>
              <option>Perempuan</option>   
            </select>
            @error('jenis_kelamin')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Golongan Darah</label>
            <select name="golongan_darah" class="form-control">
              <option value="" disabled selected hidden>Masukkan Golongan Darah</option>
              <option>A</option>
              <option>B</option>
              <option>AB</option>
              <option>O</option>
              <option>Tidak Diketahui</option>
            </select>
            @error('golongan_darah')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Kepala Keluarga</label>
              <select name="kode_keluarga" class="form-control">
                <option value="" disabled selected hidden>Masukkan Kepala Keluarga</option>
                @foreach($kode_keluarga->sortBy('nama_kepala_keluarga') as $item)
                <option value="{{$item->kode_keluarga}}">{{$item->nama_kepala_keluarga}}</option>
            @endforeach            
             </select>
          </div>
            @error('kode_keluarga')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="container d-flex justify-content-center align-items-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>        
      </form>
      </div>
      <br>
      
    </div>
  </div>
</div>
<br>

@endsection