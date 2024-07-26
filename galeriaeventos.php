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
    <link href="img/favicon.ico" rel="icon">

</head>

<body>
     <?php require("cabecera.php");  ?>
     <style>
    .course-image {
        height: 300px; 
        object-fit: cover; 
    }
</style>
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
        <h1 class="display-6 mb-4"><?php echo $row["nombreEven"]; ?> </h1>

        <br>
        <br>
        <div class="row row-cols-1 row-cols-md-2 g-4">
          <!-- Codigo de la base de datos -->
          
          <!-- Fin bd -->
            <!-- Estructura de eventos -->
                        <div class="card">
                        <div class="card-body">
                        <img src="data:image/jpg;base64,<?php echo base64_encode($row["imagen"]); ?>" class="card-img-top img-fluid course-image">
                          <br>
                            <br>
                            <p class="card-text"><small class="text-muted">Lugar:<?php echo $row["lugar"]; ?></small></p>
                            <p class="card-text"><small class="text-muted">Fecha:<?php echo $row["fecha"]; ?></small></p>
                            <p class="card-text"><small class="text-muted">Hora:<?php echo $row["hora"]; ?></small></p>
                        </div>
                         
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
  <?php if (!empty($row["imagen1"])) { ?>
       <div class="project-item mb-5">
    <div class="position-relative">
    <img src="data:image/jpg;base64,<?php echo base64_encode($row["imagen1"]); ?>" class="card-img-top img-fluid course-image">               
        <div class="project-overlay course-image">
            <a class="btn btn-lg-square btn-light rounded-circle m-1 " href="data:image/jpg;base64,<?php echo base64_encode($row["imagen1"]); ?>"
            data-lightbox="project"><i class="fa fa-eye"></i></a>
            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="eventos.php"><i class="fa fa-link"></i></a>
        </div>
    
    </div>              
</div>
<?php } ?>
<?php if (!empty($row["imagen2"])) { ?>

    <div class="project-item mb-5">
    <div class="position-relative">
    <img src="data:image/jpg;base64,<?php echo base64_encode($row["imagen2"]); ?>" class="card-img-top img-fluid course-image">               
        <div class="project-overlay">
            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="data:image/jpg;base64,<?php echo base64_encode($row["imagen2"]); ?>"
            data-lightbox="project"><i class="fa fa-eye"></i></a>
            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="eventos.php"><i class="fa fa-link"></i></a>
        </div>
    </div>                  
</div>
<?php } ?>

  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
  <?php if (!empty($row["imagen3"])) { ?>
   <div class="project-item mb-5">
    <div class="position-relative">
    <img src="data:image/jpg;base64,<?php echo base64_encode($row["imagen3"]); ?>" class="card-img-top img-fluid course-image">               
        <div class="project-overlay">
            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="data:image/jpg;base64,<?php echo base64_encode($row["imagen3"]); ?>"
            data-lightbox="project"><i class="fa fa-eye"></i></a>
            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="eventos.php"><i class="fa fa-link"></i></a>
        </div>
    </div>
                   
</div>
<?php } ?>
<?php if (!empty($row["imagen4"])) { ?>

   <div class="project-item mb-5">
    <div class="position-relative">
    <img src="data:image/jpg;base64,<?php echo base64_encode($row["imagen4"]); ?>" class="card-img-top img-fluid course-image">               
        <div class="project-overlay">
            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="data:image/jpg;base64,<?php echo base64_encode($row["imagen4"]); ?>"
            data-lightbox="project"><i class="fa fa-eye"></i></a>
            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="eventos.php"><i class="fa fa-link"></i></a>
        </div>
    </div>
                   
</div>
<?php } ?>

  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
  <?php if (!empty($row["imagen5"])) { ?>

   <div class="project-item mb-5">
    <div class="position-relative">
    <img src="data:image/jpg;base64,<?php echo base64_encode($row["imagen5"]); ?>" class="card-img-top img-fluid course-image">               
        <div class="project-overlay">
            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="data:image/jpg;base64,<?php echo base64_encode($row["imagen5"]); ?>"
            data-lightbox="project"><i class="fa fa-eye"></i></a>
            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="eventos.php"><i class="fa fa-link"></i></a>
        </div>
    </div>
                   
</div>
<?php } ?>
<?php if (!empty($row["imagen3"])) { ?>

   <div class="project-item mb-5">
    <div class="position-relative">
    <img src="data:image/jpg;base64,<?php echo base64_encode($row["imagen6"]); ?>" class="card-img-top img-fluid course-image">               
        <div class="project-overlay">
            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="data:image/jpg;base64,<?php echo base64_encode($row["imagen6"]); ?>"
            data-lightbox="project"><i class="fa fa-eye"></i></a>
            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="eventos.php"><i class="fa fa-link"></i></a>
        </div>
    </div>
                   
</div>
<?php } ?>



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