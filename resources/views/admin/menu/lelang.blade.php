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
                                <th class="col-1">#</th>
                                {{-- ID BARANG --}}
                                <th class="col-2">Nama Barang</th>
                                <th class="col-2">Tanggal</th>
                                {{-- HARGA AKHIR --}}
                                <th class="col-2">Harga Tertinggi</th>
                                <th class="col-2">Pemilik</th>
                                <th class="col-2">Petugas</th>
                                <th class="col-2">Status</th>
                                <th class="col-1 text-center">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @forelse ($barang as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->nama_barang }}</td>
                                    <td>{{ $data->tgl_lelang }}</td>
                                    <td>{{ $data->harga_akhir }}</td>
                                    <td>{{ $data->nama_lengkap }}</td>
                                    <td>{{ $data->nama_petugas }}</td>
                                    <td>
                                        <label class="btn btn-info">{{ $data->status }}</label>
                                    </td>
                                    <td class="text-center">
                                        @if ($data->status == 'dibuka')
                                            <form action="{{ route('lelangstatus', $data->id_lelang) }}" method="POST">
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger" name="status"
                                                    value="ditutup">TUTUP</button>
                                            </form>
                                        @else
                                            <label class="btn btn-success">Lelang Selesai</label>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <div class="alert alert-danger">
                                    Data Barang belum Tersedia.
                                </div>
                            @endforelse
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
