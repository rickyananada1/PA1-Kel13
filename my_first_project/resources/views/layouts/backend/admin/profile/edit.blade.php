@extends('layouts.backend.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Profile</div>

                    <div class="card-body">
                        <form action="{{ route('profile.update', ['id' => $user->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Nama:</label>
                                <input type="text" id="name" name="name" value="{{ $user->name }}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="jabatan">Jabatan:</label>
                                <select id="jabatan" name="jabatan" class="form-control">
                                    <option value="Kepala Desa" {{ $user->jabatan == 'Kepala Desa' ? 'selected' : '' }}>Kepala Desa</option>
                                    <option value="Sekretaris" {{ $user->jabatan == 'Sekretaris ' ? 'selected' : '' }}>Sekretaris </option>
                                    <option value="Tata Usaha" {{ $user->jabatan == 'Tata Usaha' ? 'selected' : '' }}>Tata Usaha</option>

                                </select>
                            </div>
                            

                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" value="{{ $user->email }}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="avatar">Avatar:</label>
                                <input type="file" id="avatar" name="avatar" class="form-control-file">
                                @if ($user->avatar)
                                    <img src="{{ asset('storage/image/avatars/' . $user->avatar) }}" style="height:200px; width:300px;" alt="Avatar">
                                @else
                                    <img src="{{ asset('image/default-avatar.png') }}" style="height:200px; width:300px;" alt="Default Avatar">
                                @endif
                            </div>                            

                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
