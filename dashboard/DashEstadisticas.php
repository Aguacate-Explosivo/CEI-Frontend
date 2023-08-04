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

          <!-- Inicio ROW -->
          <div class="row">
            <div class="white-box">
            <h3 class="text-center">Modulo - Estadisticas Basicas de Emprendedores GRAFOS</h3>
                <div>
                  <canvas id="myChart"></canvas>
                </div>
            </div>
          </div>
          <!-- Fin ROW -->
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
                            <th>Total de Hombres inscritos en Cursos</th>
                            <th>Total de Mujeres inscritas en Cursos</th>
                            <th>Total de Personas LGBTIQ+ inscritas en Cursos</th>
                            <th>Total de Inscritos a Eventos</th>    
                            <th>Total de Hombres inscritos en Eventos</th>
                            <th>Total de Mujeres inscritas en Eventos</th>
                            <th>Total de Personas LGBTIQ+ inscritas en Eventos</th> 
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

                              $consultaTotalHombresCursos ="SELECT COUNT(*) AS genero_masculino_inscritos_cursos FROM (SELECT DISTINCT sexo FROM `inscritos_cursos`) AS subconsultaCursosGeneroHombre WHERE sexo = 'Hombre';";
                              $busquedaTotalHombresCurso=mysqli_query($conexion,$consultaTotalHombresCursos);
                              if ($busquedaTotalHombresCurso) {
                                $filaTotalHombresCurso = mysqli_fetch_assoc($busquedaTotalHombresCurso);
                                $cantidad_total_hombres_inscritos_cursos = $filaTotalHombresCurso['genero_masculino_inscritos_cursos'];
                              } else {
                                  echo "Error en la consulta: " . mysqli_error($conexion);
                              }

                              $consultaTotalMujeresCursos ="SELECT COUNT(*) AS genero_femenino_inscritos_cursos FROM (SELECT DISTINCT sexo FROM `inscritos_cursos`) AS subconsultaCursosGeneroMujer WHERE sexo = 'Mujer';";
                              $busquedaTotalMujeresCurso=mysqli_query($conexion,$consultaTotalMujeresCursos);
                              if ($busquedaTotalMujeresCurso) {
                                $filaTotalMujeresCurso = mysqli_fetch_assoc($busquedaTotalMujeresCurso);
                                $cantidad_total_mujeres_inscritos_cursos = $filaTotalMujeresCurso['genero_femenino_inscritos_cursos'];
                              } else {
                                  echo "Error en la consulta: " . mysqli_error($conexion);
                              }

                              $consultaTotalOtrosCursos ="SELECT COUNT(*) AS genero_otros_inscritos_cursos FROM (SELECT DISTINCT sexo FROM `inscritos_cursos`) AS subconsultaCursosGeneroOtro WHERE sexo = 'Otro';";
                              $busquedaTotalOtrosCurso=mysqli_query($conexion,$consultaTotalOtrosCursos);
                              if ($busquedaTotalOtrosCurso) {
                                $filaTotalOtrosCurso = mysqli_fetch_assoc($busquedaTotalOtrosCurso);
                                $cantidad_total_otros_inscritos_cursos = $filaTotalOtrosCurso['genero_otros_inscritos_cursos'];
                              } else {
                                  echo "Error en la consulta: " . mysqli_error($conexion);
                              }

                              $consultaTotalHombresEventos ="SELECT COUNT(*) AS genero_masculino_inscritos_eventos FROM (SELECT DISTINCT sexo FROM `inscritos_eventos`) AS subconsultaEventosGenero WHERE sexo = 'Hombre';";
                              $busquedaTotalHombresEventos=mysqli_query($conexion,$consultaTotalHombresEventos);
                              if ($busquedaTotalHombresEventos) {
                                $filaTotalHombresEventos = mysqli_fetch_assoc($busquedaTotalHombresEventos);
                                $cantidad_total_hombres_inscritos_Eventos = $filaTotalHombresEventos['genero_masculino_inscritos_eventos'];  
                                } else {
                                    echo "Error en la consulta: " . mysqli_error($conexion);
                                }
                              
                                $consultaTotalMujeresEventos ="SELECT COUNT(*) AS genero_femenino_inscritos_eventos FROM (SELECT DISTINCT sexo FROM `inscritos_eventos`) AS subconsultaEventosGeneroMujer WHERE sexo = 'Mujer';";
                                $busquedaTotalMujeresEventos=mysqli_query($conexion,$consultaTotalMujeresEventos);
                                if ($busquedaTotalMujeresEventos) {
                                  $filaTotalMujeresEventos = mysqli_fetch_assoc($busquedaTotalMujeresEventos);
                                  $cantidad_total_mujeres_inscritos_eventos = $filaTotalMujeresEventos['genero_femenino_inscritos_eventos'];
                                } else {
                                    echo "Error en la consulta: " . mysqli_error($conexion);
                                }
  
                                $consultaTotalOtrosEventos ="SELECT COUNT(*) AS genero_otros_inscritos_eventos FROM (SELECT DISTINCT sexo FROM `inscritos_eventos`) AS subconsultaEventosGeneroOtro WHERE sexo = 'Otro';";
                                $busquedaTotalOtrosEventos=mysqli_query($conexion,$consultaTotalOtrosEventos);
                                if ($busquedaTotalOtrosEventos) {
                                  $filaTotalOtrosEvento = mysqli_fetch_assoc($busquedaTotalOtrosEventos);
                                  $cantidad_total_otros_inscritos_eventos = $filaTotalOtrosEvento['genero_otros_inscritos_eventos'];
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
                            $totalDivisible = $cantidad_total_inscritos_eventos+$cantidad_total_inscritos_cursos;
                            $sumaEdades = $EdadesCursos+$EdadesEventos;
                            $EdadpromedioTotal = round($sumaEdades/$totalDivisible);
                          
                            $consultaCategorias ="SELECT categoria, COUNT(*) AS cantidad_emprendedores FROM `categoriasemprendimiento` GROUP BY categoria HAVING cantidad_emprendedores = ( SELECT MAX(contador) FROM ( SELECT COUNT(*) AS contador FROM `categoriasemprendimiento` GROUP BY categoria ) AS subconsulta );";
                            $busquedaCategorias=mysqli_query($conexion,$consultaCategorias);
                            if ($busquedaCategorias) {
                              $filaCategorias = mysqli_fetch_assoc($busquedaCategorias);
                              $Categorias = $filaCategorias["categoria"];
                              $CantidadEmprendedoresCategorias = $filaCategorias["cantidad_emprendedores"];
                            } else {
                                echo "Error en la consulta: " . mysqli_error($conexion);
                            }
                            
                            $consultaIngresosEmprendedores ="SELECT SUM(ingresos) FROM `categoriasemprendimiento`;";
                            $busquedaIngresosEmprendedores=mysqli_query($conexion,$consultaIngresosEmprendedores);
                            if ($busquedaIngresosEmprendedores) {
                              $filaIngresosEmprendedores = mysqli_fetch_assoc($busquedaIngresosEmprendedores);
                              $TotalIngresosEmprendedores = $filaIngresosEmprendedores["SUM(ingresos)"];
                            } else {
                                echo "Error en la consulta: " . mysqli_error($conexion);
                            }
                            $promedioIngresosEmprendedore = $TotalIngresosEmprendedores/$totalEmprendedores;
                            $promedioIngresosEmprendedores = number_format($promedioIngresosEmprendedore, 2 ,',', '.');

                            ?>
                        <!-- Contenido de la tabla -->

                        <tr>
                            <td><?php echo $totalEmprendedores; ?></td>
                            <td><?php echo $cantidad_total_inscritos_cursos; ?></td>
                            <td><?php echo $cantidad_total_hombres_inscritos_cursos ?></td>
                            <td><?php echo $cantidad_total_mujeres_inscritos_cursos ?> </td>
                            <td><?php echo $cantidad_total_otros_inscritos_cursos ?> </td>
                            <td><?php echo $cantidad_total_inscritos_eventos; ?></td>
                            <td> <?php echo $cantidad_total_hombres_inscritos_Eventos ?></td>  
                            <td><?php echo $cantidad_total_mujeres_inscritos_eventos ?></td>
                            <td><?php echo $cantidad_total_otros_inscritos_eventos ?></td>  
                            <td><?php echo $EdadpromedioTotal; ?></td>
                            <td><?php echo $Categorias; ?></td>
                            <td><?php echo $CantidadEmprendedoresCategorias; ?></td>
                            <td><?php echo $promedioIngresosEmprendedores; ?></td>
                        </tr>
                    </table>                  
                    </div>  
                <!-- Fin data Table -->

            </div>
            
          </div>
          <!-- /.row -->

        </div>
        <!-- /.container-fluid -->
        <?php require_once ("footer.php"); ?>
      </div>
      <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script>
          const ctx = document.getElementById('myChart');
          new Chart(ctx, {
            type: 'bar',
            data: {
              labels: ['Total de Emprendedores' , 'Total de Inscritos a Cursos', 'Total de Hombres en Cursos', 'Total de Mujeres en Cursos' ,'Total de LGBTIQ+ en Cursos' , 'Total de Inscritos a Eventos', 'Total de Hombres en Eventos', 'Total de Mujeres en Eventos' ,'Total de LGBTIQ+ en Eventos' , 'Promedio de Edad de emprendedores', 'Categorias de Plan mas Frecuentes: <?php echo $Categorias; ?>'],
              datasets: [{
                label: 'Cantidades',
                data: [<?php echo $totalEmprendedores; ?>, <?php echo $cantidad_total_inscritos_cursos; ?> , <?php echo $cantidad_total_hombres_inscritos_cursos ?>,<?php echo $cantidad_total_mujeres_inscritos_cursos ?> , <?php echo $cantidad_total_otros_inscritos_cursos ?> , <?php echo $cantidad_total_inscritos_eventos; ?>,<?php echo $cantidad_total_hombres_inscritos_Eventos ?>, <?php echo $cantidad_total_mujeres_inscritos_eventos ?>,<?php echo $cantidad_total_otros_inscritos_eventos ?> , <?php echo $EdadpromedioTotal; ?> , <?php echo $CantidadEmprendedoresCategorias; ?>],
                backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)',
                'rgba(50, 250, 50, 0.2)',
                'rgba(255, 12, 35, 0.2)',
                'rgba(15, 52, 255, 0.2)',
                'rgba(101, 103, 207, 0.2)'
              ],
              borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)',
                'rgb(50, 250, 50)',
                'rgb(255, 12, 35)',
                'rgb(15, 52, 255)',
                'rgb(101, 103, 207)'
              ],
                borderWidth: 1
              }]
            },
            options: {
              scales: {
                y: {
                  beginAtZero: true
                }
              }
            }
          });
      </script>
  </body>
</html>                      