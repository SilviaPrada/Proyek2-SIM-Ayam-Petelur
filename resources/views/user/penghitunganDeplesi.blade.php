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
  <!-- ======= Hitung Section ======= -->
  <section id="hitung" class="hitung">
    <div class="container-fluid" data-aos="fade-up" data-aos-delay="200">
<br><br>
      <div class="section-title">
        <p>Penghitungan</p>
      </div>
          <div class="row ms-4 justify-content-center">
            <button type="button" class="btn btn1 active"><a href="/penghitunganDeplesi">Deplesi</a></button>
            <button type="button" class="btn btn1"><a href="/penghitunganHenDay">Hen Day</a></button>
            <button type="button" class="btn btn1"><a href="/penghitunganEggWeight">Egg Weight</a></button>
            <button type="button" class="btn btn1"><a href="/penghitunganFCR">FCR Total</a></button>
          </div>
          <br>
          <div class="desc">
            <p>Deplesi  digunakan untuk menghitung jumlah penyusutan ayam baik karena 
              kematian maupun karena afkir (culling).
            </p>
            <p id="deplesi"></p>
          </div><br><br>
          <form class="row justify-content-center ps-4" >
            <div class="col-md-4 ps-5" >
                  <label for="basic-url" class="form-label">Populasi ayam saat ini</label>
                  <input type="number" name="input1" id="input1" class="form-control" placeholder="0" aria-label="First name">
                </div>
            <div class="col-md-4 ps-5">
                <label for="basic-url" class="form-label">Jumlah ayam afkir/mati</label>
                <input type="number" name="input2" id="input2" class="form-control" placeholder="0" aria-label="Last name">
                </div>
              </div><br><br><br>
              <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <button type="button" onclick="hitung()" class="btn btn2">Hitung</button>
              </div><br>
              <div class="hasil" data-aos="fade-up" data-aos-delay="100">
                <p>Deplesi</p>
                <div class="akhir">
                <p id="hasil"></p>
                </div><br>
                <div class="riwayat">
                <p>Riwayat Penghitungan</p>
                </div>
              </div>
            </form>
      <!-- </div> -->
    </div>

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
  <script type="text/javascript">
  var input1 = document.getElementById('input1')
  var input2 = document.getElementById('input2')
  var hasil = document.getElementById('hasil')
  var deplesi = document.getElementById('deplesi')

  function hitung() {
    deplesi.textContent = Number(input1.value) / Number(input2.value) * 100
    hasil.innerHTML = 
		deplesi.textContent + "%"
  }
  </script>

</body>

</html>