<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard Citas</title> 
  
  </head>

  <body>
  <?php include_once("menu.php"); ?>
    <!-- Preloader -->
    <div class="preloader">
      <div class="cssload-speeding-wheel"></div>
    </div>
      <!-- Page Content -->
      <div id="page-wrapper">
        <div class="container-fluid">
          <div class="row bg-title">
            <div class="col-lg-12">
              <h4 class="page-title">Puedes gestionar tus eventos desde este modulo</h4>
              <ol class="breadcrumb">
              </ol>
            </div>
            <!-- /.col-lg-12 -->
          </div>
          <!-- row -->
          <div class="row">
            <div class="col-md-16">
              <div class="white-box">
                <h3>Modulo - Citas</h3>
                <!-- Container de citas(Data Tables) -->
                <div class="container-fluid">
                  <div class="jumbotron white-box">
                    <div class="container">
                        <div class="row">
                                <div class="col-lg-16">
                                    <div class="table-responsive"> 
                                    <nav aria-label="...">
                <ul class="pagination pagination-lg justify-content-center">
                    <li style="margin: 2px; border-radius: 5px; position: relative;" class="page-item "><a class="page-link" href="DashCitas.php">Citas Disponibles</a></li>
                    <li style="margin: 2px; border-radius: 5px; position: relative;" class="page-item active" aria-current="page"><a class="page-link" href="reprocitas.php">Reprogramar Citas </a></li>
                </ul>
            </nav>
            
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                               
                                <th>Numero de Documento</th>
                                <th>Nombre Completo</th>
                                <th>Numero de Telefono</th>
                                <th>Barrio</th>
                                <th>Fecha de Cita</th>
                                <th>Acciones</th>
                                
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
                                <td>
                                <div>
                                <a style="margin: 2px; border-radius: 5px; position: relative;" href="cita.php?idcita=<?php echo $row["idcita"]?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                <a style="margin: 2px; border-radius: 5px;"  href="eliminarcitas.php?idcita=<?php echo $row["idcita"]?>" class="btn btn-danger" > <i class="fas fa-trash-alt fa-flip-horizontal"></i></a>
                                </div>
                              </td>
                            </tr>
                        
                                 <?php
                                }
                                ?>
                       
                         
                                       
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
      <?php require_once ("../footer.php"); ?>
    </div>
  </body>
</html>
