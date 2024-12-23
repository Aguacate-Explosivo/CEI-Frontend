<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="img/logo.webp">
    <title>CEI | Inicio</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
<link href="img/favicon.webp" rel="icon">
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
                    <img class="w-100" src="img/2.webp" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7 text-start">
                                    <p class="fs-4 text-white animated slideInRight">Galeria De
                                        <strong>Eventos</strong>
                                    </p>
                                    <h1 class="display-1 text-white mb-4 animated slideInRight">Asiste a eventos recientes
                                        </h1>
                                        <!-- <a type="button" href="eventos.php" class="btn btn-primary">Asiste a eventos</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/0.webp" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-7 text-end">
                                    <p class="fs-4 text-white animated slideInLeft">Agenda <strong>Tu Cita</strong>
                                    </p>
                                    <h1 class="display-1 text-white mb-5 animated slideInLeft">Simularemos tu emprendimiento</h1>
                                    <!-- <a type="button" href="citas.php" class="btn btn-primary">Citas</a> -->
                     
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
                            <img class="img-fluid" src="img/icon/icon-1.webp" alt="Icon">
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
                            <img class="img-fluid" src="img/icon/icon-2.webp" alt="Icon">
                        </div>
                        <h5 class="mb-3">Formación</h5>
                        <p class="mb-0">Contribuir al fortalecimiento de los procesos de formación de la
                             universidad desde la perspectiva de emprendimiento.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="img/icon/icon-3.webp" alt="Icon">
                        </div>
                        <h5 class="mb-3">Extensión</h5>
                        <p class="mb-0">Incentivar, desarrollar la participación y contribución en procesos que fortalezcan
                             la relación universidad, empresa, sociedad y estado.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="img/icon/icon-4.webp" alt="Icon">
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
    <div class="container-xxl about py-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="h-100 d-flex align-items-center justify-content-center" style="min-height: 300px;">
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="" data-bs-target="#videoModal">
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
                                <img class="img-fluid mb-4"  src="img/icon/11.webp" alt="">
                                <h5 class="mb-3">Mision</h5>
                                <span>Clita erat ipsum et lorem et sit sed stet lorem</span>
                            </div>
                            <div class="col-sm-6">
                                <img class="img-fluid mb-4" src="img/icon/13.webp" alt="">
                                <h5 class="mb-3">Vision</h5>
                                <span>Clita erat ipsum et lorem et sit sed stet lorem</span>
                            </div>
                        </div>
                        <a class="btn btn-primary" href="nosotros.php">Conoce Mas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
 <!-- Video Modal Start -->
<div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- El contenedor para el reproductor Plyr -->
                <div id="plyr-video-player">
                    <!-- La URL de incrustación del video de YouTube -->
                    <iframe style="width: 100%;  height: 400px;  " src="https://www.youtube.com/embed/K5_1I5dB-K8" allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal End -->

<!-- Script para inicializar el reproductor Plyr después de cargar el modal -->
<script>
    // Cuando el modal se muestra, inicializa el reproductor Plyr
    $('#videoModal').on('shown.bs.modal', function () {
        const player = new Plyr('#plyr-video-player iframe');
    });
</script>

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s">
                <p class="fs-5 fw-medium text-success">Nuestros Servicios</p>
                <h1 class="display-6 mb-4">Centro De Emprendimiento e Innovacion</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="img/icon/icon-5.webp" alt="Icon">
                            </div>
                            <h5 class="mb-3">Servicios de asesorías, consultorías y educación continuada.</h4>
                                <p class="mb-0">Se cuentan con profesionales especialistas capaces de 
                                    brindarles información y de guiarlos en su empresa y proyectos que
                                     deseen emprender en cualquier ámbito.</p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-success fw-medium" href="nosotros.php">Ver Mas<i
                                    class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="img/icon/icon-6.webp" alt="Icon">
                            </div>
                            <h5 class="mb-3">Programas de capacitación en los niveles de cursos y Diplomados.</h4>
                                <p class="mb-0">La capacitación es muy importante para el desarrollo de 
                                    su crecimiento como persona y a nivel profesional, por eso el CEI 
                                    está especializado en brindarle un apoyo en su educación.ㅤㅤㅤㅤㅤㅤㅤㅤ</p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-success fw-medium" href="nosotros.php">Ver Mas<i
                                    class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="img/icon/icon-7.webp" alt="Icon">
                            </div>
                            <h5 class="mb-3">Organización de eventos regionales, nacionales 
                                e internacionales sobre emprendimiento, innovación y desarrollo
                                 empresarial </h4>
                                <p class="mb-0"> Estamos desde la planificación de los diferentes eventos
                                     que organiza el CEI como está la Semana Global del emprendimiento
                                      Utechino.</p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-success fw-medium" href="nosotros.php">Ver Mas<i
                                    class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                
        </div>
    </div>
    <!-- Service End -->
    <style>
    .custom-container {
        width: 100%; 
        padding-top: 50px; 
        padding-bottom: 70px; 
    }

    .course-image {
        width: 100%;
        height: 200px; 
        object-fit: cover; 
    }

    .project-item {
        width: 300px; 
        margin: 0 auto; 
        min-height: 10%;
        max-height: 20% ;
    }
</style>


 <!-- Project Start -->
<div class="custom-container pt-5">
    <div class="container">
        <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
            style="max-width: 500px;">
            <p class="fs-5 fw-medium text-success">Cursos Ofrecidos </p>
            <h1 class="display-6 mb-4">Curso Que Ofrece El CEI</h1>
        </div>
        <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">

            <?php
            include("conexion.php");
            $conexion = conectar();

            $consulta = "SELECT * FROM `cursos`;";
            $resultado = mysqli_query($conexion, $consulta);

            foreach ($resultado as $row) {
                $id = $row["Id_Curso"];
            ?>
                <!-- Fin bd -->
                <!-- Estructura de Curso -->
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img src="data:image/jpg;base64,<?php echo base64_encode($row["imagen"]); ?>" class="img-fluid course-image">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="data:image/jpg;base64,<?php echo base64_encode($row["imagen"]); ?>"
                                data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="cursos.php"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <h5 class="card-title" href=""> <?php echo $row["NombreCurso"]; ?></h5>
                        <p>Encargado: <?php echo $row["EncargadoCurso"]; ?></p>
                        <br>
                        <span>Descripcion: <?php echo $row["DescripcionCurso"]; ?></span>
                    </div>
                    <div style="margin-left: 20px; margin-bottom: 20px;">
                        <a style="margin: 2px; border-radius: 5px;" href="inscripcursos.php?Id_Curso=<?php echo $row["Id_Curso"]?>" class="btn btn-primary"> Unirse a Curso</a>
                        <br>
                        <a href=""></a>
                    </div>
                </div>

            <?php } ?>

        </div>
    </div>
</div>
<!-- Project End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s" >
                <p class="fs-5 fw-medium text-success">Estudiantes Destacados</p>
                <h1 class="display-6 mb-4">Aqui elogiamos a nuestros emprendedores Utchinos</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4 " src="img/team-1.webp" alt="">
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
                        <img class="img-fluid mb-4" src="img/team-2.webp" alt="">
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
                        <img class="img-fluid mb-4" src="img/team-3.webp" alt="">
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
                        <img class="img-fluid mb-4" src="img/team-4.webp" alt="equipo">
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
                >
                <p class="fs-5 fw-medium text-success">Talento Humano</p>
                <h1 class="display-6 mb-4">Conoce a algunos integrantes del CEI</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <img class="mb-4" src="img/dorian_perea_palacios.webp" alt="Profesor Dorian">
                    <p class="mb-4">Es economista de profesión, tiene un Msc. en ciencias
                         económicas, Magister en desarrollo emprendedor e innovación,
                          Especialista desarrollo rural y Especialista en formación y
                           capacitación en emprendimiento.</p>
                    <h5>Dorian Perea Palacios</h5>
                    <span class="text-success">Coordinador Centro de Emprendimiento e Innovación.</span>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <img class="mb-4" src="img/jesus_cuesta_copete.webp" alt="Profesor Jesus">
                    <p class="mb-4">Es administrador de empresas, Magister en desarrollo 
                        empresarial e innovación, Especialista en formación y capacitación 
                        en emprendimiento y Especialista en control organizacional ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</p>
                    <h5>Jesús Antonio Cuesta Copete</h5>
                    <span class="text-success">Docente Asesor.</span>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <img class="mb-4" src="img/sebastian_murillo_barahona.webp" alt="Profesor Sebastian">
                    <p class="mb-4">Es administrador de empresas, Especialista en gerencia 
                        estratégica de mercados Magister en administración de negocios 
                        y estudiante de Doctorado en proyecto.ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</p>
                    <h5>Sebastián Murillo Barahona</h5>
                    <span class="text-success">Asesor interno.</span>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <img class="mb-4" src="img/fadilio_fines_conto_garcia.webp" alt="Profesor Fadilio">
                    <p class="mb-4">Es economista especializado en finanzas públicas. 
                        Actualmente brinda capacitaciones de proyectos productivos 
                         en el CEI. ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</p>
                    <h5>Fadilo Fines Conto García</h5>
                    <span class="text-success">Docente.</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
<div>
    </div>
    </div>
    </div>
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
    class="bi bi-arrow-up"></i></a>

<!-- Footer Start -->
<?php require("footer.php"); ?>
</body>

</html>

