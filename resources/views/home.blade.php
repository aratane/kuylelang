<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>My E-Lelang Website</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('') }}assets/home/img/favicon.png" rel="icon">
  <link href="{{ asset('') }}assets/home/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('') }}assets/home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('') }}assets/home/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('') }}assets/home/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('') }}assets/home/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('') }}assets/home/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('') }}assets/home/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="index.html">My E-Lelang</a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
          <li><a class="nav-link scrollto" href="#services">Keunggulan Kami</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Barang Lelang</a></li>
          <li><a class="nav-link scrollto" href="#testimonials">Testimoni Pelanggan</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
          <li><a class="getstarted scrollto" href="{{ route('login') }}">LOGIN</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Website Sistem<br>Pelelangan Barang Online</h1>
          <h2>Tingkatkan penjualan dengan mengikuti lelang di platform kami</h2>
          <div class="d-flex">
            <a href="{{ route('register') }}" class="btn-get-started scrollto">Registrasi Akun</a>
            <a href="#" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Profil Kami</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="{{ asset('') }}assets/home/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-laptop"></i></div>
              <h4 class="title"><a href="">Proses lebih cepat dan efisien</a></h4>
              <p class="description">Pada sistem pelelangan secara konvensional, biasanya waktu dari penyerahan berkas
                hingga selesai bisa memakan waktu hingga 7 minggu. Hal ini sangat memakan waktu bagi para pembeli dan
                penjual. Dengan sistem online, hal seperti verifikasi produk bisa dilakukan sebelumnya sehingga bisa
                mempercepat proses pelelangan. </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Lebih kompetitif</a></h4>
              <p class="description">Dengan cara penawaran secara online, para penjual akan lebih bersaing untuk
                menawarkan produk dan jasa yang ditawarkan. Maka dari itu, persaingan antar penjual akan menjadi lebih
                kompetitif dan pembeli akan memiliki lebih banyak pilihan saat melakukan bidding.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-clipboard-data"></i></div>
              <h4 class="title"><a href="">Transparan</a></h4>
              <p class="description">Sistem lelang online dilakukan secara terbuka di halaman website. Tidak ada
                prioritas atau batasan di antara para peserta, sehingga seluruh jalannya pelelangan bisa dipantau secara
                terbuka dan transparan bagi penjual dan pembeli.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="{{ asset('') }}assets/home/img/about.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>Tentang Aplikasi My E-Lelang</h3>
            <p class="fst-italic">
              Sistem lelang online merupakan sebuah digitalisasi dari bentuk pelelangan konvensional sekarang ini.
              Meskipun dilakukan secara online, sistem dan cara kerjanya tidak banyak berubah dari standar pelelangan
              konvensional.
            </p>
            <p>
              Selain lebih fleksibel, kelebihan lain menggunakan sistem online untuk melelang sebuah produk adalah
              banyaknya fitur unggulan yang bisa ditambahkan. Misalnya, Anda menawarkan sebuah produk dengan harga
              tertentu dan ada ratusan orang yang melakukan penawaran secara bersamaan.
            </p>
            <p>
              Secara konvensional, harus ada beberapa orang yang mencatat jalannya proses pelelangan tersebut dengan
              bidding masing-masing yang ditawarkan. Hal itu sangat rumit dibandingkan memindahkan aplikasi lelang Anda
              ke online. Dengan menggunakan aplikasi berbasis IT, maka pergerakan penawaran pun akan terekam secara
              sistematis dan terstruktur menggunakan sistem keamanan yang tinggi pula.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
              class="purecounter"></span>
            <p>Pelanggan</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
              class="purecounter"></span>
            <p>Barang Lelang</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="63" data-purecounter-duration="1"
              class="purecounter"></span>
            <p>Petugas Lelang</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
              class="purecounter"></span>
            <p>Administrator Perusahaan</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <span>Keunggulan Kami</span>
          <h2>Keunggulan Kami</h2>
          <p>Berikut ini beberapa keunggulan aplikasi lelang yang kami tawarkan kepada anda.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Akses Mudah Lelang</a></h4>
              <p>Akses website My e-Lelang kapanpun dan dimanapun didukung dengan server yang cepat.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Kualitas Barang Terjamin</a></h4>
              <p>Semua barang yang di ikutsertakan lelang sudah lolos verifikasi kualitas oleh setiap petugas lelang.
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Serba Terjangkau</a></h4>
              <p>Harga barang lelang yang di tawarkan di
                My e-Lelang relatif lebih murah .</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Pengiriman Barang Cepat</a></h4>
              <p>Kami bekerja sama dengan beberapa ekspedisi yang ada di Indonesia, semua barang yang kami kirim akan di
                prioritaskan terlebih dahulu.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">User management</a></h4>
              <p>Kami menyediakan fitur user management dengan tampilan yang mudah dipelajari oleh administrator. Fitur
                ini berguna untuk mengelola penjual serta pembeli dalam sebuah aplikasi.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Fitur penerimaan/penolakan lelang</a></h4>
              <p>Dalam sebuah pelelangan, akan ada seorang penjual yang akan menampilkan produk yang akan dilelang.
                Administrator memiliki tugas untuk menyetujui/menolak produk yang akan ditampilkan ke penjual. Maka dari
                itu, penting menyediakan fitur ini untuk dapat digunakan oleh administrator.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <span>Barang Lelang</span>
          <h2>Barang Lelang</h2>
          <p>Berikut ini adalah daftar barang-barang yang sedang di lelang</p>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{ asset('') }}assets/home/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="{{ asset('') }}assets/home/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="{{ asset('') }}assets/home/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="{{ asset('') }}assets/home/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{ asset('') }}assets/home/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="{{ asset('') }}assets/home/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="{{ asset('') }}assets/home/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="{{ asset('') }}assets/home/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="{{ asset('') }}assets/home/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="{{ asset('') }}assets/home/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{ asset('') }}assets/home/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="{{ asset('') }}assets/home/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="{{ asset('') }}assets/home/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="{{ asset('') }}assets/home/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="{{ asset('') }}assets/home/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="{{ asset('') }}assets/home/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="{{ asset('') }}assets/home/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="{{ asset('') }}assets/home/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <span>Testimoni Pelanggan</span>
          <h2>Testimoni Pelanggan</h2>
          <p>Beberapa kepuasan penilaian dari pelanggan kami</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Terbaik
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ asset('') }}assets/home/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                  alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Barang bagus
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ asset('') }}assets/home/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                  alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Tidak ada cacat
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ asset('') }}assets/home/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                  alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center">
          <h3>Bergabung Bersama Kami</h3>
          <p>Aplikasi lelang online yang sukses dapat membantu sebuah bisnis untuk menjangkau
            lebih banyak pelanggan dari berbagai segmen. <br>Melalui aplikasi lelang, para pelanggan dapat dengan mudah
            menerima informasi mengenai barang yang diinginkan <br> serta memudahkan mereka untuk ikut berpartisipasi
            dalam proses lelang. </p>
          <a class="cta-btn" href="user/registrasi.php">BERGABUNG</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Kontak</span>
          <h2>Kontak</h2>
          <p>Hubungi kami jika anda mempunyai pertanyaan lebih lanjut tentang aplikasi My E-Lelang.</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Kanto Kami:</h4>
                <p>Jl. Cisaranten Kulon No.17, Cisaranten Kulon, Kec. Arcamanik, Kota Bandung, Jawa Barat 40293</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>myelelang@gmail.com/p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>(62) 8637725232</p>
              </div>
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15842.656206572447!2d107.6791652!3d-6.9306977!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c2ade076ca49%3A0x3386663587285417!2sSekolah%20Menengah%20Kejuruan%20Igasar%20Pindad!5e0!3m2!1sid!2sid!4v1677126022389!5m2!1sid!2sid"
                frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Nama Lengkap Anda</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Alamat Email Anda</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Subjek</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Pesan</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Pesanmu sudah terkirim. Terima Kasih!</div>
              </div>
              <div class="text-center"><button type="submit">Kirim Pesan</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row  justify-content-center">
          <div class="col-lg-6">
            <h3>My E-Lelang</h3>
            <p>Aplikasi lelang online yang sukses dapat membantu sebuah bisnis untuk menjangkau
              lebih banyak pelanggan dari berbagai segmen.</p>
          </div>
        </div>

        <div class="row footer-newsletter justify-content-center">
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email" placeholder="Masukan Email anda ..."><input type="submit"
                value="Berlangganan">
            </form>
          </div>
        </div>

        <div class="social-links">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>My E-Lelang</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <script src="{{ asset('') }}assets/home/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{ asset('') }}assets/home/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('') }}assets/home/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('') }}assets/home/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset('') }}assets/home/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('') }}assets/home/vendor/php-email-form/validate.js"></script>

  <script src="{{ asset('') }}assets/home/js/main.js"></script>

</body>

</html>