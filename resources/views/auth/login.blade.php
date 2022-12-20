
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

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="login" data-aos="fade-up">
        <div data-aos="zoom-in" data-aos-delay="100" style="width: 300px; margin-left: auto; margin-right: auto;">
        <br><br><br>
            <div>
            <center><img src="assets/img/logo.png" width="148px" height="143px">
              <center>
          </div>
          <br>
          <div>
            <h2 style="text-align:center;"><b>MANAJEMEN AYAM <br> PETELUR</b></h2>
          </div>

        <div style="width: 100;">
          <div class="text-center">
            <h3><b>Hallo!</b></h3>
          <p>Masukkan email dan password untuk memulai aplikasi</p>
          </p>
          </div>
          <div class="align-items-stretch" data-aos="fade-up" data-aos-delay="200" style="width: 100;">
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    {{-- <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div> --}}
                      <div class="form-group mt-3">
                          {{-- <label for="email">{{ __('Email Address') }}</label> --}}
                          @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                          <input type="email" name="email" class="form-control" placeholder="Email" required="">
                      </div>
                      <div class="form-group mt-3">
                          {{-- <label for="password">{{ __('Password') }}</label> --}}
                          <input id="password" type="password" class="form-control" placeholder="Password" @error('password') is-invalid @enderror name="password" required autocomplete="current-password">
                          @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>      
                        <br>
                    <div class="row mb-0">
                            <button type="submit" class="btn btn-warning" style="background-color: #EF7E16;">
                               <div style="color: #ffff">{{ __('Login') }}</div> 
                            </button>
                    </div>
                </form>
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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

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
