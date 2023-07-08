<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard Citas</title>
  <link rel="icon" type="image/webp" sizes="16x16" href="../img/logo.webp">
  </head>

  <body>
    <?php require_once ("menu.php"); ?>
    <!-- Preloader -->
    <div class="preloader">
      <div class="cssload-speeding-wheel"></div>
    </div>
      <!-- Page Content -->
      <div id="page-wrapper">
        <div class="container-fluid">
          <div class="row bg-title">
            <div class="col-lg-12">
              <h4 class="page-title">Puedes gestionar tus Citas desde este modulo</h4>
              <ol class="breadcrumb">
              </ol>
            </div>
            <!-- /.col-lg-12 -->
          </div>
          <!-- row -->
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
                <th>Tipo</th>
                    <th>Numero de Documento</th>
                    <th>Nombre Completo</th>     
                    <th>Categria</th>                        
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Institucion</th>
                    <th>Barrio</th>
                    <th>Fecha Hora</th>
                    <th>Tema</th>
                    <th>Descripcion</th>
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
                <td><?php echo $row["tipodocumento"]; ?></td>
                    <td><?php echo $row["documento"]; ?></td>
                    <td><?php echo $row["categoria"]; ?></td>
                    <td><?php echo $row["nombre"]; ?></td>
                    <td><?php echo $row["telefono"]; ?></td>
                    <td><?php echo $row["correo"]; ?></td>
                    <td><?php echo $row["institucion"]; ?></td>
                    <td><?php echo $row["direccion"]; ?></td>
                    <td><?php echo $row["fecha_hora"]; ?></td>
                    <td><?php echo $row["tema"]; ?></td>
                    <td><?php echo $row["descripcion"]; ?></td>
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
        <!-- /.container-fluid -->
      </div>
      <!-- /#page-wrapper -->
      <?php require_once ("footer.php"); ?>
    </div>
    <!-- /#wrapper --> 
  </body>
</html> 