@extends('admin/app')
@section('content')
<!-- ========== title-wrapper end ========== -->
<div class="row">
  <div class="col-xl-3 col-lg-4 col-sm-6">
    <div class="icon-card mb-30">
      <div class="icon purple">
        <i class="lni lni-cart-full"></i>
      </div>
      <div class="content">
        <h6 class="mb-10">Barang Lelang</h6>
        <h3 class="text-bold mb-10">34567</h3>
        <p class="text-sm text-success">
          <i class="lni lni-arrow-up"></i> +2.00%
          <span class="text-gray">(30 days)</span>
        </p>
      </div>
    </div>
    <!-- End Icon Cart -->
  </div>
  <!-- End Col -->
  <div class="col-xl-3 col-lg-4 col-sm-6">
    <div class="icon-card mb-30">
      <div class="icon success">
        <i class="lni lni-dollar"></i>
      </div>
      <div class="content">
        <h6 class="mb-10">Lelang Aktif</h6>
        <h3 class="text-bold mb-10">$74,567</h3>
        <p class="text-sm text-success">
          <i class="lni lni-arrow-up"></i> +5.45%
          <span class="text-gray">Increased</span>
        </p>
      </div>
    </div>
    <!-- End Icon Cart -->
  </div>
  <!-- End Col -->
  <div class="col-xl-3 col-lg-4 col-sm-6">
    <div class="icon-card mb-30">
      <div class="icon primary">
        <i class="lni lni-credit-cards"></i>
      </div>
      <div class="content">
        <h6 class="mb-10">Barang Terjual</h6>
        <h3 class="text-bold mb-10">$24,567</h3>
        <p class="text-sm text-danger">
          <i class="lni lni-arrow-down"></i> -25.00%
          <span class="text-gray">Expense</span>
        </p>
      </div>
    </div>
    <!-- End Icon Cart -->
  </div>
  <!-- End Col -->
  <div class="col-xl-3 col-lg-4 col-sm-6">
    <div class="icon-card mb-30">
      <div class="icon orange">
        <i class="lni lni-user"></i>
      </div>
      <div class="content">
        <h6 class="mb-10">Petugas Lelang</h6>
        <h3 class="text-bold mb-10">34567</h3>
        <p class="text-sm text-danger">
          <i class="lni lni-arrow-down"></i> -25.00%
          <span class="text-gray"> Earning</span>
        </p>
      </div>
    </div>
    <!-- End Icon Cart -->
  </div>
  <!-- End Col -->
</div>
<!-- End Col -->
<!-- ========== tables-wrapper start ========== -->
{{-- <div class="col-lg-12">
  <div class="card-style mb-30">
    <div class="title d-flex flex-wrap align-items-center justify-content-between">
      <div class="left">
        <h6 class="text-medium mb-30">Data Lelang Barang RealTime</h6>
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
                  <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" name="nama_barang"
                    value="{{ old('nama_barang') }}" placeholder="Masukkan Nama Barang" required>
                  <!-- error message untuk nama_barang -->
                  @error('nama_barang')
                  <div class="alert alert-danger mt-2">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Tanggal Rilis:</label>
                  <input type="date" class="form-control @error('tgl') is-invalid @enderror" name="tgl"
                    value="{{ old('tgl') }}" placeholder="Masukkan Tanggal Rilis" required>
                  <!-- error message untuk tgl -->
                  @error('tgl')
                  <div class="alert alert-danger mt-2">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Harga Awal:</label>
                  <input type="text" id="rupiah" class="form-control @error('harga_awal') is-invalid @enderror"
                    name="harga_awal" value="{{ old('harga_awal') }}" placeholder="Masukkan Harga Awal" required>
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
                  <textarea class="form-control @error('deskripsi_barang') is-invalid @enderror" name="deskripsi_barang"
                    rows="5" placeholder="Masukkan Deskipsi Barang" required>{{ old('deskripsi_barang') }}</textarea>
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
</div> --}}

@endsection