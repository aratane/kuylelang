@extends('app')
@section('content')
<div class="form-elements-wrapper">
    <div class="row g-3">
        <div class="col-lg-12">
            <!-- input style start -->
            <div class="card-style mb-30">
                <h6 class="mb-25">Tambah Barang Lelang</h6>
                <form class="row g-3" action="{{ route('barang.update', $barang->id_barang) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-6">
                        <label for="formFile" class="form-label">Foto Barang:</label>
                        <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto">
                        <!-- error message untuk title -->
                        @error('foto')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Nama Barang:</label>
                        <input type="text" class="form-control @error('nama_barang') is-invalid @enderror"
                            name="nama_barang" value="{{ old('nama_barang', $barang->nama_barang) }}"
                            placeholder="Masukkan Nama Barang" required>
                        <!-- error message untuk nama_barang -->
                        @error('nama_barang')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Tanggal Rilis:</label>
                        <input type="date" class="form-control @error('tgl') is-invalid @enderror" name="tgl"
                            value="{{ old('tgl', $barang->tgl) }}" placeholder="Masukkan Tanggal Rilis" required>
                        <!-- error message untuk tgl -->
                        @error('tgl')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="inputCity" class="form-label">Harga Barang:</label>
                        <input type="text" class="form-control @error('harga_awal') is-invalid @enderror"
                            name="harga_awal" value="{{ old('harga_awal', $barang->harga_awal) }}"
                            placeholder="Masukkan Harga" required>
                        <!-- error message untuk harga_awal -->
                        @error('harga_awal')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <script type="text/javascript">
                        var rupiah = document.getElementById('rupiah');
            rupiah.addEventListener('keyup', function(e){
              // tambahkan 'Rp.' pada saat form di ketik
              // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
              rupiah.value = formatRupiah(this.value, 'Rp. ');
            });
         
            /* Fungsi formatRupiah */
            function formatRupiah(angka, prefix){
              var number_string = angka.replace(/[^,\d]/g, '').toString(),
              split   		= number_string.split(','),
              sisa     		= split[0].length % 3,
              rupiah     		= split[0].substr(0, sisa),
              ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
         
              // tambahkan titik jika yang di input sudah menjadi angka ribuan
              if(ribuan){
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
              }
         
              rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
              return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
            }
                    </script>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Barang:</label>
                        <textarea class="form-control @error('deskripsi_barang') is-invalid @enderror"
                            name="deskripsi_barang" rows="5"
                            placeholder="Masukkan Konten Post">{{ old('deskripsi_barang', $barang->deskripsi_barang) }}</textarea>

                        <!-- error message untuk deskripsi_barang -->
                        @error('deskripsi_barang')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Ubah</button>
                    </div>
                </form>
                <!-- end input -->
            </div>
        </div>
    </div>
</div>
<!-- end card -->

<!-- ========== section end ========== -->
@endsection