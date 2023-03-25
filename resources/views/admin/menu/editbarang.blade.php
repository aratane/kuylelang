@extends('admin/app')
@section('content')
    <div class="form-elements-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <!-- input style start -->
                <div class="card-style mb-30">
                    <h6 class="mb-25">Form Edit Data Barang</h6>
                    <form class="row g-3" action="{{ route('barang.update', $barang->id_barang) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-md-6">
                            <label class="form-label">Foto Barang:</label>
                            <input type="file" class="form-control" name="foto">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Nama Barang:</label>
                            <input type="text" class="form-control @error('nama_barang') is-invalid @enderror"
                                name="nama_barang" value="{{ old('nama_barang', $barang->nama_barang) }}"
                                placeholder="Masukkan Nama Barang ...">

                            <!-- error message untuk nama_barang -->
                            @error('nama_barang')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Tanggal Rilis Barang:</label>
                            <input type="date" class="form-control @error('tgl') is-invalid @enderror" name="tgl"
                                value="{{ old('tgl', $barang->tgl) }}" placeholder="Masukkan Tanggal Rilis ...">

                            <!-- error message untuk tgl -->
                            @error('tgl')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Harga Barang:</label>
                            <input type="text" class="form-control @error('harga_awal') is-invalid @enderror"
                                name="harga_awal" value="{{ old('harga_awal', $barang->harga_awal) }}"
                                placeholder="Masukkan Harga ...">

                            <!-- error message untuk harga_awal -->
                            @error('harga_awal')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label>Deskripsi Barang:</label>
                            <div class="input-style-3">
                                <textarea class="form-control @error('deskripsi_barang') is-invalid @enderror" name="deskripsi_barang" rows="5"
                                    placeholder="Detail Barang ...">{{ old('deskripsi_barang', $barang->deskripsi_barang) }}</textarea>

                                <!-- error message untuk deskripsi_barang -->
                                @error('deskripsi_barang')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <span class="icon"><i class="lni lni-text-format"></i></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Pemilik Barang:</label>
                            <select class="form-control" id="position-option" name="id_user">
                                @foreach ($user as $data)
                                    <option value="{{ old('id_user', $barang->id_user) }}">{{ $data->nama_lengkap }}
                                    </option>
                                @endforeach
                            </select>

                            <!-- error message untuk id_user -->
                            @error('id_user')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6" @disabled(true)>
                            <label class="form-label">Diverifikasi Oleh Petugas:</label>
                            <input type="text" class="form-control"
                                value="{{ Auth::guard('admin')->user()->nama_petugas }}" readonly>
                        </div>
                        <div class="col-md-6" hidden>
                            <label class="form-label">Diverifikasi Oleh Petugas:</label>
                            <input type="text" class="form-control @error('id_petugas') is-invalid @enderror"
                                name="id_petugas" value="{{ Auth::guard('admin')->user()->id_petugas }}" readonly>

                            <!-- error message untuk id_petugas -->
                            @error('id_petugas')
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
