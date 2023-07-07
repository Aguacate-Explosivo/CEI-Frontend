<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard Citas</title>
    <title>Dashboard CEI</title>
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
              <h4 class="page-title">Puedes Visualizar las Estadisticas basicas de los emprendedores desde este modulo</h4>
              <ol class="breadcrumb">
              </ol>
            </div>
            <!-- /.col-lg-12 -->
          </div>
          <!-- row -->
          <div class="row">
            
            <div class="white-box">
            <h3 class="text-center">Modulo - Estadisticas Basicas de Emprendedores</h3>


                <!-- <div class="form-floating">
                  <input type="text" id="id_Estadistica" name="id_Estadistica" class="form-control" placeholder=" Numero de Documento del usuario a hacer seguimiento:" 
                  required>
                  <label for="id_Estadistica" class="form__label"></label>
                </div>
                <br> -->

            <!-- Container de citas(Data Tables) -->
                    <div class="table-responsive">  
                        
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <?php
                            include("../conexion.php");
                            $conexion=conectar(); 
                            $consulta2 ="SELECT DISTINCT * FROM (SELECT * FROM inscritos_cursos WHERE documento = 1193223824) AS cursos JOIN (SELECT * FROM inscritos_eventos WHERE documento = 1193223824) AS eventos ON cursos.documento = eventos.documento JOIN (SELECT * FROM simulaciones WHERE cc = 1193223824) AS simulaciones ON cursos.documento = simulaciones.cc JOIN (SELECT * FROM citas WHERE documento = 1193223824) AS citas ON cursos.documento = citas.documento; ";
                            $busqueda=mysqli_query($conexion,$consulta2);

                        foreach($busqueda as $row){ ?>
                        <!-- Contenido de la tabla -->

                        <tr>
                            <td><?php echo $row["documento"]; ?></td>
                            <td><?php echo $row["nombre"]; ?></td>
                            <td><?php echo $row["telefono"]; ?></td>
                            <td><?php echo $row["direccion"]; ?></td>
                            <td><?php echo $row["fecha_hora"]; ?></td>
                            <td><?php echo $row["curso_inscrito"]; ?></td>
                            <td><?php echo $row["evento_inscrito"]; ?></td>
                            <td><?php echo $row["fecha_hora"]; ?></td>
                        </tr>
                            <?php } ?> 
                    </table>                  
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