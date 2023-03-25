<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', $title)</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/lineicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/fullcalendar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />

    <!-- MOBILE RESPONSIVE -->
    <style>
        @media (max-width: 820px) {
            .hidden-mobile {
                display: none;
            }
        }
    </style>

</head>

<body>
    <!-- ======== sidebar-nav start =========== -->
    <aside class="sidebar-nav-wrapper">
        <div class="navbar-logo">
            <a href="index.html">
                <img src="{{ asset('') }}assets/images/logo/logo.svg" alt="logo" />
            </a>
        </div>
        <nav class="sidebar-nav">
            <ul>
                <li class="nav-item">
                    <a href="{{ route('userdashboard') }}">
                        <span class="icon">
                            <i class="lni lni-lineicons-symbol-alt-2"></i>
                        </span>
                        <span class="text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item nav-item-has-children">
                    <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#barang"
                        aria-controls="barang" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon">
                            <i class="lni lni-archive"></i>
                        </span>
                        <span class="text">Barang</span>
                    </a>
                    <ul id="barang" class="collapse dropdown-nav">
                        <li>
                            <a href="{{ route('penawaran.index') }}">
                                <span class="icon">
                                    <i class="lni lni-money-location"></i>
                                </span>
                                <span class="text">Penawaran</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pengajuan.create') }}">
                                <span class="icon">
                                    <i class="lni lni-reply"></i>
                                </span>
                                <span class="text">Pengajuan</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('userdashboard') }}">
                        <span class="icon">
                            <i class="lni lni-ticket-alt"></i>
                        </span>
                        <span class="text">Faktur Lelang</span>
                    </a>
                </li>
                <li class="nav-item nav-item-has-children">
                    <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_2"
                        aria-controls="ddmenu_2" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon">
                            <i class="lni lni-user"></i>
                        </span>
                        <span class="text">Akun</span>
                    </a>
                    <ul id="ddmenu_2" class="collapse dropdown-nav">
                        <li>
                            <a href="{{ route('userpassword') }}">
                                <span class="icon">
                                    <i class="lni lni-pencil-alt"></i>
                                </span>
                                <span class="text">Ganti Password</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('userpengaturan') }}">
                                <span class="icon">
                                    <i class="lni lni-cog"></i>
                                </span>
                                <span class="text">Pengaturan</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item ">
                    <a href="{{ route('logout') }}">
                        <span class="icon">
                            <i class="lni lni-power-switch"></i>
                        </span>
                        <span class="text"><b>LOGOUT</b></span>
                    </a>
                </li>
            </ul>
        </nav>
        <ul></ul>
    </aside>
    <div class="overlay"></div>
    <!-- ======== sidebar-nav end =========== -->

    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
        <!-- ========== header start ========== -->
        <header class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-6">
                        <div class="header-left d-flex align-items-center">
                            <div class="menu-toggle-btn mr-20">
                                <button id="menu-toggle" class="main-btn primary-btn btn-hover">
                                    <i class="lni lni-chevron-left me-2"></i> Menu
                                </button>
                            </div>
                            <script type='text/javascript'>
                                var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober',
                                    'November', 'Desember'
                                ];
                                var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
                                var date = new Date();
                                var day = date.getDate();
                                var month = date.getMonth();
                                var thisDay = date.getDay(),
                                    thisDay = myDays[thisDay];
                                var yy = date.getYear();
                                var year = (yy < 1000) ? yy + 1900 : yy;
                                document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                            </script>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-6">
                        <div class="header-right">
                            <!-- profile start -->
                            <div class="profile-box ml-15">
                                <button class="dropdown-toggle bg-transparent border-0" type="button" id="profile"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="profile-info">
                                        <div class="info">
                                            <h6 class="hidden-mobile">{{ Auth::user()->nama_lengkap }}</h6>
                                            <div class="image">
                                                <img src="../../assets/images/profile/profile-image.png"
                                                    alt="" />
                                                <span class="status"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <i class="lni lni-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">
                                    <li>
                                        <a href="{{ route('userpengaturan') }}">
                                            <i class="lni lni-user"></i> Lihat Profil
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('userpassword') }}"> <i class="lni lni-cog"></i> Ganti
                                            Password </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"> <i class="lni lni-exit"></i> Logout </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- profile end -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ========== header end ========== -->
        <section class="section">
            <div class="container-fluid">
                <!-- ========== title-wrapper start ========== -->
                <div class="title-wrapper pt-30">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="title mb-30">
                                <h2 id="ucapan">Hallo, <b>{{ Auth::user()->nama_lengkap }}</b></h2>
                                <script type='text/javascript'>
                                    var now = new Date();
                                    var hours = now.getHours();
                                    // Jam 4 Sore - 6 Sore
                                    if (hours >= 16 && hours <= 18) {
                                        document.write("Jangan lupa mandi dan sholat sudah sore :)");
                                        // Jam 7 Malam - 9 Malam
                                    } else if (hours >= 19 && hours <= 21) {
                                        document.write("Selamat malam, kalau capek istirahat ya!");
                                        // Jam 10 Malam - 2 Dini Hari
                                    } else if (hours >= 22 || hours <= 2) {
                                        document.write("Sudah larut malam, jangan lupa istirahat ^^");
                                        // Jam 2 Dini Hari - 4 Dini Hari
                                    } else if (hours >= 2 && hours <= 4) {
                                        document.write("Selamat pagi awali pagimu dengan berwudhu :D");
                                        // Jam 5 Pagi - 8 Pagi
                                    } else if (hours >= 5 && hours <= 8) {
                                        document.write("Buruan mandi sebelum kesiangan dan selamat berangkat kerja :3");
                                        // Jam 9 Pagi - 3 Sore
                                    } else if (hours >= 9 && hours <= 15) {
                                        document.write("Selamat siang, jangan lupa sarapan :p");
                                    }
                                </script>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-md-6">
                            <div class="breadcrumb-wrapper mb-30">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="#">
                                                <span id="clock"></span>
                                            </a>
                                            <script type="text/javascript">
                                                function showTime() {
                                                    var a_p = "";
                                                    var today = new Date();
                                                    var curr_hour = today.getHours();
                                                    var curr_minute = today.getMinutes();
                                                    var curr_second = today.getSeconds();
                                                    if (curr_hour < 12) {
                                                        a_p = "AM";
                                                    } else {
                                                        a_p = "PM";
                                                    }
                                                    if (curr_hour == 0) {
                                                        curr_hour = 12;
                                                    }
                                                    if (curr_hour > 12) {
                                                        curr_hour = curr_hour - 12;
                                                    }
                                                    curr_hour = checkTime(curr_hour);
                                                    curr_minute = checkTime(curr_minute);
                                                    curr_second = checkTime(curr_second);
                                                    document.getElementById('clock').innerHTML = curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
                                                }

                                                function checkTime(i) {
                                                    if (i < 10) {
                                                        i = "0" + i;
                                                    }
                                                    return i;
                                                }
                                                setInterval(showTime, 500);
                                                //
                                            </script>
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- ========== title-wrapper end ========== -->
                @yield('content')
                <!-- ========== footer start =========== -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 order-last order-md-first">
                                <div class="copyright text-center text-md-start">
                                    <script type="text/javascript">
                                        document.write(unescape(
                                            '%3c%70%20%63%6c%61%73%73%3d%22%74%65%78%74%2d%73%6d%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%43%6f%70%79%72%69%67%68%74%20%a9%20%3c%73%70%61%6e%20%69%64%3d%22%74%61%68%75%6e%22%3e%3c%2f%73%70%61%6e%3e%2e%20%41%6c%6c%20%72%69%67%68%74%73%20%72%65%73%65%72%76%65%64%2e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%61%20%68%72%65%66%3d%22%68%74%74%70%73%3a%2f%2f%61%72%61%74%61%64%65%76%2e%6d%79%2e%69%64%22%20%72%65%6c%3d%22%6e%6f%66%6f%6c%6c%6f%77%22%20%74%61%72%67%65%74%3d%22%5f%62%6c%61%6e%6b%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%49%68%73%61%6e%20%4d%61%75%6c%61%6e%61%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%61%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%70%3e'
                                        ));
                                    </script>
                                    <script>
                                        var tahun = date.getFullYear();
                                        document.getElementById('tahun').innerHTML = tahun;
                                    </script>
                                </div>
                            </div>
                            <!-- end col-->
                            <div class="col-md-6">
                                <div class="terms d-flex justify-content-center justify-content-md-end">
                                    <script type='text/javascript'>
                                        var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober',
                                            'November', 'Desember'
                                        ];
                                        var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
                                        var date = new Date();
                                        var day = date.getDate();
                                        var month = date.getMonth();
                                        var thisDay = date.getDay(),
                                            thisDay = myDays[thisDay];
                                        var yy = date.getYear();
                                        var year = (yy < 1000) ? yy + 1900 : yy;
                                        document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                                    </script>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </footer>
                <!-- ========== footer end =========== -->
    </main>
</body>

<!-- ========= All Javascript files linkup ======== -->
<script src="{{ asset('') }}assets/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('') }}assets/js/Chart.min.js"></script>
<script src="{{ asset('') }}assets/js/dynamic-pie-chart.js"></script>
<script src="{{ asset('') }}assets/js/moment.min.js"></script>
<script src="{{ asset('') }}assets/js/fullcalendar.js"></script>
<script src="{{ asset('') }}assets/js/jvectormap.min.js"></script>
<script src="{{ asset('') }}assets/js/world-merc.js"></script>
<script src="{{ asset('') }}assets/js/polyfill.js"></script>
<script src="{{ asset('') }}assets/js/main.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</html>
