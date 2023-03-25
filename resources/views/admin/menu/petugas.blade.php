@extends('admin/app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <a href="{{ route('petugas.create') }}" type="button" class="btn btn-outline-info">Tambah Data petugas Lelang</a>
            <br><br>
            <div class="card-style mb-30">
                <h6 class="mb-10">Data petugas Lelang</h6>
                <p class="text-sm mb-20">
                    Berikut merupakan list petugas lelang yang telah di daftarkan.
                </p>
                <div class="table-wrapper table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Petugas</th>
                                <th>Username</th>
                                <th>Role</th>
                                <th class="text-center">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @forelse ($petugas as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->nama_petugas }}</td>
                                    <td>{{ $data->username }}</td>
                                    <td>{{ $data->level }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                            action="{{ route('petugas.destroy', $data->id_petugas) }}" method="POST">
                                            <a href="{{ route('petugas.edit', $data->id_petugas) }}"
                                                class="btn btn-warning lni lni-pencil"></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger lni lni-trash-can"></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <div class="alert alert-danger">
                                    Data petugas belum Tersedia.
                                </div>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $petugas->links() }}
                    <!-- end table -->
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
@endsection
