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
          <li><a class="nav-link scrollto" href="/penghitunganDeplesi">Penghitungan</a></li>
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
          <p>Pencatatan Ayam</p>
    </div>  
  <div class="edit" data-aos="fade-up">
        <div data-aos="zoom-in" data-aos-delay="100" style="width: 420px; margin-left: auto; margin-right: auto; margin-top:">
          <br><br>
          <h3>Baterai A</h3>
        <form action="{{ route('pencatatanAyam.store') }}" method="POST" id="myForm" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                    <label for="waktu">Waktu</label>
                    <select id="waktu" name="waktu" class="select2bs4 form-control @error('waktu') is-invalid @enderror">
                        <option value="Pagi">Pagi</option>
                        <option value="Sore">Sore</option>
                    </select>
                </div>
            <div class="form-group">
                  <label for="kolom_id">Kolom Id</label>
                  <select id="kolom_id" name="kolom_id" class="form-control @error('kolom_id') is-invalid @enderror select2bs4">
                      <option value=""> Kolom Ayam</option>
                      <option value="01">01</option>
                      <option value="02">02</option>
                      <option value="03">03</option>
                      <option value="04">04</option>
                      <option value="05">05</option>
                      <option value="06">06</option>
                      <option value="07">07</option>
                      <option value="08">08</option>
                      <option value="09">09</option>
                      <option value="10">10</option>
                  </select>
            </div>
            <div class="form-group">
                <label for="produktifitas">Produktifitas</label>
                    <div class="form-check">
                        <input type='radio' id="produktifitasB" name='produktifitas' class="form-check-input" value="Bertelur">
                        <label for="produktifitasB" class="form-check-label"> Bertelur </label>
                    </div>
                    <div class="form-check">
                        <input type='radio' id="produktifitasTB" name='produktifitas' class="form-check-input" value="Tidak Bertelur">
                        <label for="produktifitasTB" class="form-check-label"> Tidak Bertelur </label>
                    </div>
            </div>
            <div class="form-group">
                <label for="kondisi">Kondisi</label>
                    <div class="form-check">
                        <input type='radio' id="kondisiSH" name='kondisi' class="form-check-input" value="Sehat">
                        <label for="kondisiSH" class="form-check-label"> Sehat </label>
                    </div>
                    <div class="form-check">
                        <input type='radio' id="kondisiSK" name='kondisi' class="form-check-input" value="Sakit">
                        <label for="kondisiSK" class="form-check-label"> Sakit </label>
                    </div>
                    <div class="form-check">
                        <input type='radio' id="kondisiMT" name='kondisi' class="form-check-input" value="Mati">
                        <label for="kondisiMT" class="form-check-label"> Mati </label>
                    </div>
                    <div class="form-check">
                        <input type='radio' id="kondisiAF" name='kondisi' class="form-check-input" value="Afkir">
                        <label for="kondisiAF" class="form-check-label"> Afkir </label>
                    </div>
            </div>
            <div class="form-group">
                <label for="jumlah_telur">Jumlah Telur</label>
                <input type='number' id="jumlah_telur" name='jumlah_telur' class="form-control @error('jumlah_telur') is-invalid @enderror" placeholder='000'>
            </div>
        </div>
        </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <a href="/" name="kembali" class="btn btn-default" id="back"><i class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</a> &nbsp;
          <button name="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i> &nbsp; Submit</button>
        </div>
      </form>
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

