<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="img/logo.webp">
    <title>CEI | Cursos</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
<!-- Favicon -->
<link href="img/favicon.webp" rel="icon">
<!-- Google Web Fonts -->
<link rel="preload" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
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

<body>
    <?php require_once("cabecera.php"); ?>

    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Cursos</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Iniciar</a></li>
                    <li class="breadcrumb-item"><a href="#">Otros</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">Cursos</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div style="margin-left:100px; margin-right:100px; ">
        <div class="container-fluid">
            <!-- Seccion de cursos -->
            <div class="jumbotron">
                <p class="fs-5 fw-medium text-success">Cursos</p>
                <h1 class="display-6 mb-4">Cursos Que Ofrece el Centro de Emprendimiento e Innovación</h1>
                <br>
                <br>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <!-- Codigo de la base de datos -->
                    <?php
                    require_once("conexion.php");
                    $conexion = conectar();

                    $consulta = "SELECT Id_Curso, NombreCurso, DescripcionCurso, EncargadoCurso, imagen FROM cursos";
                    $resultado = mysqli_query($conexion, $consulta);

                    foreach ($resultado as $row) {
                        $id = $row["Id_Curso"];
                    ?>
                        <!-- Fin bd -->
                        <!-- Estructura de Curso -->
                        <div class="col">
                            <div class="card h-100">
                                <div class="project-item mb-5">
                                    <div class="position-relative">
                                        <amp-img src="data:image.webp;base64,<?php echo base64_encode($row["imagen"]); ?>" class="img-fluid"></amp-img>
                                        <div class="project-overlay">
                                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="data:image.webp;base64,<?php echo base64_encode($row["imagen"]); ?>" data-lightbox="project"><i class="fa fa-eye"></i></a>
                                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="cursos.php"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo htmlspecialchars($row["NombreCurso"]); ?></h5>
                                        <p class="card-text">Encargado: <?php echo htmlspecialchars($row["EncargadoCurso"]); ?></p>
                                        <p class="card-text"> Descripcion: <?php echo htmlspecialchars($row["DescripcionCurso"]); ?></p>
                                        <a style="margin: 2px; border-radius: 5px;" href="inscripcursos.php?Id_Curso=<?php echo htmlspecialchars($row["Id_Curso"]) ?>" class="btn btn-primary">Unirse a Curso</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!--  Fin estructura de cursos --------------- -->
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

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

</body>

</html>
