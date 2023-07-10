<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard Estadisticas</title>
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
            <!-- Container de citas(Data Tables) -->
                    <div class="table-responsive">     
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                            <th>Total de Emprendedores</th>
                            <th>Total de Inscritos a Cursos</th>
                            <th>Total de Inscritos a Eventos</th>     
                            <th>Promedio de Edad de emprendedores</th>                        
                            <th>Categorias de Planes de Negocios mas Frecuentes</th>
                            <th>Cantidad de negocios en la categoria</th>
                            <th>Promedio de Ingresos de Emprendedores</th>
                        </tr>
                      </thead>
                            <?php
                            include("../conexion.php");
                            $conexion=conectar(); 
                            $consulta ="SELECT COUNT(*) AS cantidad_total_emprendedores FROM (SELECT DISTINCT cc FROM `simulaciones`) AS subconsulta;";
                            $busqueda=mysqli_query($conexion,$consulta);
                            if ($busqueda) {
                              $fila = mysqli_fetch_assoc($busqueda);
                              $totalEmprendedores = $fila['cantidad_total_emprendedores'];
                            } else {
                                echo "Error en la consulta: " . mysqli_error($conexion);
                            } 
                            $consultaTotalCursos ="SELECT COUNT(*) AS cantidad_total_inscritos_cursos FROM (SELECT DISTINCT documento FROM `inscritos_cursos`) AS subconsultaCursos;";
                            $busquedaTotalCurso=mysqli_query($conexion,$consultaTotalCursos);
                            if ($busquedaTotalCurso) {
                              $filaTotalCurso = mysqli_fetch_assoc($busquedaTotalCurso);
                              $cantidad_total_inscritos_cursos = $filaTotalCurso['cantidad_total_inscritos_cursos'];
                            } else {
                                echo "Error en la consulta: " . mysqli_error($conexion);
                            }
                            
                            $consultaTotalEventos ="SELECT COUNT(*) AS cantidad_total_inscritos_eventos FROM (SELECT DISTINCT documento FROM `inscritos_eventos`) AS subconsultaEventos;";
                            $busquedaTotalEventos=mysqli_query($conexion,$consultaTotalEventos);
                            if ($busquedaTotalEventos) {
                              $filaTotalEventos = mysqli_fetch_assoc($busquedaTotalEventos);
                              $cantidad_total_inscritos_eventos = $filaTotalEventos['cantidad_total_inscritos_eventos'];
                            } else {
                                echo "Error en la consulta: " . mysqli_error($conexion);
                            }
                            $consultaEdadesCursos ="SELECT SUM(edad) FROM `inscritos_cursos`;";
                            $busquedaEdadesCursos=mysqli_query($conexion,$consultaEdadesCursos);
                            if ($busquedaEdadesCursos) {
                              $filaEdadesCursos = mysqli_fetch_assoc($busquedaEdadesCursos);
                              $EdadesCursos = $filaEdadesCursos["SUM(edad)"];
                            } else {
                                echo "Error en la consulta: " . mysqli_error($conexion);
                            }
                            $consultaEdadesEventos ="SELECT SUM(edad) FROM `inscritos_eventos`;";
                            $busquedaEdadesEventos=mysqli_query($conexion,$consultaEdadesEventos);
                            if ($busquedaEdadesEventos) {
                              $filaEdadesEventos = mysqli_fetch_assoc($busquedaEdadesEventos);
                              $EdadesEventos = $filaEdadesEventos["SUM(edad)"];
                            } else {
                                echo "Error en la consulta: " . mysqli_error($conexion);
                            }
                            // Calculando el promedio de edades
                            $totalDivisible = $cantidad_total_inscritos_eventos+$cantidad_total_inscritos_cursos;
                            $sumaEdades = $EdadesCursos+$EdadesEventos;
                            $EdadpromedioTotal = round($sumaEdades/$totalDivisible);
                          
                            
                            ?>
                        <!-- Contenido de la tabla -->

                        <tr>
                            <td><?php echo $totalEmprendedores; ?></td>
                            <td><?php echo $cantidad_total_inscritos_cursos; ?></td>
                            <td><?php echo $cantidad_total_inscritos_eventos; ?></td>
                            <td><?php echo $EdadpromedioTotal; ?></td>
                            <td><?php echo $row["fecha_hora"]; ?></td>
                            <td><?php echo $row["curso_inscrito"]; ?></td>
                            <td><?php echo $row["evento_inscrito"]; ?></td>
                        </tr>
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