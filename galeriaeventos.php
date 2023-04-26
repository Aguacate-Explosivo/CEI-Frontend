<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="img/logo.webp">
    <title>CEI | Cursos</title>
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
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
     <?php require("cabecera.php");  ?>
<!-- Navbar End -->

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
        <h1 class="display-6 mb-4"><?php echo $row["nombreEven"]; ?></h1>
        <br>
        <br>
        <div class="row row-cols-1 row-cols-md-2 g-4">
          <!-- Codigo de la base de datos -->
          
          <!-- Fin bd -->
            <!-- Estructura de eventos -->
                        <div class="card">
                        <div class="card-body">
                        <img src="data:image/jpg;base64,<?php echo base64_encode($row["imagen"]); ?>" class="card-img-top">

                            <h5 class="card-title"><?php echo $row["nombreEven"]; ?></h5>
                            <p class="card-text"><small class="text-muted">Lugar: <?php echo $row["lugar"]; ?></small></p>
                            <p class="card-text"><small class="text-muted">Fecha: <?php echo $row["fecha"]; ?></small></p>
                            <p class="card-text"><small class="text-muted">Hora: <?php echo $row["hora"]; ?></small></p>
                        </div>
                        <a href="inscrip_evento.php" class="btn btn-success "> Participar a un evento</a>
                         <br>
                        <a href="">ㅤㅤ</a>
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
                        <h1 class="display-6 mb-4">Nombre Del Evento: <?php echo $row["nombreEven"]; ?></h1>
                         <br>
                            
                            <p class="card-text">Descripcion Del Evento: <?php echo $row["descripcionEven"]; ?></p>

                            <p class="card-text"><small class="text-muted">Lugar: <?php echo $row["lugar"]; ?></small></p>
                            <p class="card-text"><small class="text-muted">Fecha: <?php echo $row["fecha"]; ?></small></p>
                            <p class="card-text"><small class="text-muted">Hora: <?php echo $row["hora"]; ?></small></p>
                             <p class="card-text"><small class="text-muted">Estado Del Evento: <?php echo $row["hora"]; ?></small></p>

                        </div>
                         <br>
                        <a href="">ㅤㅤ</a>
                        </div>
                        
                         </div>
                         
      </div>
      </div>
</div>
<br>
<br>

            <!-- <!-- Gallery -->
<div style="margin-left:100px; margin-right:100px;  ">
 <h1 class="display-6 mb-4">Galeria de Imagenes</h1>
 <br>
<br>
<div class="row">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
       <div class="project-item mb-5">
    <div class="position-relative">
    <img src="data:image/jpg;base64,<?php echo base64_encode($row["imagen"]); ?>" class="img-fluid">               
        <div class="project-overlay">
            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="data:image/jpg;base64,<?php echo base64_encode($row["imagen"]); ?>"
            data-lightbox="project"><i class="fa fa-eye"></i></a>
            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="eventos.php"><i class="fa fa-link"></i></a>
        </div>
    </div>
                   
</div>

    <div class="project-item mb-5">
    <div class="position-relative">
    <img src="data:image/jpg;base64,<?php echo base64_encode($row["imagen"]); ?>" class="img-fluid">               
        <div class="project-overlay">
            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="data:image/jpg;base64,<?php echo base64_encode($row["imagen"]); ?>"
            data-lightbox="project"><i class="fa fa-eye"></i></a>
            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="eventos.php"><i class="fa fa-link"></i></a>
        </div>
    </div>
                   
</div>
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
   <div class="project-item mb-5">
    <div class="position-relative">
    <img src="data:image/jpg;base64,<?php echo base64_encode($row["imagen"]); ?>" class="img-fluid">               
        <div class="project-overlay">
            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="data:image/jpg;base64,<?php echo base64_encode($row["imagen"]); ?>"
            data-lightbox="project"><i class="fa fa-eye"></i></a>
            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="eventos.php"><i class="fa fa-link"></i></a>
        </div>
    </div>
                   
</div>

   <div class="project-item mb-5">
    <div class="position-relative">
    <img src="data:image/jpg;base64,<?php echo base64_encode($row["imagen"]); ?>" class="img-fluid">               
        <div class="project-overlay">
            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="data:image/jpg;base64,<?php echo base64_encode($row["imagen"]); ?>"
            data-lightbox="project"><i class="fa fa-eye"></i></a>
            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="eventos.php"><i class="fa fa-link"></i></a>
        </div>
    </div>
                   
</div>
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">

   <div class="project-item mb-5">
    <div class="position-relative">
    <img src="data:image/jpg;base64,<?php echo base64_encode($row["imagen"]); ?>" class="img-fluid">               
        <div class="project-overlay">
            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="data:image/jpg;base64,<?php echo base64_encode($row["imagen"]); ?>"
            data-lightbox="project"><i class="fa fa-eye"></i></a>
            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="eventos.php"><i class="fa fa-link"></i></a>
        </div>
    </div>
                   
</div>

   <div class="project-item mb-5">
    <div class="position-relative">
    <img src="data:image/jpg;base64,<?php echo base64_encode($row["imagen"]); ?>" class="img-fluid">               
        <div class="project-overlay">
            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="data:image/jpg;base64,<?php echo base64_encode($row["imagen"]); ?>"
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


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
     <?php require("footer.php");  ?>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>