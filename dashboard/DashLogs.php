<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard Logs</title>
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
              <h4 class="page-title">Puedes visualizar los Logs del aplicativo desde este modulo</h4>
              <ol class="breadcrumb">
              </ol>
            </div>
            <!-- /.col-lg-12 -->
          </div>
          <!-- row -->
          <div class="row">
            
            <div class="white-box">
            <h3>Modulo de Registros - Logs</h3>
            <!-- Container de citas(Data Tables) -->
            <div class="container-fluid">
            <div class="jumbotron white-box">
            <div class="container">
            <div class="row">
            <div class="col-lg-18">
            <div class="table-responsive">  
                  
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Acción</th>
                    <th>Descripción</th>     
                    <th>Fecha</th>                        
                </tr>
            </thead>
                    <?php
                      include("../conexion.php");
                      $conexion=conectar(); 
                        // Obtener registros de la base de datos
                        $query = "SELECT * FROM logs ORDER BY timestamp DESC";
                        $result = mysqli_query($conexion, $query);


                while ($row = mysqli_fetch_assoc($result)) {?>
                <!-- Contenido de la tabla -->

                <tr>
                <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["action"]; ?></td>
                    
                    <td><?php echo $row["description"]; ?></td>
                    <td><?php echo $row["timestamp"]; ?></td>
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