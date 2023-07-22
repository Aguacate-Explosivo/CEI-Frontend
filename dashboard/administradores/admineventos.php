<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- <script defer src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, severny admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, my admin design, my admin dashboard bootstrap 4 dashboard template"
    />
    <meta
      name="description"
      content="My Admin is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Dashboard Eventos</title>
    <link
      rel="canonical"
      href="https://www.wrappixel.com/templates/myadmin-lite/"
    />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon.png" />
    <!-- Bootstrap Core CSS -->
    <link
      href="../bower_components/bootstrap/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Menu CSS -->
    <link
      href="../bower_components/metisMenu/dist/metisMenu.min.css"
      rel="stylesheet"
    />
    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="../datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="../datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
    <!--font awesome con CDN-->  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
  </head>

  <body>
  <?php
      include_once("../sesion_validacion.php");
      require_once("menu.php");
      ?>
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
            <div class="col-md-12">
              <div class="white-box">
                <h3>Modulo - Eventos</h3>
                <!-- Container de citas(Data Tables) -->
                <div class="container-fluid">
                  <div class="jumbotron white-box">
                    <div class="container">
                        <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive"> 
                                    <nav aria-label="...">
                 <ul class="pagination pagination-lg justify-content-center">
                    <li class="page-item "><a class="page-link" href="../DashEventos.php">Añadir un nuevo Evento</a></li>
                    <li class="page-item active" aria-current="page"><a class="page-link" href="admineventos.php">Administrar Eventos </a></li>
                    <li class="page-item"><a class="page-link" href="inscritosevento.php">Registro de Eventos </a></li>

                </ul>
            </nav>
            <style>
  
  .course-image {
    border-radius: 10px;
      width: 100%;
      height: 100px; 
      object-fit: cover; 
  }


</style>
                                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th style="text-align: center; vertical-align: middle;">Nombre del evento </th>
                                <th style="text-align: center; vertical-align: middle;">descripcion del evento</th>    
                                <th style="text-align: center; vertical-align: middle;">Lugar</th> 
                                <th style="text-align: center; vertical-align: middle;">Fecha</th> 
                                <th style="text-align: center; vertical-align: middle;">Hora</th> 
                                <th style="text-align: center; vertical-align: middle;">Estado</th>
                                <th style="text-align: center; vertical-align: middle;">Imagen</th> 
                                <th style="text-align: center; vertical-align: middle;">Acciones</th>                           
                               
                            </tr>
                        </thead>
                                <?php
                                 require_once('../../conexion.php');
                                 $conexion=conectar(); 
                                 $consulta2 ="SELECT * FROM `eventos` ";
                                 $busqueda=mysqli_query($conexion,$consulta2);
                                    
                            foreach($busqueda as $elemento){ ?>
                            <!-- Contenido de la tabla -->


                       
                            <tr>
                                <td style="text-align: center; vertical-align: middle;"><?php echo $elemento["nombreEven"]; ?></td>
                                <td style="text-align: center; vertical-align: middle;"><?php echo $elemento["descripcionEven"]; ?></td>
                                <td style="text-align: center; vertical-align: middle;"><?php echo $elemento["lugar"]; ?></td>
                                <td style="text-align: center; vertical-align: middle;"><?php echo $elemento["fecha"]; ?></td>
                                <td style="text-align: center; vertical-align: middle;"><?php echo $elemento["hora"]; ?></td>
                                <td style="text-align: center; vertical-align: middle;"><?php echo $elemento["estado"]; ?></td>
                                <td style="text-align: center; vertical-align: middle;"><img src="data:image/jpg;base64,<?php echo base64_encode($elemento["imagen"]); ?>" class="card-img-top course-image"></td>
                                <td style="text-align: center; vertical-align: middle;">
                                <a style="margin: 2px; border-radius: 5px;" href="evento.php?id_evento=<?php echo $elemento["id_evento"]?>" class="btn btn-warning" > <i class="fas fa-edit"></i></a>
                                <a style="margin: 2px; border-radius: 5px;" href="eliminarevento.php?id_evento=<?php echo $elemento["id_evento"]?>" class="btn btn-danger" > <i class="fas fa-trash-alt fa-flip-horizontal"></i></a>
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
        <?php require_once ("../footer.php"); ?>  
      </div>
      <!-- /#page-wrapper -->
    </div>
 
  </body>
</html>
