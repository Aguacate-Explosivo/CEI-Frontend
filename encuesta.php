<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="img/logo.webp">
    <title>CEI | Citas</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
    <link href="img/favicon.webp" rel="icon">

</head>

<body>
    <?php require("cabecera.php"); ?>
    <!-- Navbar End -->
    <?php
    require_once("conexion.php");
    $conexion = conectar();

    $consulta = "SELECT * FROM  encuesta";
    $resultado = mysqli_query($conexion, $consulta);
    foreach ($resultado as $row) {

        ?>

        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-5 mb-5">ENCUESTA</h1>
                </div>
                <div class="row">
                    <div class="col-lg-6 mx-auto wow fadeInUp" data-wow-delay="0.1s">
                        <iframe src="<?php echo htmlspecialchars( $row[' url']); ?>" width="700" height="1635" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
    <?php } ?>
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

    <?php require("footer.php"); ?>

</body>

</html>
