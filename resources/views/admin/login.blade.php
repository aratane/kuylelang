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

</head>

<body>
  <div class="row g-0 auth-row">
    <div class="col-lg-6">
      <div class="auth-cover-wrapper bg-primary-100">
        <div class="auth-cover">
          <div class="title text-center">
            <h1 class="text-primary mb-10">Login Akun Admin</h1>
          </div>
          <div class="cover-image">
            <img src="{{ asset('') }}assets/images/auth/signin-image.svg" alt="" />
          </div>
          <div class="shape-image">
            <img src="{{ asset('') }}assets/images/auth/shape.svg" alt="" />
          </div>
        </div>
      </div>
    </div>
    <!-- end col -->
    <div class="col-lg-6">
      <div class="signup-wrapper">
        <div class="form-wrapper">
          @if(session('success'))
          <p class="alert alert-success">{{ session('success') }}</p>
          @endif
          @if($errors->any())
          @foreach($errors->all() as $err)
          <p class="alert alert-danger">{{ $err }}</p>
          @endforeach
          @endif
          <form method="POST" action="{{ route('adminlogin.action') }}">
            @csrf
            <div class="row">
              <div class="col-12">
                <div class="input-style-1">
                  <label>Username</label>
                  <input name="username" type="text" value="{{ old('username') }}" placeholder="Username anda ..." />
                </div>
              </div>
              <div class="col-12">
                <div class="input-style-1">
                  <label>Password</label>
                  <input name="password" type="password" placeholder="Password ..." />
                </div>
              </div>
              <!-- end col -->
              <div class="col-12">
                <div class="button-group d-flex justify-content-center flex-wrap">
                  <button class="main-btn primary-btn btn-hover w-100 text-center">Login</button>
                  <p class="text-sm text-medium text-dark text-center">
                    Belum punya akun? <a href="{{ route('register') }}">Silakan Registrasi</a>
                  </p>
                </div>
                <a class="main-btn danger-btn btn-hover w-100 text-center" href="{{ route('home') }}">Kembali</a>
              </div>
            </div>
            <!-- end row -->
          </form>
        </div>
      </div>
    </div>
    <!-- end col -->
  </div>
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