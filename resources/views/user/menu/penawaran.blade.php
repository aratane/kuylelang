@extends('user/app')
@section('content')
    <div class="cards-styles">
        <!-- ========= card-style-1 start ========= -->
        <div class="row">
            @forelse ($barang as $data)
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="card-style-1 mb-30">
                        <div class="card-meta">
                            <div class="image">
                                <img src="assets/images/cards/card-style-1/admin-1.png" alt="" />
                            </div>
                            <div class="text">
                                <p class="text-sm text-medium">
                                    Posted by : <a href="#0">{{ $data->nama_lengkap }}</a>
                                </p>
                            </div>
                        </div>
                        <div class="card-image">
                            <a href="#0">
                                <img src="{{ Storage::url('public/barang/') . $data->foto }}" alt="Barang" />
                            </a>
                        </div>
                        <div class="card-content">
                            <h4><a href="#0">Nama Barang:</a></h4>
                            <p>{{ $data->nama_barang }}</p>
                            <br>
                            <h4><a href="#0">Tanggal Rilis:</a></h4>
                            <p>{{ $data->tgl }}</p>
                            <br>
                            <h4><a href="#0">Harga:</a></h4>
                            <p>{{ $data->formatRupiah('harga_awal') }}</p>
                            <br>
                            <h4><a href="#0">Deskripsi Barang</a></h4>
                            <p>{{ $data->deskripsi_barang }}</p>
                            <br>
                        </div>
                        <div class="card-content text-center">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#bidModal">BID BARANG SEKARANG</button>
                        </div>
                    </div>
                </div>
                <!-- end card-->
            @empty
                <div class="alert alert-danger">
                    Data Barang lelang belum Tersedia.
                </div>
            @endforelse
        </div>
    </div>
    <!-- end row -->

    <!-- Modal -->
    <div class="modal fade" id="bidModal" tabindex="-1" aria-labelledby="bidModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bidModal">Penawaran Barang Lelang</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Jumlah Tawaran Anda:</label>
                        <input type="text" class="form-control" name="harga_penawaran"
                            placeholder="Contoh Rp. 50.000 ...">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Simpan Tawaran</button>
                </div>
            </div>
        </div>
    </div>
    <!-- ========= card-style-1 end ========= -->
@endsection
