@extends('app')
@section('content')
          <div class="col-lg-12">
            <div class="card-style mb-30">
              <div class="title d-flex flex-wrap align-items-center justify-content-between">
                <div class="left">
                  <h6 class="text-medium mb-30">Data Lelang Realtime</h6>
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
                    @foreach ($barang as $barang)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $barang->foto }}</td>
                        <td>{{ $barang->nama_barang }}</td>
                        <td>{{ $barang->tgl }}</td>
                        <td>{{ $barang->harga_awal }}</td>
                        <td>{{ $barang->deskripsi_barang }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <!-- End Table -->
              </div>
            </div>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
      <!-- end container -->
    </section>
    <!-- ========== section end ========== -->
@endsection