@extends('admin/app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card-style mb-30">
                <h6 class="mb-10">Data Barang Lelang</h6>
                <p class="text-sm mb-20">
                    Berikut merupakan list barang lelang yang telah di daftarkan.
                </p>
                <div class="table-wrapper table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="col-1">#</th>
                                <th class="col-2">Nama</th>
                                <th class="col-2">Rilis</th>
                                <th class="col-2">Harga</th>
                                <th class="col-2">Pemilik</th>
                                <th class="col-2">Verifikasi Oleh</th>
                                {{-- <th>Deskripsi</th> --}}
                                <th class="col-1 text-center">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @forelse ($barang as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->nama_barang }}</td>
                                    <td>{{ $data->tgl }}</td>
                                    <td>{{ $data->formatRupiah('harga_awal') }}</td>
                                    <td>{{ $data->nama_lengkap }}</td>
                                    <td>
                                        @if ($data->id_petugas == 0)
                                            <label class="btn btn-info">Belum verif</label>
                                        @else
                                            {{ $data->nama_petugas }}
                                        @endif
                                    </td>
                                    {{-- <td>{!! $data->deskripsi_barang !!}</td> --}}
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                            action="{{ route('barang.destroy', $data->id_barang) }}" method="POST">
                                            <a href="{{ route('barang.edit', $data->id_barang) }}"><a
                                                    href="{{ route('barang.edit', $data->id_barang) }}" class="edit"><i
                                                        class="lni lni-pencil"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-danger"><i
                                                        class="lni lni-trash-can"></i></button>
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
