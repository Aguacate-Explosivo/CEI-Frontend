<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <link rel="icon" href="../../img/logo.webp">
    <title>CEI | citas</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <?php
    include_once("sesion_validacion.php");

    require_once('../conexion.php');
    $conexion = conectar();

    $id = $_GET['Id'];

    $consulta = "SELECT * FROM encuesta WHERE Id = $id";
    $busqueda = mysqli_query($conexion, $consulta);

    if ($busqueda && $busqueda->num_rows > 0) {
        $fila = $busqueda->fetch_assoc();
        $urlBaseDatos = $fila['url'];
    } else {
        echo "No se encontraron resultados.";
        $urlBaseDatos = ""; // Inicializar la variable en caso de no haber resultados
    }
    ?>

    <!-- Formulario -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-5">Editar Encuesta</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 mx-auto wow fadeInUp" data-wow-delay="0.1s">
                    <form action="editarencuesta.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="Id" value="<?php echo $id ?>">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control text-center" id="url" value="<?php echo $urlBaseDatos ?>" name="url" placeholder="url" required style="width: 100%;">
                                    <label for="url">URL</label>
                                </div>
                            </div>
                        </div>
                        <br><br><br><br><br><br>
                        <div class="text-center">
                            <button style="margin: 2px; border-radius: 5px;" type="submit" class="btn btn-primary">Editar Encuesta</button>
                            <a style="margin: 2px; border-radius: 5px;" href="../DashEncuentas.php" class="btn btn-info">Regresar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin formulario -->

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/lightbox/js/lightbox.min.js"></script>
    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>
</html>
