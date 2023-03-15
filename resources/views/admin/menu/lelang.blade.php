@extends('admin/app')
@section('content')
<div class="row">
    <div class="col-lg-12">
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
                            <th>Nama Barang</th>
                            <th>Tanggal Lelang</th>
                            <th>Harga Akhir</th>
                            <th>Dimenagkan</th>
                            <th class="text-center">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        @forelse ($barang as $data)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->nama_barang }}</td>
                            <td>{{ $data->tgl }}</td>
                            <td>{{ $data->formatRupiah('harga_awal') }}</td>
                            <td>{!! $data->deskripsi_barang !!}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('barang.destroy', $data->id_barang) }}" method="POST">
                                    <a href="{{ route('barang.edit', $data->id_barang) }}"><a href="{{ route('barang.edit', $data->id_barang) }}" class="edit"><i class="lni lni-pencil"></i></a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-danger"><i class="lni lni-trash-can"></i></button>
                                </form>
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