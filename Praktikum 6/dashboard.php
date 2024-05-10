<?php
//include_once ('top.php');
//include_once ('menu.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UPTD Puskesmas Beji</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="Bizland/assets/img/logo-pb.jpg" rel="icon">
  <link href="Bizland/assets/img/logo-pb.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="Bizland/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="Bizland/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="Bizland/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="Bizland/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="Bizland/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="Bizland/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="Bizland/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>


<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">puskes.beji@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>(021) 7757033</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="dashboard.php">UPTD Puskesmas Beji<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="dashboard.php">Home</a></li>
          <li><a class="nav-link scrollto" href="pasien.php">Pasien</a></li>
          <li><a class="nav-link scrollto" href="periksa.php">Periksa</a></li>
          <li><a class="nav-link scrollto " href="paramedik.php">Paramedik</a></li>
          <li><a class="nav-link scrollto" href="unit_kerja.php">Layanan</a></li>
          
          </li>
          <li><a class="nav-link scrollto" href="login.php">Log out</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Selamat Datang di <span>Puskesmas Beji</span></h1>
      <h2>Kesehatan masyarakat adalah prioritas kami</h2>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        <a href="https://youtu.be/d-WqSxY-yMM?si=7WkeazDueOyuJbha" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Pasien</a></h4>
              <p class="description">Pasien adalah prioritas bagi kami</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Periksa</a></h4>
              <p class="description">Kamu dapat mengetahui hasil tensi darahmu lho</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Paramedik</a></h4>
              <p class="description">Kamu dapat melihat daftar paramedik yang terdapat di Puskesmas Beji</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Layanan</a></h4>
              <p class="description">Puskesmas Beji memiliki banyak layanan dan dapat kamu lihat di daftar layanan</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <h3>UPTD <span>Puskesmas Beji</span></h3>
          <p>Puskesmas yang sekarang memiliki pelayanan Rawat Jalan dan akan memiliki Rawat Inap. Awal berdiri Pukesmas Beji pada bulan Agustus tahun 1981. </p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="template/assets/img/pb.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>Akreditasi Puskesmas</h3>
            <p class="fst-italic">
              Akreditasi Paripurna
            </p>
            <ul>
              <li>
                <i class="bx bx-store-alt"></i>
                <div>
                  <h5>Visi Puskesmas</h5>
                  <p>Visi UPTD Puskesmas Beji mewujudkan masyarakat wilayah kerja UPTD Puskesmas Beji yang maju, berbudaya dan sejahtera</p>
                </div>
              </li>
              <li>
                <i class="bx bx-images"></i>
                <div>
                  <h5>Misi Puskesmas</h5>
                  <p>Meningkatkan tata kelola atau manajemen puskesmas dan pelayanan puskesmas yang modern dan pertisipatif</p>
                </div>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Footer ======= -->
  <footer id="footer">

<div class="footer-newsletter">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <h4>UPTD Puskesmas Beji</h4>
        <p>Portal UPTD Puskesmas Beji adalah suatu laporan puskesmas berbasis website yang tentunya dapat mempermudah masyarakat dalam berbagai hal. Contohnya Registrasi online, mengetahui antrean puskesmas dan mengecek jadwal layanan kesehatan puskesmas </p>
        <form action="" method="post">
          <input type="email" name="email"><input type="submit" value="Subscribe">
        </form>
      </div>
    </div>
  </div>
</div>

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>UPTD Puskesmas Beji<span>.</span></h3>
        <p>
          Jalan Bambon Raya No. 7B, RT.01/RW.01<br>
          Beji Timur, Kecamatan Beji<br>
          Kota Depok, Jawa Barat 16422 <br><br>
          <strong>Phone:</strong> 00217757033<br>
          <strong>Email:</strong> puskes.beji@gmail.com<br>
        </p>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Social Networks</h4>
        <p>Kunjungi Social Media kami</p>
        <div class="social-links mt-3">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="container py-4">
  <div class="copyright">
    &copy; Copyright <strong><span>UPTD Puskesmas Beji</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
  </div>
</div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="Bizland/assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="Bizland/assets/vendor/aos/aos.js"></script>
<script src="Bizland/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="Bizland/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="Bizland/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="Bizland/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="Bizland/assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="Bizland/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="Bizland/assets/js/main.js"></script>

</body>

<?php
//include_once ('bottom.php');
?>