@extends('user/app')
@section('content')
    <div class="form-elements-wrapper">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-8">
                <!-- input style start -->
                <div class="card-style mb-30">
                    <h6 class="mb-25">Form Penawaran Barang Lelang</h6>
                    <form class="row g-3" action="{{ route('penawaran.store', $barang->id_lelang) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12" hidden>
                            <label class="form-label">ID LELANG:</label>
                            <input type="number" class="form-control @error('id_lelang') is-invalid @enderror"
                                name="id_lelang" value="{{ old('id_lelang', $barang->id_lelang) }}">

                            <!-- error message untuk id_lelang -->
                            @error('id_lelang')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-12" hidden>
                            <label class="form-label" hidden>ID BARANG:</label>
                            <input type="number" class="form-control @error('id_barang') is-invalid @enderror"
                                name="id_barang" value="{{ old('id_barang', $barang->id_barang) }}">

                            <!-- error message untuk id_barang -->
                            @error('id_barang')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6" hidden>
                            <label class="form-label">Penawar:</label>
                            <input type="text" class="form-control @error('id_user') is-invalid @enderror" name="id_user"
                                value="{{ Auth::guard('user')->user()->id_user }}">

                            <!-- error message untuk id_user -->
                            @error('id_user')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Jumlah Tawaran:</label>
                            <input type="number" class="form-control @error('penawaran_harga') is-invalid @enderror"
                                name="penawaran_harga" value="{{ old('penawaran_harga') }}"
                                placeholder="Masukkan Jumlah Tawaran ...">

                            <!-- error message untuk penawaran_harga -->
                            @error('penawaran_harga')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary text-center">BID SEKARANG</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
