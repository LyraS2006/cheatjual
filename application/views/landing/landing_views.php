<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Smakensa Esport Community</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="<?php echo base_url('assets/landing/assets/img/222.png'); ?>" rel="icon">
  <link href="<?php echo base_url('assets/landing/assets/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets/landing/assets/vendor/aos/aos.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/landing/assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/landing/assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/landing/assets/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/landing/assets/vendor/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/landing/assets/vendor/remixicon/remixicon.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/landing/assets/vendor/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('assets/landing/assets/css/style.css'); ?>" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('assets/landing/assets/css/style.css'); ?>">
  <link rel="stylesheet" href="<?= base_url("assets/css/myCss.css") ?>">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.html">BarangKu</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="<?php echo base_url('assets/landing/assets/img/logo.png'); ?>" alt="" class="img-fluid"></a>-->
      <?php $this->load->view('/landing/navbar'); ?>
    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Better Solutions For Your Business</h1>
          <h2>We are a team of talented designers making websites with Bootstrap</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>
        <!-- <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="<?php echo base_url('assets/landing/assets/img/hero-img.png'); ?>" class="img-fluid animated" alt="">
        </div> -->
      </div>
    </div>
  </section><!-- End Hero -->

  <!-- About Us Section -->
<section id="about" class="about">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Tentang Kami</h2>
    </div>
    <div class="row content">
      <div class="col-lg-6">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque pariatur amet recusandae praesentium enim ut nisi cum incidunt! A iusto unde similique cum obcaecati libero enim. Tempora, odit. Expedita, inventore?
        </p>
        <ul>
          <li><i class="ri-check-double-line"></i> lorem</li>
          <li><i class="ri-check-double-line"></i> ipsum</li>
          <li><i class="ri-check-double-line"></i> lorem</li>
          <li><i class="ri-check-double-line"></i> ipsum</li>
        </ul>
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0">
        <img src="<?= base_url('assets/landing/assets/img/12.png'); ?>" alt="" width="600" height="400" align="center">
      </div>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Contact</h2>
      <p></p>
    </div>
    <div class="info mt-5">
      <div class="address">
        <i class="bi bi-geo-alt"></i>
        <h4>Location:</h4>
        <p>SMKN 1 Bondowoso
            Jl. KH. Wahid Hasyim No.41, Blindungan, Kec. Bondowoso, Kabupaten Bondowoso, Jawa Timur 68212</p>
      </div>
      <div class="email">
        <i class="bi bi-envelope"></i>
        <h4>Email:</h4>
        <p>unkown@example.com</p>
      </div>
      <div class="phone">
        <i class="bi bi-phone"></i>
        <h4>Call:</h4>
        <p>+62 888-888-888</p>
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.8288647602403!2d113.82665327492121!3d-7.912938792110402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6dcc18c358503%3A0x11cd9c5a4f099793!2sSmkn%201%20Bondowoso!5e0!3m2!1sid!2sid!4v1695191826483!5m2!1sid!2sid"  width="800px" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('assets/landing/assets/vendor/aos/aos.js'); ?>"></script>
  <script src="<?= base_url('assets/landing/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?= base_url('assets/landing/assets/vendor/glightbox/js/glightbox.min.js'); ?>"></script>
  <script src="<?= base_url('assets/landing/assets/vendor/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
  <script src="<?= base_url('assets/landing/assets/vendor/swiper/swiper-bundle.min.js'); ?>"></script>
  <script src="<?= base_url('assets/landing/assets/vendor/waypoints/noframework.waypoints.js'); ?>"></script>
  <script src="<?= base_url('assets/landing/assets/vendor/php-email-form/validate.js'); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/landing/assets/js/main.js'); ?>"></script>
</body>

</html>