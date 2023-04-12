<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Parceiros</title>
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
             <li><a href="/">Home</a></li>
             <li><a href="parceiros" class="active">Parceiros</a></li>
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

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/eco_escolas.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Escola Secundária Filipa de Vilhena</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>Parceiros</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row position-relative">

          <div class="col-lg-7 about-img" style="background-image: url(assets/img/Eco_Mascote.jpg);"></div>

          <div class="col-lg-7">
            <h2>Eco Escolas Escola Secundária Filipa de Vilhena</h2>
            <div class="our-story">
              <h4>Fundado em 1996 pela ABAE </h4>
              <h3>Quem somos</h3>
              <p>Eco-Escolas é um programa internacional da “Foundation for Environmental Education”, desenvolvido em Portugal desde 1996 pela ABAE. Pretende encorajar ações e reconhecer o trabalho de qualidade desenvolvido pela escola, no âmbito da Educação Ambiental para a Sustentabilidade.
O programa é coordenado a nível internacional, nacional, regional e de escola. Esta coordenação multinível permite a confluência para objetivos, metodologias e critérios comuns que respeitam a especificidade de cada escola relativamente aos seus alunos e caraterísticas do meio envolvente.</p>
             
            <h3>Para Receber a Bandeira Verde:</h3>
            <h5> A escola tem de demonstrar ter seguido a metodologia dos 7 passos:</h5>

              <ul>
                <li><i class="bi bi-check-circle"></i> <span>1º Conselho Eco-Escolas,</span></li>
                <li><i class="bi bi-check-circle"></i> <span>2º Auditoria Ambiental,</span></li>
                <li><i class="bi bi-check-circle"></i> <span>3º Plano de Ação,</span></li>
                <li><i class="bi bi-check-circle"></i> <span>4º Trabalho Curricular,</span></li>
                <li><i class="bi bi-check-circle"></i> <span>5º Monitorização e Avaliação,</span></li>
                <li><i class="bi bi-check-circle"></i> <span>6º Envolvimento da Comunidade</span></li>
                <li><i class="bi bi-check-circle"></i> <span>7º Eco-Código.</span></li>
              </ul>
              <p>Concretizar pelo menos 2/3 do seu plano de ação;</p>
              
              <p>Realizar atividades no âmbito dos temas-base (água, resíduos e energia) e de pelo menos um dos temas do ano (2022-23: espaços exteriores e Biodiversidade: Preservar e Regenerar).</p>

              <div class="watch-video d-flex align-items-center position-relative">
                <i class="bi bi-play-circle"></i>
                <a href="https://www.youtube.com/watch?v=wD6W2P86Agw" class="glightbox stretched-link">Assista ao Video</a>
              </div>   
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End About Section -->

  

  

    <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    

          

         

</div>
</div>
</div>

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