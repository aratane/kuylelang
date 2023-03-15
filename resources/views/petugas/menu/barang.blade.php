@extends('admin/app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card-style mb-30">
            <h6 class="mb-10">Data Table</h6>
            <p class="text-sm mb-20">
                For basic styling—light padding and only horizontal
                dividers—use the class table.
            </p>
            <div class="table-wrapper table-responsive">
                <!-- <a href="{{ route('posts.create') }}" class="btn btn-md btn-success mb-3">TAMBAH POST</a> -->
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Tanggal Rilis</th>
                            <th scope="col">Harga Barang</th>\
                            <th scope="col">Deskripsi Barang</th>
                            <th scope="col">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($barang as $data)
                        <tr>
                            <td class="text-center">
                                <img src="{{ Storage::url('public/barang/').$data->image }}" class="rounded" style="width: 150px">
                            </td>
                            <td>{{ $data->title }}</td>
                            <td>{!! $data->content !!}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('data.destroy', $post->id) }}" method="POST">
                                    <a href="{{ route('data.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <div class="alert alert-danger">
                            Data Post belum Tersedia.
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