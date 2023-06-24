<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, severny admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, my admin design, my admin dashboard bootstrap 4 dashboard template"
    />
    <meta
      name="description"
      content="My Admin is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Dashboard Citas</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../images/img/logo.webp" />  
  </head>

  <body>
    <?php require_once ("menu.php"); ?>
    <!-- Preloader -->
    <div class="preloader">
      <div class="cssload-speeding-wheel"></div>
    </div>
        <!-- /.sidebar-collapse -->
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
            <div class="col-md-12">
              <div class="white-box">
                <h3>Modulo - Citas</h3>
                <!-- Container de citas(Data Tables) -->
                <div class="container-fluid">
                  <div class="jumbotron white-box">
                    <div class="container">
                        <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">  
                                    <nav aria-label="...">
                <ul class="pagination pagination-lg justify-content-center">
                    <li class="page-item active"><a class="page-link" href="DashCitas.php">Citas Disponibles</a></li>
                    <li class="page-item " aria-current="page"><a class="page-link" href="administradores/reprocitas.php">Reprogramar Citas </a></li>

                </ul>
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