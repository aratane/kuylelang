@extends('admin/app')
@section('content')
    <div class="form-elements-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <!-- input style start -->
                <div class="card-style mb-30">
                    <h6 class="mb-25">Form Edit Data Petugas</h6>
                    <form class="row g-3" action="{{ route('user.update', $user->id_user) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-md-6">
                            <label class="form-label">Nama Petugas:</label>
                            <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror"
                                name="nama_lengkap" value="{{ old('nama_lengkap', $user->nama_lengkap) }}"
                                placeholder="Masukkan Nama Petugas ...">

                            <!-- error message untuk nama_lengkap -->
                            @error('nama_lengkap')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Username:</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror"
                                name="username" value="{{ old('username', $user->username) }}"
                                placeholder="Masukkan Nama Petugas ...">

                            <!-- error message untuk username -->
                            @error('username')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Level:</label>
                            <input type="text" class="form-control @error('telp') is-invalid @enderror" name="telp"
                                value="{{ old('telp', $user->telp) }}" placeholder="Masukkan Nama Petugas ...">

                            <!-- error message untuk telp -->
                            @error('telp')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary text-center">Update Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
