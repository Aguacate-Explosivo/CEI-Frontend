<?php
//cabecera.php

// Conexión a la base de datos
require 'conexion.php';
$conexion = conectar();

// Obtener el id_evento desde la URL
$id_evento = $_GET['id_evento'];

// Consulta para obtener los datos del evento
$consulta = "SELECT * FROM eventos WHERE id_evento = '" . $id_evento . "'";
$resultado = mysqli_query($conexion, $consulta);

// Verificar si se encontró el evento
if (mysqli_num_rows($resultado) > 0) {
    $row = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="img/logo.webp">
    <title>CEI | Galeria Eventos</title>
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
    <!-- Navbar -->
    <?php require("cabecera.php");  ?>
    <!-- Navbar End -->

    <div style="margin-left:100px; margin-right:100px;">
        <div class="container-fluid">
            <!-- Seccion de cursos -->
            <div class="jumbotron">
                <h1 class="display-6 mb-4"><?php echo htmlspecialchars($row["nombreEven"]); ?></h1>
                <br>
                <br>
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <!-- Estructura de eventos -->
                    <div class="card">
                        <div class="card-body">
                            <img src="data:image.webp;base64,<?php echo base64_encode($row["imagen"]); ?>" class="card-img-top">
                            <br>
                            <br>
                            <p class="card-text"><small class="text-muted">Lugar: <?php echo htmlspecialchars($row["lugar"]); ?></small></p>
                            <p class="card-text"><small class="text-muted">Fecha: <?php echo htmlspecialchars($row["fecha"]); ?></small></p>
                            <p class="card-text"><small class="text-muted">Hora: <?php echo htmlspecialchars($row["hora"]); ?></small></p>
                        </div>
                        <div class="card-footer">
                            <a href="inscribirse.php?id_evento=<?php echo $row["id_evento"]; ?>" class="btn btn-primary btn-block">Inscribirse</a>
                        </div>
                    </div>
                    <!-- Fin de estructura de eventos -->
                </div>
            </div>
            <!-- Fin de seccion de cursos -->
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.5.0/js/bootstrap.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js" defer></script>
    <script src="js/script.js" defer></script>
</body>

</html>

<?php
} else {
    echo "No se encontró el evento.";
}

// Cerrar conexión a la base de datos
mysqli_close($conexion);
?>
