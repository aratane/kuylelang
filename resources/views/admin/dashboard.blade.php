@extends('admin/app')
@section('content')
<div class="row">
    <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="icon-card mb-30">
            <div class="icon purple">
                <i class="lni lni-cart-full"></i>
            </div>
            <div class="content">
                <h6 class="mb-10">Barang Lelang</h6>
                <h3 class="text-bold mb-10">{{ $totalbarang }}</h3>
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
                <h3 class="text-bold mb-10">{{ $lelangaktif }}</h3>
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
                <h6 class="mb-10">Total User</h6>
                <h3 class="text-bold mb-10">{{ $jumlahuser }}</h3>
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
                <h3 class="text-bold mb-10">{{ $jumlahpetugas }}</h3>
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
<!-- ChartJS Barang-->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="row">
    <div class="col-lg-6">
        <div class="card-style mb-30">
            <div class="title d-flex flex-wrap justify-content-between">
                <div class="left">
                    <h6 class="text-medium mb-10">Data Penjualan Lelang Tahunan</h6>
                    <h3 class="text-bold">Rp. 245,479</h3>
                </div>
                <div class="right">
                    <div class="select-style-1">
                        <div class="select-position select-sm">
                            <select class="light-bg">
                                <option value="">Yearly</option>
                                <option value="">Monthly</option>
                                <option value="">Weekly</option>
                            </select>
                        </div>
                    </div>
                    <!-- end select -->
                </div>
            </div>
            <!-- End Title -->
            <div class="chart">
                <canvas id="myChartB"></canvas>
            </div>
            <!-- End Chart -->
        </div>
        <script>
            const ctx = document.getElementById('myChartB');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni'],
                    datasets: [{
                        label: '# Barang',
                        data: [12, 2, 3, 12, 2, 3],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    </div>
    <div class="col-lg-6">
        <div class="card-style mb-30">
            <div class="title d-flex flex-wrap justify-content-between">
                <div class="left">
                    <h6 class="text-medium mb-10">Data Peserta Lelang</h6>
                    <h3 class="text-bold">20 Peserta</h3>
                </div>
                <div class="right">
                    <div class="select-style-1">
                        <div class="select-position select-sm">
                            <select class="light-bg">
                                <option value="">Yearly</option>
                                <option value="">Monthly</option>
                                <option value="">Weekly</option>
                            </select>
                        </div>
                    </div>
                    <!-- end select -->
                </div>
            </div>
            <!-- End Title -->
            <div class="chart">
                <canvas id="myChartUser"></canvas>
            </div>
            <!-- End Chart -->
        </div>
        <script>
            const ctxu = document.getElementById('myChartUser');

            new Chart(ctxu, {
                type: 'bar',
                data: {
                    labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni'],
                    datasets: [{
                        label: '# Masyarakat',
                        data: [12, 19, 3, 5, 2, 3],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    </div>
</div>
<!-- END ChartJs -->

<!-- DATA PENGAJUAN LELANG -->
<div class="row">
    <div class="col-lg-12">
        <div class="card-style mb-30">
            <h6 class="mb-10">Data Pengajuan Barang Lelang RealTime</h6>
            <div class="table-wrapper table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="col-1">#</th>
                            <th class="col-3">Nama Barang</th>
                            <th class="col-2">Rilis</th>
                            <th class="col-2">Harga Barang</th>
                            <th class="col-2">Pemilik</th>
                            <th class="col-2 text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @forelse ($status as $data)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->nama_barang }}</td>
                            <td>{{ $data->tgl }}</td>
                            <td>{{ $data->formatRupiah('harga_awal') }}</td>
                            <td>{!! $data->nama_lengkap !!}</td>
                            <td>
                                <label class="btn btn-info">Belum Verifikasi</label>
                            </td>
                        </tr>
                        @empty
                        <div class="alert alert-danger">
                            Tidak ada barang yang diajukan oleh user.
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
                            <td>
                                <label class="btn btn-info">{!! $data->nama_petugas !!}</label>
                            </td>
                            <td></td>
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