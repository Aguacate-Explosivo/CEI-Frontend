<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="img/logo.webp">
    <title>CEI | Galeria Eventos</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
<<<<<<< Updated upstream

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
=======
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
>>>>>>> Stashed changes

</head>

<body>
<<<<<<< Updated upstream
     <?php require("cabecera.php");  ?>
<!-- Navbar End -->
=======
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
                            <img src="data:image.jpg;base64,<?php echo base64_encode($row["imagen"]); ?>" class="card-img-top">
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
>>>>>>> Stashed changes

<?php
               require 'conexion.php';
               $conexion=conectar();
               $id_evento=$_GET['id_evento'];
                $consulta = "SELECT*FROM `eventos` where id_evento='".$id_evento."'";
                $resultado=mysqli_query($conexion,$consulta);

                
                foreach($resultado as $row){ ?>
   
    <div style="margin-left:100px; margin-right:100px;  ">
          <div class="container-fluid">
        <!-- Seccion de cursos -->
        <div class="jumbotron">
        <h1 class="display-6 mb-4"><?php echo $row["nombreEven"]; ?> </h1>

        <br>
        <br>
        <div class="row row-cols-1 row-cols-md-2 g-4">
          <!-- Codigo de la base de datos -->
          
          <!-- Fin bd -->
            <!-- Estructura de eventos -->
                        <div class="card">
                        <div class="card-body">
                        <img src="data:image/jpg;base64,<?php echo base64_encode($row["imagen"]); ?>" class="card-img-top">
                          <br>
                            <br>
                            <p class="card-text"><small class="text-muted">Lugar:<?php echo $row["lugar"]; ?></small></p>
                            <p class="card-text"><small class="text-muted">Fecha:<?php echo $row["fecha"]; ?></small></p>
                            <p class="card-text"><small class="text-muted">Hora:<?php echo $row["hora"]; ?></small></p>
                        </div>
                         <a style="margin: 2px; border-radius: 5px;"
                                    href="inceventos.php?id_evento=<?php echo htmlspecialchars($row["id_evento"]); ?>"
                                    class="btn btn-primary" id="asistir"> Asistir A Evento</a>
                        <a style="margin: 2px; border-radius: 5px;" href="eventos.php" class="btn btn-info" > Regresar</a>
                          <br>
                        </div>

                         
          <!-- Codigo de la base de datos -->
          <br>
          <!-- Fin bd -->
            <!-- Estructura de eventos -->
                        <div class="card">
                        <div class="card-body">
                            <br>
                            <br>
                            <br>
                            <br>
                        <h1 class="display-6 mb-4">Nombre Del Evento:<?php echo $row["nombreEven"]; ?></h1>
                         <br>
                            
                            <p class="card-text">Descripcion Del Evento:<?php echo $row["descripcionEven"]; ?></p>

                            <p class="card-text"><small class="text-muted">Lugar:<?php echo $row["lugar"]; ?></small></p>
                            <p class="card-text"><small class="text-muted">Fecha:<?php echo $row["fecha"]; ?></small></p>
                            <p class="card-text"><small class="text-muted">Hora:<?php echo $row["hora"]; ?></small></p>
                             <p class="card-text"><small class="text-muted">Estado Del Evento:<?php echo $row["estado"]; ?></small></p>

                        </div>
                         <br>
                        
                        </div>
                        
                         </div>
                         
      </div>
      </div>
</div>
<br>
<br>

            <!-- Gallery -->
<div style="margin-left:100px; margin-right:100px;  ">
 <h1 class="display-6 mb-4">Galeria de Imagenes</h1>
 <br>
<br>
<div class="row">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
       <div class="project-item mb-5">
    <div class="position-relative">
    <img src="data:image/jpg;base64,<?php echo base64_encode($row["imagen1"]); ?>" class="img-fluid">               
        <div class="project-overlay">
            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="data:image/jpg;base64,<?php echo base64_encode($row["imagen1"]); ?>"
            data-lightbox="project"><i class="fa fa-eye"></i></a>
            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="eventos.php"><i class="fa fa-link"></i></a>
        </div>
    </div>
                   
</div>

    <div class="project-item mb-5">
    <div class="position-relative">
    <img src="data:image/jpg;base64,<?php echo base64_encode($row["imagen2"]); ?>" class="img-fluid">               
        <div class="project-overlay">
            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="data:image/jpg;base64,<?php echo base64_encode($row["imagen2"]); ?>"
            data-lightbox="project"><i class="fa fa-eye"></i></a>
            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="eventos.php"><i class="fa fa-link"></i></a>
        </div>
    </div>
                   
</div>
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
   <div class="project-item mb-5">
    <div class="position-relative">
    <img src="data:image/jpg;base64,<?php echo base64_encode($row["imagen3"]); ?>" class="img-fluid">               
        <div class="project-overlay">
            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="data:image/jpg;base64,<?php echo base64_encode($row["imagen3"]); ?>"
            data-lightbox="project"><i class="fa fa-eye"></i></a>
            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="eventos.php"><i class="fa fa-link"></i></a>
        </div>
    </div>
                   
</div>

   <div class="project-item mb-5">
    <div class="position-relative">
    <img src="data:image/jpg;base64,<?php echo base64_encode($row["imagen4"]); ?>" class="img-fluid">               
        <div class="project-overlay">
            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="data:image/jpg;base64,<?php echo base64_encode($row["imagen4"]); ?>"
            data-lightbox="project"><i class="fa fa-eye"></i></a>
            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="eventos.php"><i class="fa fa-link"></i></a>
        </div>
    </div>
                   
</div>
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">

   <div class="project-item mb-5">
    <div class="position-relative">
    <img src="data:image/jpg;base64,<?php echo base64_encode($row["imagen5"]); ?>" class="img-fluid">               
        <div class="project-overlay">
            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="data:image/jpg;base64,<?php echo base64_encode($row["imagen5"]); ?>"
            data-lightbox="project"><i class="fa fa-eye"></i></a>
            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="eventos.php"><i class="fa fa-link"></i></a>
        </div>
    </div>
                   
</div>

   <div class="project-item mb-5">
    <div class="position-relative">
    <img src="data:image/jpg;base64,<?php echo base64_encode($row["imagen6"]); ?>" class="img-fluid">               
        <div class="project-overlay">
            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="data:image/jpg;base64,<?php echo base64_encode($row["imagen6"]); ?>"
            data-lightbox="project"><i class="fa fa-eye"></i></a>
            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="eventos.php"><i class="fa fa-link"></i></a>
        </div>
    </div>
                   
</div>



  </div>
</div>
</div>
<!-- Gallery -->
            <?php } ?>
          <!--  Fin estructura de cursos --------------- -->
       

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>

     <?php require("footer.php");  ?>

</body>

</html>