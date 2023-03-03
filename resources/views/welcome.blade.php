<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Homepage</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="shortcut icon" href="/assets/img/Logotipo.ico">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: UpConstruction - v1.2.1
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Solar Ready</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
     
      
      
      <nav id="navbar" class="navbar">
      
      
          <ul>
             <li><a href="/" class="active">Home</a></li>
             <li><a href="parceiros">Parceiros</a></li>
             <li><a href="contacto">Contacto</a></li>
             @if(!Auth::user())
             <li><a href="login">Iniciar sessão</a></li>
            @endif
             @if(Auth::user())
             <li><a href="{{route('logout')}}">Terminar sessão</a></li>
             @endif
          </ul>
      
      </nav><!-- .navbar -->
    
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down"> <span>Solar Ready</span></h2>
            <p data-aos="fade-up"></p>
            @if(Auth::check())
            <a data-aos="fade-up" data-aos-delay="200" href="/graficos" class="btn-get-started">Visualize dos gráficos</a>
          @endif
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(assets/img/sol.webp)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/bateria.jpg)"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->

 <!-- ======= About Section ======= -->
 <section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="row position-relative">

      <div class="col-lg-7 about-img" style="background-image: url(assets/img/arduíno.jpg);"></div>

      <div class="col-lg-7">
        <h2>Solar Ready</h2>
        <div class="our-story">
          <p>Solar Ready é um projeto criado para obter varias vantagens através de uma fonte de energia renovável Sol. O utilizador poderá carregar uma bateria de um telemóvel por exemplo através do sol, que vai fornecer energia ao painel solar que este por sua vez carrega uma bateria que poderá ser ligada a qualquer outro dispositivo ate 5V.</p>
                    
      </div>
    </div>
  </div>
</section>
<!-- End About Section -->
  

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    
       

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
           PAP <strong><span>Érico Veloso</span></strong>. TGPSI Escola Secundária Filipa de Vilhena 
        </div>
       
          
      </div>
    </div>

  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>