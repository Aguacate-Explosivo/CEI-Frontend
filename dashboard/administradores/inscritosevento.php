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
                    <li class="page-item " aria-current="page"><a class="page-link" href="admineventos.php">Administrar Eventos </a></li>
                    <li class="page-item active"><a class="page-link" href="inscritosevento.php">Registro de Eventos </a></li>

                </ul>
            </nav>
            
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th style="text-align: center; vertical-align: middle;">Tipo </th>
                                <th style="text-align: center; vertical-align: middle;">Documento </th>
                                <th style="text-align: center; vertical-align: middle;">Categoria </th>
                                <th style="text-align: center; vertical-align: middle;">Nombre  </th>
                                <th style="text-align: center; vertical-align: middle;">Telefono</th> 
                                <th style="text-align: center; vertical-align: middle;">Correo</th> 
                                <th style="text-align: center; vertical-align: middle;">Institucion</th> 
                                <th style="text-align: center; vertical-align: middle;">Programa</th>   
                                <th style="text-align: center; vertical-align: middle;">Direccion</th> 
                                <th style="text-align: center; vertical-align: middle;">Edad</th> 
                                <th style="text-align: center; vertical-align: middle;">Evento Inscrito</th> 
                                <th style="text-align: center; vertical-align: middle;">Acciones</th>                           
                               
                            </tr>
                        </thead>
                                <?php
                                 require_once('../../conexion.php');
                                 $conexion=conectar(); 
                                 $consulta2 ="SELECT * FROM `inscritos_eventos` ";
                                 $busqueda=mysqli_query($conexion,$consulta2);
                            
                                
                            foreach($busqueda as $elemento){ ?>
                            <!-- Contenido de la tabla -->


                       
                            <tr>
                            <td><?php echo $elemento["tipodocumento"]; ?></td>
                            <td><?php echo $elemento["documento"]; ?></td>
                            <td><?php echo $elemento["categoria"]; ?></td>
                                <td><?php echo $elemento["nombre"]; ?></td>
                                <td><?php echo $elemento["telefono"]; ?></td>
                                <td><?php echo $elemento["correo"]; ?></td>
                                <td><?php echo $elemento["institucion"]; ?></td>
                                <td><?php echo $elemento["programa"]; ?></td>
                                <td><?php echo $elemento["direccion"]; ?></td>
                                <td><?php echo $elemento["edad"]; ?></td>
                                <td><?php echo $elemento["evento_inscrito"]; ?></td>
                                <td>
                                <a style="margin: 2px; border-radius: 5px;"  type="submit" href="eliminareventos.php?id=<?php echo $elemento["id"]?>" class="btn btn-danger" id="eliminar" name="eliminar" > <i class="fas fa-trash-alt fa-flip-horizontal"></i></a>
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
    

</html>
