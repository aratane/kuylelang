@extends('app')
@section('content')
<div class="col-lg-12">
  <div class="card-style mb-30">
    <div class="title d-flex flex-wrap align-items-center justify-content-between">
      <div class="left">
      </div>
    </div>
    <!-- End Title -->
    <div class="table-responsive">
      <table class="table top-selling-table">
        <thead>
          <tr>
            <th>#</th>
            <th>Foto Barang</th>
            <th>Nama Barang</th>
            <th>Tanggal Rilis</th>
            <th>Harga</th>
            <th>Deskrisi Barang</th>
            <th class="text-center">AKSI</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1 ?>
          @forelse ($barang as $data)
          <tr>
            <td>{{ $no++ }}</td>
            <td class="text-center">
              <img src="{{url('storage/app/public/barang/'.$data->foto)}}">
            </td>
            <td>{{ $data->nama_barang }}</td>
            <td>{{ $data->tgl }}</td>
            <td>{{ $data->harga_awal }}</td>
            <td>{{ $data->deskripsi_barang }}</td>
            <td class="text-center">
              <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('barang.destroy', $data->id) }}" method="POST">
                <a href="{{ route('barang.edit', $data->id) }}" class="btn btn-sm btn-primary">EDIT</a>
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
      <!-- End Table -->
      <div class="modal fade" id="addBarangModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Barang Lelang</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Foto:</label>
                  <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" required>
                  <!-- error message untuk title -->
                  @error('foto')
                  <div class="alert alert-danger mt-2">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Nama Barang:</label>
                  <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" name="nama_barang" value="{{ old('nama_barang') }}" placeholder="Masukkan Nama Barang" required>
                  <!-- error message untuk nama_barang -->
                  @error('nama_barang')
                  <div class="alert alert-danger mt-2">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Tanggal Rilis:</label>
                  <input type="date" class="form-control @error('tgl') is-invalid @enderror" name="tgl" value="{{ old('tgl') }}" placeholder="Masukkan Tanggal Rilis" required>
                  <!-- error message untuk tgl -->
                  @error('tgl')
                  <div class="alert alert-danger mt-2">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Harga Awal:</label>
                  <input type="text" id="rupiah" class="form-control @error('harga_awal') is-invalid @enderror" name="harga_awal" value="{{ old('harga_awal') }}" placeholder="Masukkan Harga Awal" required>
                  <!-- error message untuk harga_awal -->
                  @error('harga_awal')
                  <div class="alert alert-danger mt-2">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <script type="text/javascript">
                  var rupiah = document.getElementById('rupiah');
                  rupiah.addEventListener('keyup', function(e) {
                    // tambahkan 'Rp.' pada saat form di ketik
                    // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
                    rupiah.value = formatRupiah(this.value, 'Rp. ');
                  });

                  /* Fungsi formatRupiah */
                  function formatRupiah(angka, prefix) {
                    var number_string = angka.replace(/[^,\d]/g, '').toString(),
                      split = number_string.split(','),
                      sisa = split[0].length % 3,
                      rupiah = split[0].substr(0, sisa),
                      ribuan = split[0].substr(sisa).match(/\d{3}/gi);

                    // tambahkan titik jika yang di input sudah menjadi angka ribuan
                    if (ribuan) {
                      separator = sisa ? '.' : '';
                      rupiah += separator + ribuan.join('.');
                    }

                    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                    return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
                  }
                </script>
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Deskripsi Barang:</label>
                  <textarea class="form-control @error('deskripsi_barang') is-invalid @enderror" name="deskripsi_barang" rows="5" placeholder="Masukkan Deskipsi Barang" required>{{ old('deskripsi_barang') }}</textarea>
                  <!-- error message untuk deskripsi_barang -->
                  @error('deskripsi_barang')
                  <div class="alert alert-danger mt-2">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                  <button type="reset" class="btn btn-md btn-warning">RESET</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection