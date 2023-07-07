<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dashboard Marketing</title>
  <link rel="icon" type="image/webp" sizes="16x16" href="../img/logo.webp">
</head>

<body>
  <?php require_once ("menu.php"); ?>
  <!-- Page Content -->
  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row bg-title">
        <div class="col-lg-12">
          <h4 class="page-title">Puedes Visualizar las estrategias de marketing de los emprendedores desde este modulo
          </h4>
        </div>
      </div>
      <!-- row -->
      <div class="row">
        <!-- <div class="col-md-12"> -->
        <div class="white-box">
          <h3>Modulo - Visualizacion de Marketing de emprendedores</h3>
          <!-- Container de citas(Data Tables) -->
          <div class="container-fluid">
            <div class="jumbotron white-box">
              <div class="container">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="table-responsive">
                      <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th>Numero de Documento</th>
                            <th>Nombre Completo</th>
                            <th>Correo electrónico</th>
                            <th>Plan de negocio</th>
                            <th>Marketing Utilizado</th>
                          </tr>
                        </thead>
                        <?php
                      include("../conexion.php");
                      $conexion=conectar(); 
                      $consulta2 ="SELECT * FROM `marketing` ";
                      $busqueda=mysqli_query($conexion,$consulta2);

                foreach($busqueda as $row){ ?>
                        <!-- Contenido de la tabla -->

                        <tr>
                          <td>
                            <?php echo $row["documento"]; ?>
                          </td>
                          <td>
                            <?php echo $row["nombre"]; ?>
                          </td>
                          <td>
                            <?php echo $row["correo"]; ?>
                          </td>
                          <td>
                            <?php echo $row["plan de negocio"]; ?>
                          </td>
                          <td>
                            <?php echo $row["tipo de marketing"]; ?>
                          </td>
                        </tr>
                        <?php } ?>

                      </table>
                      <!-- </div> -->
                    </div>
                  </div>
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