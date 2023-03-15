@extends('admin/app')
@section('content')
<div class="form-elements-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <!-- input style start -->
            <div class="card-style mb-30">
                <h6 class="mb-25">Form Tambah Data user</h6>
                <form class="row g-3" action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12">
                        <label class="form-label">Nama Lengkap:</label>
                        <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" value="{{ old('nama_lengkap') }}" placeholder="Masukkan Nama lengkap ...">

                        <!-- error message untuk nama_lengkap -->
                        @error('nama_lengkap')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Username:</label>
                        <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="Masukkan Username ...">

                        <!-- error message untuk username -->
                        @error('username')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Password:</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" placeholder="Masukkan Password ...">

                        <!-- error message untuk password -->
                        @error('password')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Telepon:</label>
                        <input type="text" class="form-control @error('telp') is-invalid @enderror" name="telp" value="{{ old('telp') }}" placeholder="Masukkan telp ...">

                        <!-- error message untuk telp -->
                        @error('telp')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary text-center">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection