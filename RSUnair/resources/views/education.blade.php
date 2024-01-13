<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
  * Template Name: BizLand
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        
        <a href="index.html" class="logo">
            <img src="image/logo2.png" alt="University Logo" style="size: 20vh; margin: 5vh;">
        </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link " href="{{ route("landing") }}">Home</a></li>
          <li><a class="nav-link " href="{{ route("about") }}">About</a></li>
          <li><a class="nav-link" href="#services">Services & Resources</a></li>
          <li><a class="nav-link" href="#portfolio">Funding</a></li>
          <li><a class="nav-link active" href="{{ route("education") }}">Education & Training</a></li>
          <li><a class="nav-link" href="">Community Engagement</a></li>
          <li><a class="nav-link" href="#contact">Contact</a></li>
          <li><a class="nav-link" href="">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" style="background-image: url('image/riset.jpeg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <h1>Education and training

            <span>Universitas Airlangga</span>
        </h1>
        <h2>Continuing Research Education
        </h2>
        
    </div>
</section>

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services" >
        <div class="container" data-aos="fade-up">
              <!-- Larger and Centered Icon Box -->
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100" style="text-align: center; margin: 2%" >
                    <h1 class="title">
                        <a href="" style="font-size: 200%;">
                            Continuing Research <span style="color: blue;">Education</span>
                        </a>
                    </h1>                    
                    <h2 class="description" style="font-size: 120%; font-style: italic ">web-based learning management platform specifically designed to assist healthcare organizations in effectively creating, organizing, programs for their valuable healthcare workforce. Our platform empowers educators with the capability to seamlessly create engaging and informative lessons.
                    </h2>
                </div>

                <div class="row justify-content-center" style="margin-bottom: 10%">
                    <!-- Icon Box 1 -->
                    <a href="{{ route('login') }}">
                        <div class="col-3 mb-5" style="position: relative;">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="200" style="height: 400%; background-image: url('image/staff.JPG'); background-size: cover; filter: brightness(90%); position: relative;">
                                <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(73, 73, 73, 0.5);"></div>
                                <h4 class="title" style="color: black; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); ;"><a href="#" style="color: rgb(255, 255, 255)">STAFF</a></h4>
                            </div>
                        </div>
                    </a>

                    <!-- Icon Box 2 -->
                    <div class="col-3 mb-5" style="position: relative;">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200" style="height: 400%; background-image: url('image/student.jpeg'); background-size: cover; filter: brightness(90%); position: relative;">
                            <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(73, 73, 73, 0.5);"></div>
                            <h4 class="title" style="color: black; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); ;"><a href="#" style="color: rgb(255, 255, 255)">STUDENTS</a></h4>
                        </div>
                    </div>
                    
                    <!-- Icon Box 3 -->
                    <div class="col-3 mb-5" style="position: relative;">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200" style="height: 400%; background-image: url('image/trainee.jpg'); background-size: cover; filter: brightness(90%); ;">
                            <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(73, 73, 73, 0.5);"></div>
                            <h4 class="title" style="color: black; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); ;"><a href="#" style="color: rgb(255, 255, 255)">TRAINEE</a></h4>
                        </div>
                    </div>  
        </div>
    </section>
    


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">



    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>BizLand<span>.</span></h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
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
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
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
        &copy; Copyright <strong><span>BizLand</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
