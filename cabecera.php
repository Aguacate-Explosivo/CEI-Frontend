<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de la página</title>
    <!-- Favicon -->
    <link href="/img/favicon.webp" rel="icon">

    <!-- ESTILOS -->
<link rel="preload" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap">
</noscript>
<link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" preload>
</noscript>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" preload>
<link href="lib/animate/animate.min.css" rel="stylesheet" async>
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" preload>
<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" async>
<link href="css/bootstrap.min.css" rel="stylesheet" preload>
<link href="css/style.css" rel="stylesheet" preload>
<!-- Agrega los enlaces de la librería Plyr -->
<link rel="stylesheet" href="https://cdn.plyr.io/3.6.2/plyr.css">
<script src="https://cdn.plyr.io/3.6.2/plyr.js"></script>

<!-- JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" defer></script>
<script src="lib/wow/wow.min.js" defer></script>
<script src="lib/easing/easing.min.js" defer></script>
<script src="lib/waypoints/waypoints.min.js" defer></script>
<script src="lib/owlcarousel/owl.carousel.min.js" defer></script>
<script src="lib/lightbox/js/lightbox.min.js" defer></script>
<script src="js/main.js" defer></script>

</head>
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-primary text-white d-none d-lg-flex">
        <div class="container py-3">
            <div class="d-flex align-items-center">
                <a href="index.php">
                    <img src="img/logo.webp" class="img-fluid" alt="#" width="120px" height="56px">
                </a>
                <div class="ms-auto d-flex align-items-center">
                    <small class="ms-4"><i class="fa fa-map-marker-alt me-3"></i>Cra. 22 No 18B-10 B/ Nicolás Medrano</small>
                    <small class="ms-4"><i class="fa fa-envelope me-3"></i> cei@utch.edu.co</small>
                    <small class="ms-4"><i class="fa fa-phone-alt me-3"></i>+57 314 509 3025</small>
                    <div class="ms-3 d-flex">
                        <a class="btn btn-sm-square btn-light text-success rounded-circle ms-2" target="_blank" href="https://web.facebook.com/ceiutch"><i class="fab fa-facebook-f" alt="BOTON FACEBOOK"></i></a>
                        <!-- <a class="btn btn-sm-square btn-light text-success rounded-circle ms-2" href=""><i class="fab fa-twitter" alt="BOTON TWITTER"></i></a> -->
                        <a class="btn btn-sm-square btn-light text-success rounded-circle ms-2" target="_blank" href="https://www.linkedin.com/in/centro-de-emprendimiento-e-innovaci%C3%B3n-796216186/"><i class="fab fa-linkedin-in" alt="BOTON LINKEDIN"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid bg-white sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
                <a href="index.php" class="navbar-brand d-lg-none">
                    <h1 class="fw-bold m-0"></h1>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" alt="MENU">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="index.php" class="nav-item nav-link" alt="BOTON INICIO">Inicio </a>
                        <a href="citas.php" class="nav-item nav-link" alt="BOTON AGENDAR CITA">Agendar Citas</a>
                        <a href="eventos.php" class="nav-item nav-link" alt="BOTON GALERIA DE EVENTOS">Galeria De Eventos</a>
                        <a href="cursos.php" class="nav-item nav-link" alt="BOTON CURSOS">Cursos</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" alt="BOTON OTROS">Otros</a>
                            <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                                <a href="nosotros.php" class="dropdown-item" alt="BOTON NOSOTROS">Nosotros</a>
                                <a href="servicios.php" class="dropdown-item" alt="BOTON ENCUESTA">Servicios</a>
                                <a href="encuesta.php" class="dropdown-item" alt="BOTON SERVICIOS">Encuesta</a>
                                <a href="formatos.php" class="dropdown-item" alt="BOTON DESCARGA FORMULARIOS">Descargar Formatos</a>
                                <a href="subida.php" class="dropdown-item" alt="BOTON SUBIDA FORMULARIOS">Subir Formatos</a>
                                <a href="contacto.php" class="dropdown-item" alt = "Botón de Formulario de Contacto Via Correo">Contacto</a>
                                <a href="actividades.php" class="dropdown-item" alt="BOTON De actividades Realizadas">Actividades Realizadas</a>
                                <a href="estructura_logo.php" class="dropdown-item" alt="BOTON De logo y estructura organizacional">Estructura y Logo</a>
                                <!-- <a href="#" class="dropdown-item">Quotation</a> -->
                                <!-- <a href="#" class="dropdown-item">404 Page</a> -->
                            </div>
                        </div>
                        <a href="login.php" class="nav-item nav-link">Login</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
</body>
</html>
