@extends('admin/app')
@section('content')
<div class="form-elements-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <!-- input style start -->
            <div class="card-style mb-30">
                <h6 class="mb-25">Form Tambah Data Petugas</h6>
                <form class="row g-3" action="{{ route('petugas.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12">
                        <label class="form-label">Nama Petugas:</label>
                        <input type="text" class="form-control @error('nama_petugas') is-invalid @enderror" name="nama_petugas" value="{{ old('nama_petugas') }}" placeholder="Masukkan Nama petugas ...">

                        <!-- error message untuk nama_petugas -->
                        @error('nama_petugas')
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
                        <label>Level:</label>
                            <select class="form-control" id="position-option" name="id_level">
                                @foreach ($level as $data)
                                <option value="{{ $data->id_level }}">{{ $data->level }}</option>
                                @endforeach
                            </select>
                    </div>
                    <button type="submit" class="btn btn-primary text-center">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection