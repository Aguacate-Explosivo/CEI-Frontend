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
                                <th>Tipo </th>
                                <th>Documento </th>
                                <th>Categoria </th>
                                <th>Nombre  </th>
                                <th>Telefono</th> 
                                <th>Correo</th> 
                                <th>Institucion</th> 
                                <th>Programa</th>   
                                <th>Direccion</th> 
                                <th>Edad</th> 
                                <th>Evento Inscrito</th> 
                                <th>Acciones</th>                           
                               
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
                                <a style="margin: 2px; border-radius: 5px;"  type="submit" href="eliminareventos.php?id=<?php echo $elemento["id"]?>" class="btn btn-danger" id="eliminar" name="eliminar" > eliminar</a>
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
      <footer class="footer text-center">
        FACNET - 2023 &copy; 
      </footer>
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <!--Nice scroll JavaScript -->
    <script src="../js/jquery.nicescroll.js"></script>
    <!--Wave Effects -->
    <script src="../js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../js/myadmin.js"></script>
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="../jquery/jquery-3.3.1.min.js"></script>
    <script src="../popper/popper.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- datatables JS -->
    <script type="text/javascript" src="../datatables/datatables.min.js"></script>    
    <!-- para usar botones en datatables JS -->  
    <script src="../datatables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>  
    <script src="../datatables/JSZip-2.5.0/jszip.min.js"></script>    
    <script src="../datatables/pdfmake-0.1.36/pdfmake.min.js"></script>    
    <script src="../datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="../datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
    <!-- código JS propìo-->    
    <script type="text/javascript" src="../js/main.js"></script>  
    <script src="../../sweet/dist/sweetalert2.all.min.js"></script>
    <script src="../../js/botones.js"></script>
  </body>
  <script src="../../sweet/dist/sweetalert2.all.min.js"></script>
</html>
