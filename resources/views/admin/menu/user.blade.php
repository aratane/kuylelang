@extends('admin/app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <a href="{{ route('user.create') }}" type="button" class="btn btn-outline-info">Tambah Data petugas Lelang</a>
        <br><br>
        <div class="card-style mb-30">
            <h6 class="mb-10">Data user</h6>
            <p class="text-sm mb-20">
                Berikut merupakan list user lelang yang telah di daftarkan.
            </p>
            <div class="table-wrapper table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Lengkap</th>
                            <th>Username</th>
                            <th>Telepon</th>
                            <th class="text-center">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        @forelse ($user as $data)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->nama_lengkap }}</td>
                            <td>{{ $data->username }}</td>
                            <td>{{ $data->telp }}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('user.destroy', $data->id_user) }}" method="POST">
                                    <a href="{{ route('user.edit', $data->id_user) }}"><a href="{{ route('user.edit', $data->id_user) }}" class="edit"><i class="lni lni-pencil"></i></a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-danger"><i class="lni lni-trash-can"></i></button>
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
                {{ $user->links() }}
                <!-- end table -->
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->
@endsection