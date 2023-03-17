@extends('admin/app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <a href="{{ route('lelang.create') }}" type="button" class="btn btn-outline-info">Tambah Data Lelang</a>
            <br><br>
            <div class="card-style mb-30">
                <h6 class="mb-10">Data Aktivasi Lelang</h6>
                <p class="text-sm mb-20">
                    Berikut merupakan list lelang yang aktif dan tidak aktif.
                </p>
                <div class="table-wrapper table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                {{-- ID BARANG --}}
                                <th>Nama Barang</th> 
                                <th>Tanggal</th>
                                {{-- HARGA AKHIR --}}
                                <th>Harga Tertinggi</th>
                                <th>Pemenang</th>
                                <th>Petugas</th>
                                <th>Status</th>
                                <th class="text-center">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <th>
                            <td></td>
                            </th>
                        </tbody>
                    </table>
                    {{ $barang->links() }}
                    <!-- end table -->
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
@endsection
