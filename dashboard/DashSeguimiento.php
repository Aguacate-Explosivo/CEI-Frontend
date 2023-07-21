<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Ficha de Seguimiento</title>
  <link rel="icon" type="image/webp" sizes="16x16" href="../img/logo.webp">
</head>
<?php require_once ("menu.php"); ?>
<body class="hold-transition sidebar-mini">
    <div id="page-wrapper">
      <div class="container-fluid">
        <div class="row bg-title">
          <div class="col-lg-12">
            <h4 class="page-title">
              Desde aquí puedes gestionar las fichas de seguimientos a los emprendedores
            </h4>
            <ol class="breadcrumb">
              <li><a href="#">Fichas de Seguimiento</a></li>
            </ol>
          </div>
        </div>
      </div>
      <!-- Contenido -->
      <div class="row">
          <div class="col-md-12">
            <div class="white-box">
              <h3 >Fichas de Seguimiento</h3>

              <div class="container-fluid">
                  <div class="jumbotron white-box">
                    <div class="container">
                        <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive"> 
            
                                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th style="text-align: center; vertical-align: middle;">Documento</th>    
                                <th style="text-align: center; vertical-align: middle;">Nombre</th>
                                <th style="text-align: center; vertical-align: middle;">Ficha De seguimiento</th> 
                                <th style="text-align: center; vertical-align: middle;">Citas Separadas</th>
                                <th style="text-align: center; vertical-align: middle;">Cursos inscritos</th>
                                <th >Eventos Inscritos</th>                 
                                <th>Simulaciones</th> 
                               
                            </tr>
                        </thead>
                                <?php
                                 require_once('../conexion.php');
                                 $conexion=conectar(); 
                                 $consulta2 ="SELECT * FROM `formatos` ";
                                 $busqueda=mysqli_query($conexion,$consulta2);
                                    
                            foreach($busqueda as $elemento){ ?>
                            <!-- Contenido de la tabla -->

                            <tr>
                              <td style="text-align: center; vertical-align: middle;"><?php echo $elemento["cedula"]; ?></td>
                                <td style="text-align: center; vertical-align: middle;"><?php echo $elemento["nombre"]; ?></td>
                                <td style="text-align: center; vertical-align: middle;">  <a style="margin: 2px; border-radius: 5px;" href="descargar.php?id=<?php echo $elemento["id"]; ?>" class="btn btn-danger" ><i class="fas fa-download"></i>
</a>
                            


                            <!-- Consulta de Simulaciones hechas -->
                            <?php
                            $documento = $elemento["cedula"];

                            $consultaCitas ="SELECT COUNT(*) AS cantidad_total_citas FROM (SELECT DISTINCT documento FROM `citas`) AS subconsultacitas WHERE documento = $documento;";
                            $busquedaCitas=mysqli_query($conexion,$consultaCitas);
                            if ($busquedaCitas) {
                              $filaCitas = mysqli_fetch_assoc($busquedaCitas);
                              $totalCitas = $filaCitas['cantidad_total_citas'];
                              ?>
                              <td style="text-align: center; vertical-align: middle;"><?php echo $totalCitas; ?></td>
                            <?php
                            } else {
                                echo "Error en la consulta: " . mysqli_error($conexion);
                            } 
                            ?>

                            <?php
                            $consultaTotalCursos ="SELECT COUNT(*) AS cantidad_total_inscritos_cursos FROM (SELECT DISTINCT documento FROM `inscritos_cursos`) AS subconsultaCursos WHERE documento = $documento;";
                            $busquedaTotalCurso=mysqli_query($conexion,$consultaTotalCursos);
                            if ($busquedaTotalCurso) {
                              $filaTotalCurso = mysqli_fetch_assoc($busquedaTotalCurso);
                              $cantidad_total_inscritos_cursos = $filaTotalCurso['cantidad_total_inscritos_cursos'];
                              ?>
                              <td style="text-align: center; vertical-align: middle;"><?php echo $cantidad_total_inscritos_cursos; ?></td>
                            <?php
                            } else {
                                echo "Error en la consulta: " . mysqli_error($conexion);
                            } 
                            ?>

                            <?php
                            $consultaTotalEventos ="SELECT COUNT(*) AS cantidad_total_inscritos_eventos FROM (SELECT DISTINCT documento FROM `inscritos_eventos`) AS subconsultaEventos WHERE documento = $documento;";
                            $busquedaTotalEventos=mysqli_query($conexion,$consultaTotalEventos);
                            if ($busquedaTotalEventos) {
                              $filaTotalEventos = mysqli_fetch_assoc($busquedaTotalEventos);
                              $cantidad_total_inscritos_eventos = $filaTotalEventos['cantidad_total_inscritos_eventos'];
                              ?>
                              <td style="text-align: center; vertical-align: middle;"><?php echo $cantidad_total_inscritos_eventos; ?></td>
                            <?php
                            } else {
                                echo "Error en la consulta: " . mysqli_error($conexion);
                            } 
                            ?>

                            <?php
                            $consultaSimulaciones ="SELECT COUNT(*) AS cantidad_total_simulaciones FROM (SELECT DISTINCT cc FROM `simulaciones`) AS subconsulta WHERE cc = $documento;";
                            $busquedaSimulaciones=mysqli_query($conexion,$consultaSimulaciones);
                            if ($busquedaSimulaciones) {
                              $fila = mysqli_fetch_assoc($busquedaSimulaciones);
                              $totalSimulaciones = $fila['cantidad_total_simulaciones'];
                              ?>
                              <td style="text-align: center; vertical-align: middle;"><?php echo $totalSimulaciones; ?></td>
                            <?php
                            } else {
                                echo "Error en la consulta: " . mysqli_error($conexion);
                            } 
                            ?>


                            </td>

                            </tr>
                                  <?php  } ?>  
                              </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>


      </div>
    </div>
    <!--  -->
    <?php require_once ("footer.php"); ?>
</body>
</html>
