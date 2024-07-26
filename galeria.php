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
               require 'conexion.php';
               $conexion=conectar();
               $id=$_GET['id'];
                $consulta = "SELECT*FROM `actividades` where id='".$id."'";
                $resultado=mysqli_query($conexion,$consulta);

                
                foreach($resultado as $row){ ?>
   


            <!-- Gallery -->
<div style="margin-left:100px; margin-right:100px;  ">
 <a  class="button button-primary" data-caption-animate="fadeInUp" data-caption-delay="450" href="actividades.php" ><span class="title-decoration">Regresar</span></a> 
 <br>
 <br>
 <h4 class="display-6 mb-4"><?php echo htmlspecialchars($row["nombre"]); ?></h4>
 <p class="big text-gray-800"><?php echo htmlspecialchars($row["descripcion"]); ?></p>
 <br>
<br>
<div class="row">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
 
       <div class="project-item mb-5">
       <div class="position-relative">
    <img src="data:image/jpg;base64,<?php echo base64_encode($row["imagen"]); ?>" class="card-img-top img-fluid course-image">               
        <div class="project-overlay">

        </div>
    </div>           
</div>


            <?php if (!empty($row["imagen1"])) { ?>
                    <div class="project-item mb-5">
                        <div class="position-relative">
                            <img src="data:image/jpg;base64,<?php echo base64_encode($row["imagen1"]); ?>" class="card-img-top img-fluid course-image">
                            <div class="project-overlay"></div>
                        </div>
                    
                </div>
            <?php } ?>

  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
  <?php if (!empty($row["imagen2"])) { ?>
                    <div class="project-item mb-5">
                        <div class="position-relative">
                            <img src="data:image/jpg;base64,<?php echo base64_encode($row["imagen2"]); ?>" class="card-img-top img-fluid course-image">
                            <div class="project-overlay"></div>
                        </div>
                    
                </div>
            <?php } ?>
            <?php if (!empty($row["imagen3"])) { ?>
                    <div class="project-item mb-5">
                        <div class="position-relative">
                            <img src="data:image/jpg;base64,<?php echo base64_encode($row["imagen3"]); ?>" class="card-img-top img-fluid course-image">
                            <div class="project-overlay"></div>
                        </div>
                    
                </div>
            <?php } ?>
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">

  <?php if (!empty($row["imagen4"])) { ?>
                    <div class="project-item mb-5">
                        <div class="position-relative">
                            <img src="data:image/jpg;base64,<?php echo base64_encode($row["imagen4"]); ?>" class="card-img-top img-fluid course-image">
                            <div class="project-overlay"></div>
                        </div>
                    
                </div>
            <?php } ?>

            <?php if (!empty($row["imagen5"])) { ?>
                    <div class="project-item mb-5">
                        <div class="position-relative">
                            <img src="data:image/jpg;base64,<?php echo base64_encode($row["imagen5"]); ?>" class="card-img-top img-fluid course-image">
                            <div class="project-overlay"></div>
                        </div>
                    
                </div>
            <?php } ?>



  </div>
</div>
</div>
<!-- Gallery -->
            <?php } ?>


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
