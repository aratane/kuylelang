@extends('app')
@section('content')
<!-- ========== tables-wrapper start ========== -->
<div class="tables-wrapper">
  <div class="row">
    <div class="col-md-12">
      <div class="card border-0 shadow rounded">
        <div class="card-body">
          <a href="{{ route('barang.create') }}" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Foto Barang</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Tanggal Rilis</th>
                <th scope="col">Harga</th>
                <th scope="col">Deskrisi Barang</th>
                <th class="text-center" scope="col">AKSI</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1 ?>
              @forelse ($barang as $data)
              <tr>
                <td>{{ $no++ }}</td>
                <td class="text-center">
                  <img src="{{ Storage::url('public/barang/').$data->foto }}" class="rounded" style="width: 150px">
                </td>
                <td>{{ $data->nama_barang }}</td>
                <td>{{ $data->tgl }}</td>
                <td>{{ $data->harga_awal }}</td>
                <td>{{ $data->deskripsi_barang }}</td>
                <td class="text-center">
                  <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                    action="{{ route('barang.destroy', $data->id_barang) }}" method="POST">
                    <a href="{{ route('barang.edit', $data->id_barang) }}" class="btn btn-sm btn-primary">EDIT</a>
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
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end row -->
<!-- ========== section end ========== -->
@endsection