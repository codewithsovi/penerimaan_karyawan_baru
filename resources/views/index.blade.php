
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="{{ asset('chain-1.0.0') }}/https://fonts.googleapis.com">
    <link rel="preconnect" href="{{ asset('chain-1.0.0') }}/https://fonts.gstatic.com" crossorigin>
    <link href="{{ asset('chain-1.0.0') }}/https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>Sistem Pendukung Keputusan</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('chain-1.0.0') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('chain-1.0.0') }}/https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('chain-1.0.0') }}/assets/css/templatemo-chain-app-dev.css">
    <link rel="stylesheet" href="{{ asset('chain-1.0.0') }}/assets/css/animated.css">
    <link rel="stylesheet" href="{{ asset('chain-1.0.0') }}/assets/css/owl.css">
  </head>

<body>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="{{ asset('chain-1.0.0') }}/index.html" class="logo">
              <img src="{{ asset('chain-1.0.0') }}/assets/images/logo-sspkb-putih.jpg" alt="Chain App Dev" width="25" height="45" style="margin-left: 20px;">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Beranda</a></li>
              <li class="scroll-to-section"><a href="#services">Proses</a></li>
              <li class="scroll-to-section"><a href="#about">Tentang</a></li>
              <li class="scroll-to-section"><a href="#pricing">Panduan</a></li>
              <li><div class="gradient-button"><a id="modal_trigger" href="{{ route('login') }}"><i class="fa fa-sign-in-alt"></i>Sign In</a></div></li>
            </ul>
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Sistem Seleksi <br> Karyawan Baru</h2>
                    <p>Selamat datang di sistem informasi hasil seleksi <br>karyawan baru</p>
                  </div>
                  <div class="col-lg-12">
                    <div class="white-button first-button scroll-to-section">
                      <a href="#about">About <i class="fab fa-apple"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{{ asset('chain-1.0.0') }}/assets/images/slider-dec.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4>Proses <em>Seleksi</em></h4>
            <img src="{{ asset('chain-1.0.0') }}/assets/images/heading-line-dec.png" alt="">
            <p>Metode yang digunakan dalam sistem ini adalah metode SAW (Simple Additive Weighting),
                yang membantu menghasilkan keputusan terbaik berdasarkan perhitungan nilai terbobot.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="service-item first-service">
            <div class="icon"></div>
            <h4>Administrasi</h4>
            <p>Penilai dokumen CV, surat lamaran, dan kualifikasi pendidikan serta pengalaman kerja.</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item second-service">
            <div class="icon"></div>
            <h4>Interview</h4>
            <p>You are allowed to use the Chain App Dev HTML template. Feel free to modify or edit this layout.</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item third-service">
            <div class="icon"></div>
            <h4>Penilaian sistem</h4>
            <p>Penilain sistem menggunakan metode SAW</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item fourth-service">
            <div class="icon"></div>
            <h4>Pengumuman Hasil Seleksi</h4>
            <p>Hanya bisa diakses oleh pelamar terverifikasi</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="section-heading">
            <h4>Tentang <em>Website</em> ini</h4>
            <img src="{{ asset('chain-1.0.0') }}/assets/images/heading-line-dec.png" alt="">
            <p>Tujuan website ini dibuat untuk mempermudah pelamar mengetahui hasil tanpa harus datang langsung.
                berikut adalah manfaat dari website ini :
            </p>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="box-item">
                <h4><a href="#">1</a></h4>
                <p>Membantu mengambil keputusan lebih objektif</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box-item">
                <h4><a href="#">2</a></h4>
                <p>Mengurangi bias dalam penilaian</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box-item">
                <h4><a href="#">3</a></h4>
                <p>Cepat dan efisien dalam proses seleksi</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box-item">
                <h4><a href="#">4</a></h4>
                <p>Berdasarkan metode SAW</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-image">
            <img src="{{ asset('chain-1.0.0') }}/assets/images/about-right-dec.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="pricing" class="pricing-tables">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4>Panduan <em>Login</em> Pelamar</h4>
            <img src="{{ asset('chain-1.0.0') }}/assets/images/heading-line-dec.png" alt="">
            <p>Hanya pelamar yang telah mengikuti interview yang bisa login.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="pricing-item-regular">
            <span class="price">1</span>
            <h4>Langkah Pertama</h4>
            <div class="icon">
              <img src="{{ asset('chain-1.0.0') }}/assets/images/pricing-table-01.png" alt="">
            </div>
            <ul>
              <li>Pastikan Anda sudah mengikuti tahap interview <br>
                 sesuai jadwal</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="pricing-item-pro">
            <span class="price">2</span>
            <h4>Login</h4>
            <div class="icon">
              <img src="{{ asset('chain-1.0.0') }}/assets/images/pricing-table-01.png" alt="">
            </div>
            <ul>
              <li>Login dengan email yang telah didaftarkan <br>dan gunakan tanggal Lahir untuk password</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="pricing-item-regular">
            <span class="price">3</span>
            <h4>Hasil Seleksi</h4>
            <div class="icon">
              <img src="{{ asset('chain-1.0.0') }}/assets/images/pricing-table-01.png" alt="">
            </div>
            <ul>
              <li>Jika Anda dinyatakan lulus seleksi. silakan hubungi admin di nomor yang tertera
                <br>Untuk informasi lebih lanjut mengenai proses berikutnya
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer id="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4>Sistem Penerimaan Karyawan Baru</h4>
          </div>
        </div>
        <div class="col-lg-6 offset-lg-3">
          <form id="search" action="#" method="GET">
            <div class="row">
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4>Kontak Kami</h4>
            <p>Sovi Alfi Nafilah - Indonesia</p>
            <p><a href="#">0877-6662-0429</a></p>
            <p><a href="#">s2pkb@gmail.com</a></p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4>Tentang</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">About</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4>Filosofi Logo Kami</h4>
            <div class="logo">
              <img src="{{ asset('chain-1.0.0') }}/assets/images/logo-sspkb-transparan.png"  width="90" height="90" alt="logo-s2pkb">
            </div>
            <p>Bentuk Geometris Berlapis Menunjukkan proses seleksi yang sistematis, bertahap, dan profesional Melambangkan kepercayaan, profesionalisme, dan perkembangan calon karyawan.</p>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <script src="{{ asset('chain-1.0.0') }}/vendor/jquery/jquery.min.js"></script>
  <script src="{{ asset('chain-1.0.0') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('chain-1.0.0') }}/assets/js/owl-carousel.js"></script>
  <script src="{{ asset('chain-1.0.0') }}/assets/js/animation.js"></script>
  <script src="{{ asset('chain-1.0.0') }}/assets/js/imagesloaded.js"></script>
  <script src="{{ asset('chain-1.0.0') }}/assets/js/popup.js"></script>
  <script src="{{ asset('chain-1.0.0') }}/assets/js/custom.js"></script>
</body>
</html>
