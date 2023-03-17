@extends('user/app')
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
<!-- DATA BARANG TERVERIFIKASI -->
<div class="row">
    <div class="col-lg-12">
        <div class="card-style mb-30">
            <h6 class="mb-10">Data Barang Terverifikasi RealTime</h6>
            <div class="table-wrapper table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="col-1">#</th>
                            <th class="col-3">Nama Barang</th>
                            <th class="col-2">Rilis</th>
                            <th class="col-2">Harga Barang</th>
                            <th class="col-2">Pemilik</th>
                            <th class="col-2">Verif Oleh</th>
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
                            <td>{!! $data->nama_lengkap !!}</td>
                            <td>{!! $data->nama_petugas !!}</td>
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
<!-- END -->

@endsection