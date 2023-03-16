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
                    <a href="{{ route('admindashboard') }}">
                        <span class="icon">
                            <i class="lni lni-lineicons-symbol-alt-2"></i>
                        </span>
                        <span class="text">Dashboard Admin</span>
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
                            <a href="{{ route('barang.create') }}">
                                <span class="icon">
                                    <i class="lni lni-money-location"></i>
                                </span>
                                <span class="text">Tambah Data</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('barang.index') }}">
                                <span class="icon">
                                    <i class="lni lni-money-location"></i>
                                </span>
                                <span class="text">List Data</span>
                            </a>
                        </li>
                        <!-- <li>
              <a href="{{ route('admindashboard') }}">
                <span class="icon">
                  <i class="lni lni-reply"></i>
                </span>
                <span class="text">Pengajuan</span>
              </a>
            </li> -->
                    </ul>
                </li>
                <li class="nav-item nav-item-has-children">
                    <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#admin"
                        aria-controls="admin" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon">
                            <i class="lni lni-archive"></i>
                        </span>
                        <span class="text">Petugas & Admin</span>
                    </a>
                    <ul id="admin" class="collapse dropdown-nav">
                        <li>
                            <a href="{{ route('petugas.create') }}">
                                <span class="icon">
                                    <i class="lni lni-money-location"></i>
                                </span>
                                <span class="text">Tambah Data</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('petugas.index') }}">
                                <span class="icon">
                                    <i class="lni lni-money-location"></i>
                                </span>
                                <span class="text">List Data</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-item-has-children">
                    <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#user"
                        aria-controls="user" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon">
                            <i class="lni lni-archive"></i>
                        </span>
                        <span class="text">Masyarakat</span>
                    </a>
                    <ul id="user" class="collapse dropdown-nav">
                        <li>
                            <a href="{{ route('user.create') }}">
                                <span class="icon">
                                    <i class="lni lni-money-location"></i>
                                </span>
                                <span class="text">Tambah Data</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('user.index') }}">
                                <span class="icon">
                                    <i class="lni lni-money-location"></i>
                                </span>
                                <span class="text">List Data</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admindashboard') }}">
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
                            <a href="{{ route('adminpassword') }}">
                                <span class="icon">
                                    <i class="lni lni-pencil-alt"></i>
                                </span>
                                <span class="text">Ganti Password</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('adminpengaturan') }}">
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
                            <!-- notification start -->
                            <div class="notification-box ml-15 d-none d-md-flex">
                                <button class="dropdown-toggle" type="button" id="notification"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="lni lni-alarm"></i>
                                    <span>2</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notification">
                                    <li>
                                        <a href="#0">
                                            <div class="image">
                                                <img src="assets/images/lead/lead-6.png" alt="" />
                                            </div>
                                            <div class="content">
                                                <h6>
                                                    John Doe
                                                    <span class="text-regular">
                                                        comment on a product.
                                                    </span>
                                                </h6>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consect etur adipiscing
                                                    elit Vivamus tortor.
                                                </p>
                                                <span>10 mins ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <div class="image">
                                                <img src="assets/images/lead/lead-1.png" alt="" />
                                            </div>
                                            <div class="content">
                                                <h6>
                                                    Jonathon
                                                    <span class="text-regular">
                                                        like on a product.
                                                    </span>
                                                </h6>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consect etur adipiscing
                                                    elit Vivamus tortor.
                                                </p>
                                                <span>10 mins ago</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- notification end -->
                            <!-- profile start -->
                            <div class="profile-box ml-15">
                                <button class="dropdown-toggle bg-transparent border-0" type="button" id="profile"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="profile-info">
                                        <div class="info">
                                            <h6 class="hidden-mobile">{{ Auth::guard('admin')->user()->nama_petugas }}
                                            </h6>
                                            <div class="image">
                                                <img src="assets/images/profile/profile-image.png" alt="" />
                                                <span class="status"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <i class="lni lni-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">
                                    <li>
                                        <a href="{{ route('adminpengaturan') }}">
                                            <i class="lni lni-user"></i> Lihat Profil
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('adminpassword') }}"> <i class="lni lni-cog"></i> Ganti
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
                                <h2 id="ucapan">Hallo, <b>{{ Auth::guard('admin')->user()->nama_petugas }}</b></h2>
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
            </div>
        </section>
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

<script>
    // ======== jvectormap activation
    var markers = [{
            name: "Egypt",
            coords: [26.8206, 30.8025]
        },
        {
            name: "Russia",
            coords: [61.524, 105.3188]
        },
        {
            name: "Canada",
            coords: [56.1304, -106.3468]
        },
        {
            name: "Greenland",
            coords: [71.7069, -42.6043]
        },
        {
            name: "Brazil",
            coords: [-14.235, -51.9253]
        },
    ];

    var jvm = new jsVectorMap({
        map: "world_merc",
        selector: "#map",
        zoomButtons: true,

        regionStyle: {
            initial: {
                fill: "#d1d5db",
            },
        },

        labels: {
            markers: {
                render: (marker) => marker.name,
            },
        },

        markersSelectable: true,
        selectedMarkers: markers.map((marker, index) => {
            var name = marker.name;

            if (name === "Russia" || name === "Brazil") {
                return index;
            }
        }),
        markers: markers,
        markerStyle: {
            initial: {
                fill: "#4A6CF7"
            },
            selected: {
                fill: "#ff5050"
            },
        },
        markerLabelStyle: {
            initial: {
                fontWeight: 400,
                fontSize: 14,
            },
        },
    });
    // ====== calendar activation
    document.addEventListener("DOMContentLoaded", function() {
        var calendarMiniEl = document.getElementById("calendar-mini");
        var calendarMini = new FullCalendar.Calendar(calendarMiniEl, {
            initialView: "dayGridMonth",
            headerToolbar: {
                end: "today prev,next",
            },
        });
        calendarMini.render();
    });

    // =========== chart one start
    const ctx1 = document.getElementById("Chart1").getContext("2d");
    const chart1 = new Chart(ctx1, {
        // The type of chart we want to create
        type: "line", // also try bar or other graph types

        // The data for our dataset
        data: {
            labels: [
                "Jan",
                "Fab",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec",
            ],
            // Information about the dataset
            datasets: [{
                label: "",
                backgroundColor: "transparent",
                borderColor: "#4A6CF7",
                data: [
                    600, 800, 750, 880, 940, 880, 900, 770, 920, 890, 976, 1100,
                ],
                pointBackgroundColor: "transparent",
                pointHoverBackgroundColor: "#4A6CF7",
                pointBorderColor: "transparent",
                pointHoverBorderColor: "#fff",
                pointHoverBorderWidth: 5,
                pointBorderWidth: 5,
                pointRadius: 8,
                pointHoverRadius: 8,
            }, ],
        },

        // Configuration options
        defaultFontFamily: "Inter",
        options: {
            tooltips: {
                callbacks: {
                    labelColor: function(tooltipItem, chart) {
                        return {
                            backgroundColor: "#ffffff",
                        };
                    },
                },
                intersect: false,
                backgroundColor: "#f9f9f9",
                titleFontFamily: "Inter",
                titleFontColor: "#8F92A1",
                titleFontColor: "#8F92A1",
                titleFontSize: 12,
                bodyFontFamily: "Inter",
                bodyFontColor: "#171717",
                bodyFontStyle: "bold",
                bodyFontSize: 16,
                multiKeyBackground: "transparent",
                displayColors: false,
                xPadding: 30,
                yPadding: 10,
                bodyAlign: "center",
                titleAlign: "center",
            },

            title: {
                display: false,
            },
            legend: {
                display: false,
            },

            scales: {
                yAxes: [{
                    gridLines: {
                        display: false,
                        drawTicks: false,
                        drawBorder: false,
                    },
                    ticks: {
                        padding: 35,
                        max: 1200,
                        min: 500,
                    },
                }, ],
                xAxes: [{
                    gridLines: {
                        drawBorder: false,
                        color: "rgba(143, 146, 161, .1)",
                        zeroLineColor: "rgba(143, 146, 161, .1)",
                    },
                    ticks: {
                        padding: 20,
                    },
                }, ],
            },
        },
    });

    // =========== chart one end

    // =========== chart two start
    const ctx2 = document.getElementById("Chart2").getContext("2d");
    const chart2 = new Chart(ctx2, {
        // The type of chart we want to create
        type: "bar", // also try bar or other graph types
        // The data for our dataset
        data: {
            labels: [
                "Jan",
                "Fab",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec",
            ],
            // Information about the dataset
            datasets: [{
                label: "",
                backgroundColor: "#4A6CF7",
                barThickness: 6,
                maxBarThickness: 8,
                data: [
                    600, 700, 1000, 700, 650, 800, 690, 740, 720, 1120, 876, 900,
                ],
            }, ],
        },
        // Configuration options
        options: {
            borderColor: "#F3F6F8",
            borderWidth: 15,
            backgroundColor: "#F3F6F8",
            tooltips: {
                callbacks: {
                    labelColor: function(tooltipItem, chart) {
                        return {
                            backgroundColor: "rgba(104, 110, 255, .0)",
                        };
                    },
                },
                backgroundColor: "#F3F6F8",
                titleFontColor: "#8F92A1",
                titleFontSize: 12,
                bodyFontColor: "#171717",
                bodyFontStyle: "bold",
                bodyFontSize: 16,
                multiKeyBackground: "transparent",
                displayColors: false,
                xPadding: 30,
                yPadding: 10,
                bodyAlign: "center",
                titleAlign: "center",
            },

            title: {
                display: false,
            },
            legend: {
                display: false,
            },

            scales: {
                yAxes: [{
                    gridLines: {
                        display: false,
                        drawTicks: false,
                        drawBorder: false,
                    },
                    ticks: {
                        padding: 35,
                        max: 1200,
                        min: 0,
                    },
                }, ],
                xAxes: [{
                    gridLines: {
                        display: false,
                        drawBorder: false,
                        color: "rgba(143, 146, 161, .1)",
                        zeroLineColor: "rgba(143, 146, 161, .1)",
                    },
                    ticks: {
                        padding: 20,
                    },
                }, ],
            },
        },
    });
    // =========== chart two end

    // =========== chart three start
    const ctx3 = document.getElementById("Chart3").getContext("2d");
    const chart3 = new Chart(ctx3, {
        // The type of chart we want to create
        type: "line", // also try bar or other graph types

        // The data for our dataset
        data: {
            labels: [
                "Jan",
                "Fab",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec",
            ],
            // Information about the dataset
            datasets: [{
                    label: "Revenue",
                    backgroundColor: "transparent",
                    borderColor: "#4a6cf7",
                    data: [80, 120, 110, 100, 130, 150, 115, 145, 140, 130, 160, 210],
                    pointBackgroundColor: "transparent",
                    pointHoverBackgroundColor: "#4a6cf7",
                    pointBorderColor: "transparent",
                    pointHoverBorderColor: "#fff",
                    pointHoverBorderWidth: 3,
                    pointBorderWidth: 5,
                    pointRadius: 5,
                    pointHoverRadius: 8,
                },
                {
                    label: "Profit",
                    backgroundColor: "transparent",
                    borderColor: "#9b51e0",
                    data: [
                        120, 160, 150, 140, 165, 210, 135, 155, 170, 140, 130, 200,
                    ],
                    pointBackgroundColor: "transparent",
                    pointHoverBackgroundColor: "#9b51e0",
                    pointBorderColor: "transparent",
                    pointHoverBorderColor: "#fff",
                    pointHoverBorderWidth: 3,
                    pointBorderWidth: 5,
                    pointRadius: 5,
                    pointHoverRadius: 8,
                },
                {
                    label: "Order",
                    backgroundColor: "transparent",
                    borderColor: "#f2994a",
                    data: [180, 110, 140, 135, 100, 90, 145, 115, 100, 110, 115, 150],
                    pointBackgroundColor: "transparent",
                    pointHoverBackgroundColor: "#f2994a",
                    pointBorderColor: "transparent",
                    pointHoverBorderColor: "#fff",
                    pointHoverBorderWidth: 3,
                    pointBorderWidth: 5,
                    pointRadius: 5,
                    pointHoverRadius: 8,
                },
            ],
        },

        // Configuration options
        options: {
            tooltips: {
                intersect: false,
                backgroundColor: "#fbfbfb",
                titleFontColor: "#8F92A1",
                titleFontSize: 16,
                titleFontFamily: "Inter",
                titleFontStyle: "400",
                bodyFontFamily: "Inter",
                bodyFontColor: "#171717",
                bodyFontSize: 16,
                multiKeyBackground: "transparent",
                displayColors: false,
                xPadding: 30,
                yPadding: 15,
                borderColor: "rgba(143, 146, 161, .1)",
                borderWidth: 1,
                title: false,
            },

            title: {
                display: false,
            },

            layout: {
                padding: {
                    top: 0,
                },
            },

            legend: false,

            scales: {
                yAxes: [{
                    gridLines: {
                        display: false,
                        drawTicks: false,
                        drawBorder: false,
                    },
                    ticks: {
                        padding: 35,
                        max: 300,
                        min: 50,
                    },
                }, ],
                xAxes: [{
                    gridLines: {
                        drawBorder: false,
                        color: "rgba(143, 146, 161, .1)",
                        zeroLineColor: "rgba(143, 146, 161, .1)",
                    },
                    ticks: {
                        padding: 20,
                    },
                }, ],
            },
        },
    });
    // =========== chart three end

    // ================== chart four start
    const ctx4 = document.getElementById("Chart4").getContext("2d");
    const chart4 = new Chart(ctx4, {
        // The type of chart we want to create
        type: "bar", // also try bar or other graph types
        // The data for our dataset
        data: {
            labels: ["Jan", "Fab", "Mar", "Apr", "May", "Jun"],
            // Information about the dataset
            datasets: [{
                    label: "",
                    backgroundColor: "#4A6CF7",
                    barThickness: "flex",
                    maxBarThickness: 8,
                    data: [600, 700, 1000, 700, 650, 800],
                },
                {
                    label: "",
                    backgroundColor: "#d50100",
                    barThickness: "flex",
                    maxBarThickness: 8,
                    data: [690, 740, 720, 1120, 876, 900],
                },
            ],
        },
        // Configuration options
        options: {
            borderColor: "#F3F6F8",
            borderWidth: 15,
            backgroundColor: "#F3F6F8",
            tooltips: {
                callbacks: {
                    labelColor: function(tooltipItem, chart) {
                        return {
                            backgroundColor: "rgba(104, 110, 255, .0)",
                        };
                    },
                },
                backgroundColor: "#F3F6F8",
                titleFontColor: "#8F92A1",
                titleFontSize: 12,
                bodyFontColor: "#171717",
                bodyFontStyle: "bold",
                bodyFontSize: 16,
                multiKeyBackground: "transparent",
                displayColors: false,
                xPadding: 30,
                yPadding: 10,
                bodyAlign: "center",
                titleAlign: "center",
            },

            title: {
                display: false,
            },
            legend: {
                display: false,
            },

            scales: {
                yAxes: [{
                    gridLines: {
                        display: false,
                        drawTicks: false,
                        drawBorder: false,
                    },
                    ticks: {
                        padding: 35,
                        max: 1200,
                        min: 0,
                    },
                }, ],
                xAxes: [{
                    gridLines: {
                        display: false,
                        drawBorder: false,
                        color: "rgba(143, 146, 161, .1)",
                        zeroLineColor: "rgba(143, 146, 161, .1)",
                    },
                    ticks: {
                        padding: 20,
                    },
                }, ],
            },
        },
    });
    // =========== chart four end
</script>

</html>
