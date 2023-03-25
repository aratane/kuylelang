@extends('admin/app')
@section('content')
    <div class="form-elements-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <!-- input style start -->
                <div class="card-style mb-30">
                    <h6 class="mb-25">Form Edit Data Petugas</h6>
                    <form class="row g-3" action="{{ route('petugas.update', $petuga->id_petugas) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-md-6">
                            <label class="form-label">Nama Petugas:</label>
                            <input type="text" class="form-control @error('nama_petugas') is-invalid @enderror"
                                name="nama_petugas" value="{{ old('nama_petugas', $petuga->nama_petugas) }}"
                                placeholder="Masukkan Nama Petugas ...">

                            <!-- error message untuk nama_petugas -->
                            @error('nama_petugas')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Username:</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror"
                                name="username" value="{{ old('username', $petuga->username) }}"
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
                            <input type="text" class="form-control @error('id_level') is-invalid @enderror"
                                name="id_level" value="{{ old('id_level', $petuga->id_level) }}"
                                placeholder="Masukkan Nama Petugas ...">

                            <!-- error message untuk id_level -->
                            @error('id_level')
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
