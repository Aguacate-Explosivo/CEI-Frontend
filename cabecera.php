<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de la página</title>
    <!-- Favicon -->
    <link href="/img/favicon.webp" rel="icon">

<!-- Icon Font Stylesheet -->
<link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
</noscript>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" defer>
<!-- Template Stylesheet -->
<link href="css/style.css" rel="stylesheet" async>

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
                        <a class="btn btn-sm-square btn-light text-success rounded-circle ms-2" href=""><i class="fab fa-facebook-f" alt="BOTON FACEBOOK"></i></a>
                        <a class="btn btn-sm-square btn-light text-success rounded-circle ms-2" href=""><i class="fab fa-twitter" alt="BOTON TWITTER"></i></a>
                        <a class="btn btn-sm-square btn-light text-success rounded-circle ms-2" href=""><i class="fab fa-linkedin-in" alt="BOTON LINKEDIN"></i></a>
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
                                <a href="servicios.php" class="dropdown-item" alt="BOTON SERVICIOS">Servicios</a>
                                <a href="#" class="dropdown-item" alt="BOTON DESCARGA FORMULARIOS">Descargar Formatos</a>
                                <!-- <a href="#" class="dropdown-item">Quotation</a> -->
                                <!-- <a href="#" class="dropdown-item">404 Page</a> -->
                            </div>
                        </div>
                        <a href="contacto.php" class="nav-item nav-link">Contacto</a>
                        <a href="login.php" class="nav-item nav-link">Login</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>
<script src="js/botones.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" defer></script>
<!-- Template Javascript -->
<script src="js/main.js" defer></script>
<script src="sweet/dist/sweetalert2.all.min.js" defer></script>
<script src="js/lazysizes.min.js"></script>
</body>
</html>
