<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Admin</title>
  <title>Dashboard CEI</title>
  <link rel="icon" type="image/webp" sizes="16x16" href="../img/logo.webp">
</head>
<body>
<?php require_once ("menu.php"); ?>

    <div id="page-wrapper">
      <div class="container-fluid">
        <div class="row bg-title">
          <div class="col-lg-12">
            <h4 class="page-title">
              Bienvenido Administrador, ¡desde aquí puedes gestionar los usuarios!
            </h4>
            <ol class="breadcrumb">
              <li><a href="#">Dashboard</a></li>
            </ol>
          </div>
        </div>
   
<!-- inicio-->
            <div>
            <div class="row">
            
            <div class="white-box">
            <h3>Modulo - Citas</h3>
            <!-- Container de citas(Data Tables) -->
            <div class="container-fluid">
            <div class="jumbotron white-box">
            <div class="container">
            <div class="row">
            <div class="col-lg-18">
            <div class="table-responsive">  
            <nav aria-label="...">
                  
                <ul class="pagination pagination-lg justify-content-center">
                  <li class="page-item active rounded" class="nav-item"><a class="nav-link" href="DashCitas.php">Citas Disponibles</a></li>
                  <li class="page-item rounded" aria-current="page"><a class="page-link" href="reprocitas.php">Reprogramar Citas</a></li>
                </ul>
                <br>
            </nav>
                  
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Numero de Documento</th>
                    <th>Nombre Completo</th>                             
                    <th>Numero de Telefono</th>
                    <th>Barrio</th>
                    <th>Fecha y Hora de Cita</th>
                </tr>
            </thead>
                    <?php
                      include("../conexion.php");
                      $conexion=conectar(); 
                      $consulta2 ="SELECT * FROM `citas` ";
                      $busqueda=mysqli_query($conexion,$consulta2);

                foreach($busqueda as $row){ ?>
                <!-- Contenido de la tabla -->
                <tr>
                    <td><?php echo $row["documento"]; ?></td>
                    <td><?php echo $row["nombre"]; ?></td>
                    <td><?php echo $row["telefono"]; ?></td>
                    <td><?php echo $row["direccion"]; ?></td>
                    <td><?php echo $row["fecha_hora"]; ?></td>
                </tr>
                    <?php } ?> 
                    
                    
            </table>                  
            </div>
            </div>
            </div>
            </div>
            </div>  
            </div>  
            <!-- Fin data Table -->
            </div>
            
          </div>
          <!-- /.row -->
        </div>

            </div>
  </div>
  <?php require_once ("footer.php"); ?>
</body>
</html>
</html>