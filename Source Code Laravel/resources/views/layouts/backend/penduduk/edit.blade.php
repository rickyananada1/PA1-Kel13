@extends('layouts.backend.main')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                Form Edit Data
            </div>
            <div class="card-body">
                <form action="{{url('Penduduk/update/'.$categories->nik)}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="input-wrapper">
                        <label for="exampleInputEmail1">NIK</label>
                        <div class="input-group">
                            <input type="number" name="nik" class="form-control" placeholder="Masukkan NIK"  value="{{$categories->nik}}">
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
                            <input type="text" name="nama" class="form-control" value="{{$categories->nama}}">
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
                            <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan tempat lahir" value="{{$categories->tempat_lahir}}">
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
                            <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat" value="{{$categories->alamat}}">
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
                        <input type="date" name="date_of_birth" class="form-control" value="{{$categories->date_of_birth}}">
                        @error('date_of_birth')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="input-wrapper">
                        <label for="exampleInputEmail1">Usia</label>
                        <div class="input-group">
                            <input type="number" name="usia" class="form-control" placeholder="Masukkan Umur" value="{{$categories->usia}}">
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
                        <select name="hubungan" id="hubungan" class="form-control">
                            <option {{$categories->hubungan == 'Kepala Keluarga'? 'selected' : null }}  value="Kepala Keluarga">Kepala Keluarga</option>
                            <option {{$categories->hubungan == 'Istri'? 'selected' : null }}  value="Istri">Istri</option>
                            <option {{$categories->hubungan == 'Anak Kandung'? 'selected' : null }}  value="Anak Kandung">Anak Kandung</option>
                        </select>
                        @error('hubungan')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Status Kawin</label>
                        <select name="status" id="status" class="form-control">
                            <option {{$categories->status == 'kawin'? 'selected' : null }}  value="kawin">Kawin</option>
                            <option {{$categories->status == 'belum kawin'? 'selected' : null }}  value="belum kawin">Belum Kawin</option>
                        </select>
                        @error('status')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Agama</label>
                        <select name="agama" class="form-control">
                            <option {{$categories->agama == 'Kristen Katolik'? 'selected' : null }}>Kristen Katolik</option>
                            <option {{$categories->agama == 'Islam'? 'selected' : null }}>Islam</option>
                            <option {{$categories->agama == 'Budha'? 'selected' : null }}>Budha</option>
                            <option {{$categories->agama == 'Kong Hucu'? 'selected' : null }}>Kong Hucu</option>
                            <option {{$categories->agama == 'Kristen Protestan'? 'selected' : null }}>Kristen Protestan</option>
                        </select>
                        @error('agama')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control">
                            <option {{$categories->Jenis_Kelamin == 'Laki-Laki'? 'selected' : null }}>Laki-Laki</option>
                            <option {{$categories->Jenis_Kelamin == 'Perempuan'? 'selected' : null }}>Perempuan</option> 
                        </select>
                        @error('jenis_kelamin')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Golongan darah</label>
                        <select name="golongan_darah" class="form-control">
                            <option {{$categories->golongan_darah == 'A'? 'selected' : null }}>A</option>
                            <option {{$categories->golongan_darah == 'B'? 'selected' : null }}>B</option>
                            <option {{$categories->golongan_darah == 'AB'? 'selected' : null }}>AB</option>
                            <option {{$categories->golongan_darah == 'O'? 'selected' : null }}>O</option>
                            <option {{$categories->golongan_darah == 'Tidak Diketahui'? 'selected' : null }}>Tidak Diketahui</option>
                        </select>
                        @error('golongan_darah')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Kepala Keluarga</label>
                        <select name="kode_keluarga" class="form-control">
                            <option></option>
                            @foreach($kode_keluarga as $item)
                                <option value="{{$item->kode_keluarga}}" {{$categories->kode_keluarga == $item->kode_keluarga ? 'selected' : '' }}>
                                    {{$item->nama_kepala_keluarga}}
                                </option>
                            @endforeach
                        </select>
                    </div>                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<br>
@endsection