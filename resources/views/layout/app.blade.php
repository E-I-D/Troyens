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
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">

        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="assets/css/fontawesome.css">
        <link rel="stylesheet" href="assets/css/owl.css">
    </head>

    <body>

    <!-- ***** Preloader Start ***** -->
    <!--div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div-->
    <!-- ***** Preloader End ***** -->

    <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-10">
                <div class="row">
                    <div class="col-2">
                        <p class="flash-info">Flash-Info:</p>
                    </div>
                    <div class="col-10">
                        <marquee>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint labore cupiditate, molestias qui tenetur minus quos </marquee>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
      <div class="header-container d-flex align-items-center justify-content-between">
        <div class="logo">
          <h1 class="text-light"><a href="{{ route('home')}}"><span>TROYENS</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <!--li><a class="nav-link scrollto active" href="{{ route('home')}}">Accueil</a></li-->
                <li class="dropdown"><a href="#"><span>Notre Association</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route('histoire')}}">Historique</a></li>
                        <li><a href="{{ route('bureau')}}">Le Bureau</a></li>
                        <li><a href="{{ route('message')}}">Mot du Président</a></li>
                        <li><a href="{{ route('objectif')}}">Nos Objectifs</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Nos Projets</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route('jde')}}">La journée de l'Excellence</a></li>
                        <li><a href="{{ route('jdt')}}">La journée du Troyens</a></li>
                        <li><a href="#">La cérémonie Hommage</a></li>
                        <li><a href="#">L'Etablissement le "TROYEN"</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Nos Activités</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Actions Sociales et de Solidarités</a></li>
                        <li class="dropdown"><a href="#"><span>Distinctions et Lauréats</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Grands Donateurs</a></li>
                                <li><a href="#">Donnateurs</a></li>
                                <li><a href="#">Ambassadeurs</a></li>
                                <li><a href="#">Palme d'Or</a></li>
                                <li><a href="#">Les Lauréats</a></li>
                                <li><a href="#">JDE</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Espace Jeux et Concours</a></li>
                        <li><a href="#">Les Donateurs</a></li>
                        <li class="dropdown"><a href="#"><span>Membres</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Adhérents</a></li>
                                <li><a href="#">Bénéficiares</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Médiathèques</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Photos</a></li>
                        <li><a href="#">Vidéos</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#contact">Nous Contacter</a></li>
                <li><a class="getstarted scrollto" href="{{ route('register')}}">Nous Rejoindre</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->


    @yield('content')

    @include('visitor.footer')

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="vendor/jquery/jquery.min.js"></script>

  <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>
</body>

</html>
