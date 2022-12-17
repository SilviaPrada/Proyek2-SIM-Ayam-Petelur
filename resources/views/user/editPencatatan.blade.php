<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SIMAP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Ninestars - v4.9.1
  * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
   <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="logo">
        <h1 class="text-light"><img src="assets/img/logo.png" class="img-fluid animated" alt=""></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="home-user">Home</a></li>
          <li><a class="nav-link scrollto" href="home-user#about">Tentang Kami</a></li>
          <li><a class="nav-link scrollto" href="home-user#catat-ayam">Pencatatan Ayam</a></li>
          <li><a class="nav-link scrollto" href="home-user#hasil">Hasil Pencatatan</a></li>
          <li><a class="nav-link scrollto" href="home-user#hitung">Penghitungan</a></li>
          <li><a class="nav-link scrollto" href="home-user#info">Informasi</a></li>
          <li><a class="getstarted scrollto" href="login">Keluar</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->
  <section id="faq" class="faq section-bg">
    <br><br><br>
    <div class="section-title">
          <p>Edit Pencatatan Ayam</p>
    </div>  
  <div class="edit" data-aos="fade-up">
        <div data-aos="zoom-in" data-aos-delay="100" style="width: 420px; margin-left: auto; margin-right: auto; margin-top:">
        <br><br>
        <h3>Baterai A</h3>
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="column">
              <p>Baris</p>
                <select class="dropdown" name="baris" id="baris"> 
                  <option value="Baris 01">Baris 01</option>
                  <option value="Baris 02" selected>Baris 02</option>
                  <option value="Baris 03">Baris 03</option>
                  <option value="Baris 04">Baris 04</option>
                </select>
            </div>
            <div class="column">
              <p>Kolom</p>
                <select class="dropdown" name="kolom" id="kolom"> 
                <option value="Baris 01">Baris 01</option>
                  <option value="Baris 02">Baris 02</option>
                  <option value="Baris 03">Baris 03</option>
                  <option value="Baris 04" selected>Baris 04</option>
                </select>
            </div>
            <div class="column">
              <p>Waktu</p>
                <select class="dropdown" name="waktu" id="waktu">
                <option value="Pagi">Pagi</option>
                  <option value="Sore" selected>Sore</option>
                </select>
            </div>
          </div>
          <br>
          <p>Produktivitas</p>
          <div class="row">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
              <label class="form-check-label" for="inlineRadio1">Bertelur</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" checked>
              <label class="form-check-label" for="inlineRadio2">Tidak Bertelur</label>
            </div>
          </div>
          <p>Kondisi</p>
          <div class="row">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Sehat
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
              <label class="form-check-label" for="exampleRadios2">
                Mati
              </label>
            </div>
          </div>
          <div class="row">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Sakit
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
              <label class="form-check-label" for="exampleRadios2">
                Afkir
              </label>
            </div>
          </div>
          <br>
              <p>Jumlah telur</p>
              <div class="col-md-2">
                <input type="text" class="form-control" id="inputZip" placeholder="00">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="btn">
                <button class="btn btn-success" type="submit"><a href="home-user#hasil">Simpan</a></button>
              </div>
              <div class="btn">
                <button class="btn btn-danger" type="submit"><a href="home-user#hasil">Kembali</a></button>
              </div>
            </div>
        </div>
    </div>
</div>
    </section><!-- End F.A.Q Section -->
  
    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-md-6 footer-contact">
              <img src="assets/img/logo.png" class="img-fluid animated" alt="" height="300" width="100">
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <a href="#"><h4>Ketentuan Pemakaian</h4></a></li>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <a href="#"><h4>Privasi & Keamanan</h4></a></li>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="container py-4">
        <div class="copyright">
          &copy; 2022 <strong><span> Sistem Informasi Manajemen Ayam Petelur (SIMAP)</span></strong>
        </div>
    </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

