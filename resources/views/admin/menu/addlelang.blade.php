@extends('admin/app')
@section('content')
    <div class="form-elements-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <!-- input style start -->
                <div class="card-style mb-30">
                    <h6 class="mb-25">Form Tambah Data Lelang</h6>
                    <form class="row g-3" action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6">
                            <label class="form-label">Nama Barang:</label>
                            <select class="form-control" id="position-option" name="id_petugas">
                                <option selected disabled>Pilih Barang</option>
                                @foreach ($barang as $data)
                                    <option value="{{ $data->id_barang }}">{{ $data->nama_barang }}</option>
                                @endforeach
                            </select>

                            <!-- error message untuk id_barang -->
                            @error('id_barang')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Tanggal:</label>
                            <input type="date" class="form-control @error('tgl_lelang') is-invalid @enderror"
                                name="tgl_lelang" value="{{ old('tgl_lelang') }}" placeholder="Masukkan Nama Barang ...">

                            <!-- error message untuk tgl_lelang -->
                            @error('tgl_lelang')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Harga Akhir:</label>
                            <input type="number" class="form-control @error('harga_akhir') is-invalid @enderror"
                                name="harga_akhir" value="{{ old('harga_akhir') }}" placeholder="Masukkan Harga ...">

                            <!-- error message untuk harga_akhir -->
                            @error('harga_akhir')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Pemilik:</label>
                            <select class="form-control" id="position-option" name="id_user">
                                <option selected disabled>Pilih Pemilik</option>
                                @foreach ($user as $data)
                                    <option value="{{ $data->id_user }}">{{ $data->nama_lengkap }}</option>
                                @endforeach
                            </select>

                            <!-- error message untuk id_user -->
                            @error('id_user')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Status:</label>
                            <input type="text" class="form-control @error('status') is-invalid @enderror" name="status"
                                value="dibuka" placeholder="status" readonly>

                            <!-- error message untuk status -->
                            @error('status')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Nama Petugas:</label>
                            <input type="text" class="form-control @error('id_petugas') is-invalid @enderror"
                                name="id_petugas" value="{{ old('id_petugas', $barang->id_petugas) }}"
                                placeholder="{{ Auth::guard('admin')->user()->nama_petugas }}" readonly>

                            <!-- error message untuk status -->
                            @error('status')
                                <div class="alert
                                        alert-danger mt-2">
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
