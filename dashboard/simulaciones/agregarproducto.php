<?php
  session_start();
  if(isset($_POST["Siguiente"])){
  
    //Datos del formulario 1
    $_SESSION['doc_autor_plan'] = htmlentities($_POST["doc_autor_plan"]);
      $_SESSION['autor_plan'] = htmlentities($_POST["autor_plan"]);
      $_SESSION['autor_email'] = htmlentities($_POST["autor_email"]);

      //Datos del formulario 2
      $_SESSION['nombre_negocio_plan'] = htmlentities($_POST["nombre_negocio_plan"]);
      $_SESSION['industria_plan'] = htmlentities($_POST["industria_plan"]);
      $_SESSION['zona_geografica_plan'] = htmlentities($_POST["zona_geografica_plan"]);
      $_SESSION['negocio_nuevo'] = htmlentities($_POST["negocio_nuevo"]);
      $_SESSION['negocio_existente'] = htmlentities($_POST['negocio_existente']);
      $_SESSION['publico_objetivo_plan'] = htmlentities($_POST["publico_objetivo_plan"]);
      $_SESSION['innovacion_negocio_plan'] = htmlentities($_POST["innovacion_negocio_plan"]);
      $_SESSION['Precio_negocio_plan'] = htmlentities($_POST["Precio_negocio_plan"]);
      $_SESSION['Calidad_negocio_plan'] = htmlentities($_POST["Calidad_negocio_plan"]);
      $_SESSION['Rapidez_negocio_plan'] = htmlentities($_POST["Rapidez_negocio_plan"]);

      // datos de formulario 3 
      $_SESSION['clientes_interesados_plan'] = htmlentities($_POST["clientes_interesados_plan"]);
      $_SESSION['cantidadMonetaria_interesados_plan'] = htmlentities($_POST["cantidadMonetaria_interesados_plan"]);
      $_SESSION['socios_productores'] = htmlentities($_POST["socios_productores"]);
      $_SESSION['tipo_marketing_plan'] = htmlentities($_POST["tipo_marketing_plan"]);
      $_SESSION['inversion_publicidad'] = htmlentities($_POST["inversion_publicidad"]);

   
      // nuevos datos de formulario
      $_SESSION['nombre_producto'] = htmlentities($_POST["nombre_producto"]);
      $_SESSION['cantidad_producto'] = htmlentities($_POST["cantidad_producto"]);
      $_SESSION['coste_unidad_producto'] = htmlentities($_POST["coste_unidad_producto"]);
      $_SESSION['precio_venta_producto'] = htmlentities($_POST["precio_venta_producto"]);
      $_SESSION['importe'] = htmlentities($_POST["importe"]);
 
  
      // Redirecion a la siguiente pagina
      header("location:agregargastos.php");
  }

  // Variables de los datos anteriores
  $documento = $_SESSION['doc_autor_plan'] ;
  $nombre = $_SESSION['autor_plan'] ;
  $autor_email =  $_SESSION['autor_email'] ;
  $nombre_negocio_plan = $_SESSION['nombre_negocio_plan'];
  $industria_plan = $_SESSION['industria_plan'];
  $zona_geografica_plan = $_SESSION['zona_geografica_plan'];
  $negocio_nuevo = $_SESSION['negocio_nuevo'];
  $negocio_existente = $_SESSION['negocio_existente'];
  $publico_objetivo_plan = $_SESSION['publico_objetivo_plan'];
  $innovacion_negocio_plan = $_SESSION['innovacion_negocio_plan'];
  $Precio_negocio_plan = $_SESSION['Precio_negocio_plan'];
  $Calidad_negocio_plan = $_SESSION['Calidad_negocio_plan'];
  $Rapidez_negocio_plan =  $_SESSION['Rapidez_negocio_plan'];
  $clientes_interesados_plan =  $_SESSION['clientes_interesados_plan'];
  $cantidadMonetaria_interesados_plan =  $_SESSION['cantidadMonetaria_interesados_plan'];
  $socios_productores =  $_SESSION['socios_productores'];
  $tipo_marketing_plan =  $_SESSION['tipo_marketing_plan'];
  $inversion_publicidad =  $_SESSION['inversion_publicidad'];
  

?>

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
    <title>Dashboard Simulaciones</title>
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
    <link href="../css/stylese.css" rel="stylesheet">
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

  <body style="  background-image: url(img/fondo.png);">
  <?php
  include_once("menu1.php");
  ?>
    <style>
  .input-group {
    display: flex;
    align-items: center;
   
  }

  .input-group .form-control {
    flex-grow: 1;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }

  .input-group .input-group-append {
    margin-left: -1px;
    z-index: 10;
  }
</style>
      <!-- Page Content -->
      <div class="wrapper" style="background: white; width: 1200px;  max-height: 10000px; margin: auto;">
        <div class="">
          <div class="row bg-title">
            <div class="col-lg-12">
              <h4 class="page-title">Paso 4 Agregar Productos</h4>
               <div style="float: right;  width: 200px; ">
                             <a href="drop1.php" class="btn btn-danger btn-block btn-rounded waves-effect waves-light">Cerrar Sumulacion </a>
                            </div>
          
            </div>
            <!-- /.col-lg-12 -->
          </div>
          <!-- row -->
          <!-- inicio-->
<hr>
<form class="range-form" action="regisprodu.php" required=" " method="POST" enctype="multipart/form-data" >
 <div class="inicio">
    <div class="scroll">
    <div class="col-md-9">
    <div class="input-group">
    <input style="width: 1000px;" type="text" id="nombre_producto1" name="nombre_producto1" class="form-control"
    placeholder="Nombre Producto:" required=""  maxlength="16" minlength="1" pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9-,.]+"  >
    <button class="btn btn-outline-secondary" type="button" data-toggle="tooltip" data-placement="top" title="Aqui debes proporcionar el NOMBRE de cada producto que se operara">
     <i class="fas fa-question"></i>
      </button>
    <label for="producto" class="form__label"></label>
    </div>
    </div>
<br>
<br> 
<br>
  <div class="col-md-9">
  <div class="input-group">
    
      <input type="text" style="width: 1000px;"  class="form-control" id="cantidad_producto1" name="cantidad_producto1"
    placeholder="Cantidad producto:" required pattern="[0-9]+" >
    <button class="btn btn-outline-secondary" type="button" data-toggle="tooltip" data-placement="top" title="Aqui debes proporcionar la CANTIDAD de productos que se van a vender ">
     <i class="fas fa-question"></i>
      </button>
    <label for="cantidad" class="form__label"></label>

    </div>
    </div>
<br>
<br>
<br>
  <div class="col-md-9">
  <div class="input-group">
    <input type="text"  style="width: 1000px;" class="form-control" id="coste_unidad_producto1" name="coste_unidad_producto1"
    placeholder="Coste Unitario:" required pattern="[0-9]+" >
    <button class="btn btn-outline-secondary" type="button" data-toggle="tooltip" data-placement="top" title="Aqui debes proporcionar lo que a usted como emprendedor le cuesta CADA PRODUCTO POR UNIDAD ">
     <i class="fas fa-question"></i>
      </button>
      <label for="coste_unidad_producto1" class="form__label"></label>
    </div>
    </div>
<br>
<br>
<br>
  <div class="col-md-9">
  <div class="input-group">
    <input type="text" style="width: 1000px;" class="form-control" id="precio_venta_producto1" name="precio_venta_producto1"
    placeholder="Precio Venta:" required pattern="[0-9]+" >
    <button class="btn btn-outline-secondary" type="button" data-toggle="tooltip" data-placement="top" title="Aqui debes proporcionar el PRECIO DE VENTA de cada producto">
     <i class="fas fa-question"></i>
      </button>
      <label for="precio_venta_producto1" class="form__label"></label>
    </div>
    </div>
    <br>
<br>
<br>

    <br>
<br>
<br>
<input type="hidden" id="nombre_negocio_plan" name="nombre_negocio_plan" value="<?php  echo $nombre_negocio_plan; ?>">

<br>
 <div>
 <br>
<br>
<button type="submit" class="btn btn-success btn-block btn-rounded waves-effect waves-light">Agregar Producto</button>
</div>
<br>
<br> <br>


<br>

</form>
</div>


<div class="table">
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Producto </th>
                                <th>Cantidad </th>    
                                <th>Coste Unitario</th> 
                                <th>Precio Venta</th> 
                                <th>Acciones</th>                     
                            </tr>
                        </thead>
                                <?php
                                 require_once('../../conexion.php');
                                 $conexion=conectar(); 
                                 $consulta2 ="SELECT * FROM ` $nombre_negocio_plan` ";
                                 $busqueda=mysqli_query($conexion,$consulta2);
                                   
                                 $consulta21 ="SELECT SUM(cantidad) as cantidad_producto  FROM ` $nombre_negocio_plan` ";
                                 $busqueda1=mysqli_query($conexion,$consulta21);
                                 $total222= mysqli_fetch_array($busqueda1);
                                 $cantidad_producto = $total222['cantidad_producto'];
                                 $cantidad_productos = $cantidad_producto;
                                 $cantidad_productos = number_format($cantidad_productos, 2 ,',', '.');

                                 $consulta22 ="SELECT SUM(coste_unitario) as coste_unidad_producto  FROM ` $nombre_negocio_plan` ";
                                 $busqueda2=mysqli_query($conexion,$consulta22);
                                 $total333= mysqli_fetch_array($busqueda2);
                                 $coste_unidad_producto = $total333['coste_unidad_producto'];
                                 $coste_unidad_productos = $coste_unidad_producto;
                                 $coste_unidad_productos = number_format($coste_unidad_productos, 2 ,',', '.');

                                 $consulta23 ="SELECT SUM(precio_venta) as precio_venta_producto  FROM ` $nombre_negocio_plan` ";
                                 $busqueda3=mysqli_query($conexion,$consulta23);
                                 $total444= mysqli_fetch_array($busqueda3);
                                 $precio_venta_producto = $total444['precio_venta_producto']; 
                                 $precio_venta_productos = $precio_venta_producto; 
                                 $precio_venta_productos = number_format($precio_venta_productos, 2 ,',', '.');

                            foreach($busqueda as $elemento){ 
                                $_SESSION['Id_producto'] =  $elemento["id"];
                              ?>
                            <!-- Contenido de la tabla -->
                            <tr>
                                <td><?php echo $elemento["nombre"]; ?></td>
                                <td><?php echo $elemento["cantidad"]; ?></td> 
                                <td><?php echo $elemento["coste_unitario"]; ?></td>
                                <td><?php echo $elemento["precio_venta"]; ?></td>
                                <td>
                                <a style="margin: 2px; border-radius: 5px;" href="eliminar.php?id=<?php echo $elemento["id"]; ?>&nombre_negocio_plan=<?php echo $nombre_negocio_plan; ?>" class="btn btn-danger" > Eliminar</a>
                                 </td>
                            </tr>
                           
                                 <?php
                                }
                                ?>   
                                
                                <thead>
                                <tr>
                                <th ></th>
                                <th ><?php echo $cantidad_productos; ?></th>
                                <th ><?php echo $coste_unidad_productos; ?></th>
                                <th ><?php echo $precio_venta_productos; ?></th>
                                
                                
                                <th>PORCENTAJES</th>
                            </tr>
                                </thead>
                       </table>
                       </div>
                      
                       </div>
                       
                                                     
                       <form  method="POST" enctype="multipart/form-data" >
                        <div class="table">
                       <div class="col-md-9">
    <div class="input-group">
    <label for="importe" class="form__label">Porsentaje de Importe </label>
    <input type="text"   maxlength="4" minlength="1" class="form-control" id="importe" value="19" name="importe"
    placeholder="Importe :" required pattern="[0-9 .]+" >
    <button class="btn btn-outline-secondary" type="button" data-toggle="tooltip" data-placement="top" title="Aqui debes proporcionar el IMPORTE o IVA de los productos que agrego anteriormente, por defecto se seleccionara el 19% ">
     <i class="fas fa-question"></i>
      </button>
      

</div>
    </div>
    </div>
                       <button style="width: 300px; left:100px; height: 50px; "  value="Siguiente" name="Siguiente"  type="submit" class="btn btn-warning btn-block btn-rounded waves-effect waves-light">Siguiente</button>  

                        <!-- Inputs para transferir informacion -->
                        <div>
                                                            <!-- Form 1 -->
                                                            <input type="hidden" id="doc_autor_plan" name="doc_autor_plan" value="<?php  echo $documento; ?>">
                                                            <label for="doc_autor_plan" class="form__label"></label>
                                                            <input type="hidden" id="autor_plan" name="autor_plan" value="<?php echo $nombre; ?>">
                                                            <label for="autor_plan" class="form__label"></label>
                                                            <input type="hidden" id="autor_email" name="autor_email" value="<?php echo $autor_email; ?>">
                                                            <label for="autor_email" class="form__label"></label>

                                                            <!-- Form 2 -->
                                                            <input type="hidden" id="nombre_negocio_plan" name="nombre_negocio_plan" value="<?php  echo $nombre_negocio_plan; ?>">
                                                            <label for="nombre_negocio_plan" class="form__label"></label>
                                                            <input type="hidden" id="industria_plan" name="industria_plan" value="<?php echo $industria_plan; ?>">
                                                            <label for="industria_plan" class="form__label"></label>
                                                            <input type="hidden" id="negocio_nuevo" name="negocio_nuevo" value="<?php echo $negocio_nuevo ?> - <?php echo $negocio_existente ?>">
                                                            <label for="negocio_nuevo" class="form__label"></label>
                                                            <input type="hidden" id="zona_geografica_plan" name="zona_geografica_plan" value="<?php  echo $zona_geografica_plan; ?>">
                                                            <label for="zona_geografica_plan" class="form__label"></label>
                                                            <input type="hidden" id="publico_objetivo_plan" name="publico_objetivo_plan" value="<?php echo $publico_objetivo_plan; ?>">
                                                            <label for="publico_objetivo_plan" class="form__label"></label>
                                                            <input type="hidden" id="innovacion_negocio_plan" name="innovacion_negocio_plan" value="<?php echo $innovacion_negocio_plan ?>">
                                                            <label for="innovacion_negocio_plan" class="form__label"></label>
                                                            <input type="hidden" id="Precio_negocio_plan" name="Precio_negocio_plan" value="<?php  echo $Precio_negocio_plan; ?>">
                                                            <label for="Precio_negocio_plan" class="form__label"></label>
                                                            <input type="hidden" id="Calidad_negocio_plan" name="Calidad_negocio_plan" value="<?php echo $Calidad_negocio_plan; ?>">
                                                            <label for="Calidad_negocio_plan" class="form__label"></label>
                                                            <input type="hidden" id="Rapidez_negocio_plan" name="Rapidez_negocio_plan" value="<?php echo $Rapidez_negocio_plan; ?>">
                                                            <label for="Rapidez_negocio_plan" class="form__label"></label>
                                                            <input type="hidden" id="clientes_interesados_plan" name="clientes_interesados_plan" value="<?php echo $clientes_interesados_plan; ?>">
                                                            <label for="clientes_interesados_plan" class="form__label"></label>
                                                            <input type="hidden" id="cantidadMonetaria_interesados_plan" name="cantidadMonetaria_interesados_plan" value="<?php echo $cantidadMonetaria_interesados_plan; ?>">
                                                            <label for="cantidadMonetaria_interesados_plan " class="form__label"></label>
                                                            <input type="hidden" id="socios_productores" name="socios_productores" value="<?php echo $socios_productores; ?>">
                                                            <label for="socios_productores" class="form__label"></label>
                                                            <input type="hidden" id="tipo_marketing_plan" name="tipo_marketing_plan" value="<?php echo $tipo_marketing_plan; ?>">
                                                            <label for="tipo_marketing_plan" class="form__label"></label>
                                                            <input type="hidden" id="inversion_publicidad" name="inversion_publicidad" value="<?php echo $inversion_publicidad; ?>">
                                                            <label for="inversion_publicidad" class="form__label"></label>

                                                            
                                                       
                                                            <input type="hidden" id="precio_venta_producto" name="precio_venta_producto" value="<?php echo $precio_venta_producto; ?>">
                                                            <label for="precio_venta_producto" class="form__label"></label>
                                                          
                                                            <input type="hidden" id="cantidad_producto" name="cantidad_producto" value="<?php echo $cantidad_producto; ?>">
                                                            <label for="cantidad_producto" class="form__label"></label>
                                                            <input type="hidden" id="coste_unidad_producto" name="coste_unidad_producto" value="<?php echo $coste_unidad_producto; ?>">
                                                            <label for="coste_unidad_producto" class="form__label"></label>
                                                          </div>
                                                          <br><br><br><br><br>


    
                                                        </form>

                                                        <div>

</div>
                                                        <br><br><br><br><br>
                                           
</div>
 </div>                     
 


<!-- inicio -->
          <!-- /.row -->
       
        <!-- /.container-fluid -->
  
      <!-- /#page-wrapper -->
      
 
  </body>
  <footer>
      <?php
  include_once("../footer.php");
  ?>
    </footer>
      
</html>
