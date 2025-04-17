<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MRTN SOL</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/mrtn.jpg')}}" rel="icon">
  <link href="{{asset('assets/img/mrtn.jpg')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Selecao
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="#hero" class="animate__animated animate__fadeInUp scrollto">MRTN SOL</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          {{--<li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>--}}
          <li><a class="nav-link scrollto" href="#team">Testimonials</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->

      @include('sections.hero-section')

  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->

       @include('sections.about-section')

    <!-- End About Section -->

    <!-- ======= Features Section ======= -->

       @include('sections.about.about-section-feature')
    
    <!-- End Features Section -->



    <!-- ======= Cta Section ======= -->

    {{--<section id="cta" class="cta">
      <div class="container">

        <div class="row" data-aos="zoom-out">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Our Technology Stack</h3>
            <p>At our company, we leverage a robust and modern technology stack to deliver high-quality software solutions.</p>
    
        <p>Our technology stack includes Laravel for elegant PHP web development, Vue.js and JavaScript for dynamic user interfaces, HTML, jQuery, and Bootstrap for responsive and interactive designs, and PHP for robust server-side scripting.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle animate__animated animate__fadeInUp scrollto" href="#hero">Discover Our Solutions</a>
        </div>
        </div>

      </div>
    </section>--}}


    {{--<section id="cta" class="cta">
  <div class="container">
    <div class="row align-items-center" data-aos="zoom-out">
      <div class="col-lg-3 text-center">
        <div class="laravel-icon-container">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNC4kMIrsWo_67GHURdA4MVwR_uj9_l-Sb5w&s" alt="Laravel" class="laravel-icon">
        </div>
      </div>
      <div class="col-lg-9 text-lg-start">
        <h3>Our Technology Stack</h3>
        <p>At our company, we leverage the power of <strong >Laravel</strong> to develop robust, scalable, and maintainable software solutions.</p>
      </div>
      <div class="col-lg-12 cta-btn-container text-center mt-3">
        <a class="cta-btn align-middle animate__animated animate__fadeInUp scrollto" href="#hero">Discover Our Solutions</a>
      </div>
    </div>
  </div>
</section>--}}


<section id="cta" class="cta">
  <div class="container">
    <div class="row align-items-center" data-aos="zoom-out">
      <div class="col-lg-3 text-center">
        <div class="icon-container">
          <img src="{{asset('assets/img/team/laravel.png')}}" alt="Laravel" class="icon">
        </div>
        <div class="icon-container">
          <img src="{{asset('assets/img/team/php.png')}}" alt="PHP" class="icon">
        </div>
      </div>
      <div class="col-lg-9 text-lg-start">
        <h3>Our Technology Stack</h3>
        <p>At our company, we leverage the power of <strong style="color: #ef6603;">Laravel</strong> and <strong style="color: #ef6603;">PHP</strong> to develop robust, scalable, and maintainable software solutions.</p>
      </div>
    </div>
  </div>
</section>






    <!-- End Cta Section -->

    <!-- ======= Services Section ======= -->

        @include('sections.services-section')

    <!-- End Services Section -->

    <!-- ======= Pricing Section ======= 

        @include('sections.pricing-section')  -->

    <!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->

        @include('sections.faq-section')

    <!-- End F.A.Q Section -->

    <!-- ======= Team Section ======= -->

        @include('sections.team-section')


    <!-- End Team Section -->

    <!-- ======= Contact Section ======= -->

        @include('sections.contact-section')

    <!-- End Contact Section -->

  </main>


  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>MRTN SOL</h3>
      <p>And either he who flees them is nothing. With great physical effort, choosing a flight is often the most convenient thing to do.</p>
      <div class="copyright">
        &copy; Copyright <strong><span><a href="#hero" class="animate__animated animate__fadeInUp scrollto">MRTN SOL</a></span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#hero" class="back-to-top d-flex align-items-center justify-content-center animate__animated animate__fadeInUp scrollto"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>