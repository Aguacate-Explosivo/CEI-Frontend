<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="img/logo.webp">
    <title>CEI | Inicio</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css\style.css" rel="stylesheet">
</head>

<body  >  
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
   
   <?php require("cabecera.php");  ?>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7 text-start">
                                    <p class="fs-4 text-white animated slideInRight">Galeria De
                                        <strong>Eventos</strong>
                                    </p>
                                    <h1 class="display-1 text-white mb-4 animated slideInRight">Asiste a eventos recientes
                                        </h1>
                                            <!-- modal jejeje -->
                                                           <div class="ms-auto d-none d-lg-block">
                                       
                                                               <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Asistir a Evento</button>
                                                               
                                                               <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                 <div class="modal-dialog">
                                                                   <div class="modal-content">
                                                                     <div class="modal-header">
                                                                       <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                                                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                     </div>
                                                                     <div class="modal-body">
                                                                       <form>
                                                                         <div class="mb-3">
                                                                           <label for="recipient-name" class="col-form-label">Recipient:</label>
                                                                           <input type="text" class="form-control" id="recipient-name">
                                                                         </div>
                                                                         <div class="mb-3">
                                                                           <label for="message-text" class="col-form-label">Message:</label>
                                                                           <textarea class="form-control" id="message-text"></textarea>
                                                                         </div>
                                                                       </form>
                                                                     </div>
                                                                     <div class="modal-footer">
                                                                       <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                                                       <button type="button" class="btn btn-success">Send message</button>
                                                                     </div>
                                                                   </div>
                                                                 </div>
                                                               </div>
                                       
                                       
                                                           </div> 
                                                       <!-- modal jejeje -->                   
                                                       





                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/0.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-7 text-end">
                                    <p class="fs-4 text-white animated slideInLeft">Agenda <strong>Tu Cita</strong>
                                    </p>
                                    <h1 class="display-1 text-white mb-5 animated slideInLeft">simularemos tu emprendimiento</h1>
                                      <!-- modal jejeje -->
                                      <div class="ms-auto d-none d-lg-block">
                                       
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Agendar Citas</button>
                                        
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                              </div>
                                              <div class="modal-body">
                                                <form>
                                                  <div class="mb-3">
                                                    <label for="recipient-name" class="col-form-label">Recipient:</label>
                                                    <input type="text" class="form-control" id="recipient-name">
                                                  </div>
                                                  <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Message:</label>
                                                    <textarea class="form-control" id="message-text"></textarea>
                                                  </div>
                                                </form>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-success">Send message</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                
                
                                    </div> 
                                <!-- modal jejeje -->                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <p class="fs-5 fw-medium text-success">Sobre Nosotros</p>
                        <h1 class="display-6 mb-4">Frentes de trabajo </h1>
            <div class="row g-0 feature-row">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="img/icon/icon-1.png" alt="Icon">
                        </div>
                        <h5 class="mb-3">Investigación</h5>
                        <p class="mb-0">Desarrollo de metodología, herramientas, 
                            productos de emprendimiento
                            basados en la investigación científica de la universidad.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="img/icon/icon-2.png" alt="Icon">
                        </div>
                        <h5 class="mb-3">Formación</h5>
                        <p class="mb-0">Contribuir al fortalecimiento de los procesos de formación de la
                             universidad desde la perspectiva de emprendimiento.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="img/icon/icon-3.png" alt="Icon">
                        </div>
                        <h5 class="mb-3">Extensión</h5>
                        <p class="mb-0">Incentivar, desarrollar la participación y contribución en procesos que fortalezcan
                             la relación universidad, empresa, sociedad y estado.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="img/icon/icon-4.png" alt="Icon">
                        </div>
                        <h5 class="mb-3">Usuarios del programa</h5>
                        <p class="mb-0">» Personas emprendedoras <br</p>
                        <p class="mb-0">» Alumnos de pregrado y postgrados <br</p>
                        <p class="mb-0">» Empresas de egresados <br</p>
                        <p class="mb-0">» Grupos empresariales de universitarios <br</p>
                              
                            
                            
                              
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- About Start -->
    <div class="container-xxl about my-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="h-100 d-flex align-items-center justify-content-center" style="min-height: 300px;">
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 pt-lg-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white rounded-top p-5 mt-lg-5">
                        <p class="fs-5 fw-medium text-success">Sobre Nosotros</p>
                        <h1 class="display-6 mb-4">Centro De Emprendimiento e Innovacion</h1>
                        <p class="mb-4">Fomentar en los estudiantes proceso de formación por
                             competencias en emprendimiento, creatividad e innovación, con
                              enfoque hacia la generación de ideas 
                              emprendedoras sostenibles, con alto grado 
                              tecnológico e impacto social.</p>
                        <div class="row g-5 pt-2 mb-5">
                            <div class="col-sm-6">
                                <img class="img-fluid mb-4"  src="img/icon/11.png" alt="">
                                <h5 class="mb-3">Mision</h5>
                                <span>Clita erat ipsum et lorem et sit sed stet lorem</span>
                            </div>
                            <div class="col-sm-6">
                                <img class="img-fluid mb-4" src="img/icon/13.png" alt="">
                                <h5 class="mb-3">Vision</h5>
                                <span>Clita erat ipsum et lorem et sit sed stet lorem</span>
                            </div>
                        </div>
                        <a class="btn btn-success rounded-pill py-3 px-5" href="about.html">Conoce Mas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium text-success">Nuestros Servicios</p>
                <h1 class="display-5 mb-5">Centro De Emprendimiento e Innovacion</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="img/icon/icon-5.png" alt="Icon">
                            </div>
                            <h5 class="mb-3">Servicios de asesorías, consultorías y educación continuada.</h4>
                                <p class="mb-0">Se cuentan con profesionales especialistas capaces de 
                                    brindarles información y de guiarlos en su empresa y proyectos que
                                     deseen emprender en cualquier ámbito.</p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-primary fw-medium" href="service.html">Ver Mas<i
                                    class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="img/icon/icon-6.png" alt="Icon">
                            </div>
                            <h5 class="mb-3">Programas de capacitación en los niveles de cursos y Diplomados.</h4>
                                <p class="mb-0">La capacitación es muy importante para el desarrollo de 
                                    su crecimiento como persona y a nivel profesional, por eso el CEI 
                                    está especializado en brindarle un apoyo en su educación </p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-primary fw-medium" href="service.html">Ver Mas<i
                                    class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="img/icon/icon-7.png" alt="Icon">
                            </div>
                            <h5 class="mb-3">Organización de eventos regionales, nacionales 
                                e internacionales sobre emprendimiento, innovación y desarrollo
                                 empresarial </h4>
                                <p class="mb-0"> Estamos desde la planificación de los diferentes eventos
                                     que organiza el CEI como está la Semana Global del emprendimiento
                                      Utechino.</p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-primary fw-medium" href="service.html">Ver Mas<i
                                    class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                
        </div>
    </div>
    <!-- Service End -->


    <!-- Project Start -->
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <p class="fs-5 fw-medium text-success">Cursos Ofrecidos </p>
                <h1 class="display-5 mb-5">Curso Que Ofrece El CEI</h1>
            </div>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/project-1.jpg" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="img/project-1.jpg"
                                data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">Data Analytics & Insights</a>
                        <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span>
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/project-2.jpg" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="img/project-2.jpg"
                                data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">Marketing Content Strategy</a>
                        <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span>
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/project-3.jpg" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="img/project-3.jpg"
                                data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">Business Target Market</a>
                        <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span>
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/project-4.jpg" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="img/project-4.jpg"
                                data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">Social Marketing Strategy</a>
                        <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project End -->


    <!-- Quote Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="fs-5 fw-medium text-success">Contacto</p>
                    <h1 class="display-5 mb-4">Necesitas ayuda, Contactanos</h1>
                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita
                        erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                        eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                    <a class="d-inline-flex align-items-center rounded overflow-hidden border border-primary" href="">
                        <span class="btn-lg-square bg-success" style="width: 55px; height: 55px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </span>
                        <span class="fs-5 fw-medium mx-4" style="color:#33a921;">+57 314 509 3025
                        </span>
                    </a>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h2 class="mb-4">Contactanos</h2>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                                <label for="name">Nombre</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="mail" placeholder="Your Email">
                                <label for="mail">Correo</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="mobile" placeholder="Your Mobile">
                                <label for="mobile">Telefono</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="text" placeholder="Direccion">
                                <label for="text">Direccion</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" id="message"
                                    style="height: 130px"></textarea>
                                <label for="message">Mensaje</label>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn btn-success w-100 py-3" type="submit">Submit Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote Start -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium text-success">Estudiantes Destacados</p>
                <h1 class="display-5 mb-5">Aqui elogiamos a nuestros mejores Estudiantes</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="img/team-1.jpg" alt="">
                        <h5>Alex Robin</h5>
                        <span class="text-success">Estudiante ING. Agroforestal</span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="img/team-2.jpg" alt="">
                        <h5>Adam Crew</h5>
                        <span class="text-success">Estudiante Administracion </span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fa fa-envelope me-3"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="img/team-3.jpg" alt="">
                        <h5>Boris Johnson</h5>
                        <span class="text-success">Estudiante ING. Agroforestal</span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="img/team-4.jpg" alt="">
                        <h5>Robert Jordan</h5>
                        <span class="text-success">Estudiante ING. Agroforestal</span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">

                <p class="fs-5 fw-medium text-success">Talento Humano</p>
                <h1 class="display-5 mb-5">Conoce a algunos integrantes del CEI</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <img class="mb-4" src="img/dorian_perea_palacios.jpg" alt="">
                    <p class="mb-4">Es economista de profesión, tiene un Msc. en ciencias
                         económicas, Magister en desarrollo emprendedor e innovación,
                          Especialista desarrollo rural y Especialista en formación y
                           capacitación en emprendimiento.</p>
                    <h5>Dorian Perea Palacios</h5>
                    <span class="text-success">Coordinador Centro de Emprendimiento e Innovación.</span>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <img class="mb-4" src="img/jesus_cuesta_copete.jpg" alt="">
                    <p class="mb-4">Es administrador de empresas, Magister en desarrollo 
                        empresarial e innovación, Especialista en formación y capacitación 
                        en emprendimiento y Especialista en control organizacionalㅤㅤㅤㅤ
                        ㅤㅤㅤㅤㅤㅤ</p>
                    <h5>Jesús Antonio Cuesta Copete</h5>
                    <span class="text-success">Docente Asesor.</span>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <img class="mb-4" src="img/sebastian_murillo_barahona.jpg" alt="">
                    <p class="mb-4">Es administrador de empresas, Especialista en gerencia 
                        estratégica de mercados Magister en administración de negocios 
                        y estudiante de Doctorado en proyecto.</p>
                    <h5>Sebastián Murillo Barahonaㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ
                        ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ
                    </h5>
                    <span class="text-success">Asesor interno.</span>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <img class="mb-4" src="img/fadilio_fines_conto_garcia.jpg" alt="">
                    <p class="mb-4">Es economista especializado en finanzas públicas. 
                        Actualmente brinda capacitaciones de proyectos productivos
                         en el CEI.ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ
                         ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ
                         ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ
                         ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</p>
                    <h5>Fadilo Fines Conto García</h5>
                    <span class="text-success">Docente.</span>
                </div>
            </div>
        </div>

    </div>
    <!-- Testimonial End -->
<div>
    
</div>

    <!-- Footer Start -->

    <!-- Footer End -->
           
    
   


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
     <?php require("footer.php");  ?>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>

