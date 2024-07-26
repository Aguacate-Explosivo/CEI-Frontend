<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="img/logo.webp">
    <title>CEI | Actividades Realizadas</title>
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
<body>  
    <?php require("cabecera.php"); ?>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <?php
        require_once("conexion.php");
        $conexion = conectar();

        $consulta = "SELECT * FROM imagenes";
        $resultado = mysqli_query($conexion, $consulta);
        ?>
            <?php foreach ($resultado as $row): ?>
                <?php
                $imagen = $row["imagen"];
                $imagen1 = $row["imagen1"];
                $imagen2 = $row["imagen2"];
                $imagen3 = $row["imagen3"];
                ?>
                   <?php endforeach; ?>
        <div class="container-xxl py-5" style="position: relative;">
        <div class="row justify-content-start">
        <img src="data:image.webp;base64,<?php echo base64_encode($imagen); ?>" class="card-img-top img-fluid" alt="" style="height: 300px; width:1500px;" />
        <h1 class="display-2 text-white mb-4 animated slideInDown" style="position: absolute; text-align: center; top: 4cm;">Actividades Realizadas</h1>
       </div>
       </div>


                
<section class="section section-lg bg-default">
    <div class="container">
        <?php
        require_once("conexion.php");
        $conexion = conectar();

        $consulta = "SELECT * FROM actividades";
        $resultado = mysqli_query($conexion, $consulta);
        ?>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <?php foreach ($resultado as $row): ?>
                <?php
                $id = $row["id"];
                $nombre = $row["nombre"];
                $imagen = $row["imagen"];
                $descripcion = $row["descripcion"];
                $fecha =  $row["fecha"];
                ?>
<div class="col-md-6 mb-4">
    <div class="card h-100">
        <div class="row">
            <div class="col-md-6">
                <img src="data:image.webp;base64,<?php echo base64_encode($imagen); ?>" class="card-img-top img-fluid" alt="" style="height: 100%; object-fit: cover;" />
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title"><?php echo htmlspecialchars($nombre); ?></h5>
                    <p >
                        <?php
                        $descripcion_words = explode(' ', $descripcion);
                        $primeras_10_palabras = array_slice($descripcion_words, 0, 30);
                        $descripcion_cortada = implode(' ', $primeras_10_palabras);
                        echo htmlspecialchars($descripcion_cortada);
                        if (str_word_count($descripcion) > 10) {
                            echo '...';
                        }
                        ?>
                    </p>
                    <p class="card-text text-gray-600"><?php echo htmlspecialchars($fecha); ?></p>
                   

                    <a 
                    href="galeria.php?id=<?php echo htmlspecialchars($row["id"]); ?>"
                    class=""> <br> <i class="far fa-eye"></i> Ver Mas</a>
                </div>
            </div>
        </div>
    </div>
</div>


            <?php endforeach; ?>
        </div>
    </div>
</section>
       
    <!-- Page Header End -->
    
  


    <?php require("footer.php"); ?>
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.0/js/bootstrap.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.easing/1.4.1/jquery.easing.min.js" defer></script>

    <!-- Template Javascript -->
    <script src="lib/wow/wow.min.js" defer></script>
    <script src="lib/owlcarousel/owl.carousel.min.js" defer></script>
    <script src="lib/isotope/isotope.pkgd.min.js" defer></script>
    <script src="lib/lightbox/js/lightbox.min.js" defer></script>
    <script src="js/main.js" defer></script>
</body>

</html>
