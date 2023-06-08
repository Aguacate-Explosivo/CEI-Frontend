<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="img/logo.webp">
    <title>CEI | Eventos</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" async>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin async>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" async>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" async>
<!-- Libraries Stylesheet -->
<link href="lib/animate/animate.min.css" rel="stylesheet" async>
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" async>
<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" async>
<!-- Customized Bootstrap Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" async>
<!-- Template Stylesheet -->
<link href="css/style.css" rel="stylesheet" async>
<link rel="stylesheet" href="sweet/dist/sweetalert2.min.css" async>
</head>

<body>
    <?php require_once("cabecera.php"); ?>

    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Eventos</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="#">Otros</a></li>
                    <li class="breadcrumb-item text-success" aria-current="page">Eventos</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div style="margin-left:100px; margin-right:100px; ">
        <div class="container-fluid">
            <!-- Seccion de cursos -->
            <div class="jumbotron">
                <h1 class="display-6 mb-4">Eventos Disponibles</h1>
                <br>
                <br>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <!-- Codigo de la base de datos -->
                    <?php
                    require_once("conexion.php");
                    $conexion = conectar();

                    $consulta = "SELECT * FROM eventos";
                    $resultado = mysqli_query($conexion, $consulta);

                    foreach ($resultado as $row) {
                        $id = $row["id_evento"];
                        ?>
                        <!-- Fin bd -->

                        <?php
                        if (isset($_SESSION['msj'])) {
                            $respuesta = $_SESSION['msj'];
                            ?>
                            <script>
                                alert('hola');
                            </script>
                        <?php
                        }
                        ?>

                        <!-- Estructura de eventos -->
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="project-item mb-5">
                                        <div class="position-relative">
                                            <img src="data:image/jpg;base64,<?php echo base64_encode($row["imagen"]); ?>"
                                                class="img-fluid">
                                            <div class="project-overlay">
                                                <a class="btn btn-lg-square btn-light rounded-circle m-1"
                                                    href="data:image/jpg;base64,<?php echo base64_encode($row["imagen"]); ?>"
                                                    data-lightbox="project"><i class="fa fa-eye"></i></a>
                                                <a class="btn btn-lg-square btn-light rounded-circle m-1"
                                                    href="eventos.php"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="card-title"><?php echo htmlspecialchars($row["nombreEven"]); ?></h5>
                                    <p class="card-text"><?php echo htmlspecialchars($row["descripcionEven"]); ?></p>
                                    <p class="card-text"><small class="text-muted">Lugar:
                                            <?php echo htmlspecialchars($row["lugar"]); ?></small></p>
                                    <p class="card-text"><small class="text-muted">Fecha:
                                            <?php echo htmlspecialchars($row["fecha"]); ?></small></p>
                                    <p class="card-text"><small class="text-muted">Hora:
                                            <?php echo htmlspecialchars($row["hora"]); ?></small></p>
                                    <p class="card-text"><small class="text-muted">Estado del Evento:
                                            <?php echo htmlspecialchars($row["estado"]); ?></small></p>
                                </div>
                                <a style="margin: 2px; border-radius: 5px;"
                                    href="inceventos.php?id_evento=<?php echo htmlspecialchars($row["id_evento"]); ?>"
                                    class="btn btn-primary" id="asistir"> Asistir A Evento</a>
                                <a style="margin: 2px; border-radius: 5px;"
                                    href="galeriaeventos.php?id_evento=<?php echo htmlspecialchars($row["id_evento"]); ?>"
                                    class="btn btn-info"> Ver Mas</a>

                                <br>
                                <a href="">ㅤㅤ</a>
                            </div>
                        </div>
                    <?php } ?>
                    <!--  Fin estructura de eventos --------------- -->
                </div>
            </div>
        </div>
    </div>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>

<!-- JavaScript Libraries -->
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


</html>
