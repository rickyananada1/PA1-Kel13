@extends('layouts.backend.main')

@section('content')
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Profile</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                @if ($user->avatar)
                                    <img src="{{ asset('storage/public/image/avatars/' . $user->avatar) }}" alt="Avatar" class="avatar" width="120px">
                                @else
                                    <img src="{{ asset('image/default-avatar.png') }}" alt="Default Avatar" class="avatar">
                                @endif
                            </div>
                            <div class="col-md-8">
                                <p><strong>Nama:</strong> {{ $user->name }}</p>
                                <p><strong>Jabatan:</strong> {{ $user->jabatan }}</p>
                                <p><strong>Email:</strong> {{ $user->email }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <a href="{{ route('admin.profile.edit') }}" class="btn btn-primary">Edit Profil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
