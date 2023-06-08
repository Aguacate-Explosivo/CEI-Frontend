<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="img/logo.webp">
    <title>CEI | Contacto</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Conexion con Email JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2/dist/email.min.js"></script>
    <!-- script con la key de emailjs -->
    <script type="text/javascript">
        (function() {
            emailjs.init('user_NbWHHoXNBSbJSJeC7s6uJ');
        })();
    </script>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
<!-- Google Web Fonts --><link rel="preload" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap">
</noscript>
<!-- Icon Font Stylesheet -->
<link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
</noscript>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" defer>
<!-- Libraries Stylesheet -->
<link href="lib/animate/animate.min.css" rel="stylesheet" async>
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" async>
<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" async>
<!-- Customized Bootstrap Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" async>
<!-- Template Stylesheet -->
<link href="css/style.css" rel="stylesheet" async>

</head>

<body  >  
   
    <?php require("cabecera.php");  ?>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Contacto</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="#">Otros</a></li>
                    <li class="breadcrumb-item text-success" aria-current="page">Contacto</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium text-success">Contactanos</p>
                <h1 class="display-5 mb-5">Si tiene alguna consulta, contáctenos</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="mb-4">Need a functional contact form?</h3>
                    <p class="mb-4">The contact form is currently
                         inactive. Get a functional and working contact
                          form with Ajax & PHP in a few minutes. Just 
                          copy and paste the files, add a little code
                           and you're don</p>
                    <form id="ContactoID">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="nombre_usuario" placeholder="Your Name">
                                    <label for="nombre_usuario">Tu Nombre</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email_usuario" placeholder="Your Email">
                                    <label for="email_usuario">Tu Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Tema(Opcional)</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" name="Texto" style="height: 200px"></textarea>
                                    <label for="message">Mensaje</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Enviar Mensaje</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h3 class="mb-4">Detalles De Contacto </h3>
                    <div class="d-flex border-bottom pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h6>Nuestras Oficinas</h6>
                            <span>Cra. 22 No 18B-10 B/ Nicolás Medrano - Ciudadela Universitaria.
                                Bloque 8, salón 316-318 Quibdó - Chocó, Colombia.</span>
                        </div>
                    </div>
                    <div class="d-flex border-bottom pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h6>Telefono</h6>
                            <span>+57 314 509 3025</span>
                        </div>
                    </div>
                    <div class="d-flex border-bottom-0 pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                            <i class="fa fa-envelope text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h6>Correo</h6>
                            <span>cei@utch.edu.co</span>
                        </div>
                    </div>
                    <iframe class="w-100 rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.2209256567858!2d-76.64873727610332!3d5.681174982380546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e488f4b7b97065f%3A0xc93c54459b0e76be!2sUtch%20Quibd%C3%B3%20choco%20Diego%20Luis%20C%C3%B3rdoba!5e0!3m2!1ses!2sco!4v1682359748412!5m2!1ses!2sco"
                     style="min-height: 300px; border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                   
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>
<script src="js/botones.js" defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" defer></script>
<script src="lib/wow/wow.min.js" defer></script>
<script src="lib/easing/easing.min.js" defer></script>
<script src="lib/waypoints/waypoints.min.js" defer></script>
<script src="lib/owlcarousel/owl.carousel.min.js" defer></script>
<?php require("footer.php"); ?>
<script src="lib/lightbox/js/lightbox.min.js" defer></script>
<!-- Template Javascript -->
<script src="js/main.js" defer></script>
<script src="sweet/dist/sweetalert2.all.min.js" defer></script>

          <!-- Codigo para enviar el correo al servidor -->
    <script type="text/javascript">
        window.onload = function() {
            document.getElementById('ContactoID').addEventListener('submit', function(event) {
                event.preventDefault();
                emailjs.sendForm('11932238243234854645', 'template_28hzft8', this)
                    .then(function() {
                        console.log('SUCCESS!');
                        alert(`Correo Enviado, Pronto le Responderemos a su peticion :D`)
                  }, function(error) {
                      console.log('FAILED...', error);
                  });
          });
      }
    </script>

</body>

</html>