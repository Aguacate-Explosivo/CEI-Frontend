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

      // datos formulario 4 

      // datos formulario 5
      $_SESSION['cantidad_producto'] = htmlentities($_POST["cantidad_producto"]);
      // nuevos datos de formulario
      $_SESSION['valor_total_gasto'] = htmlentities($_POST["valor_total_gasto"]);
      $_SESSION['cantidad_producir'] = htmlentities($_POST["cantidad_producir"]);

      $_SESSION['importe'] = htmlentities($_POST["importe"]);
      $_SESSION['nombreproducto'] = htmlentities($_POST["nombreproducto"]);


  
      // Redirecion a la siguiente pagina
      header("location:agregar_costos.php");
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

  $cantidad_producto =  $_SESSION['cantidad_producto'];
  $cantidad_producir =  $_SESSION['cantidad_producir'];
  $nombreproducto =  $_SESSION['nombreproducto'];


  $importe =  $_SESSION['importe'];

  //agregar tabla a base de datos
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

  <body style="background-image: url(img/fondo.png);">
  <?php
  include_once("../simulaciones/menu1.php");
  ?>
    <!-- Preloader -->
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
        <!-- /.sidebar-collapse -->
    
      <!-- Page Content -->
      <div class="wrapper" style="background: white; width: 80%; margin: auto;">
        <div class="container-fluid">
          <div class="row bg-title">
            <div class="col-lg-12">
              <h4 class="page-title">Sexto Paso Agregar Gastos</h4>
              <div style="float: right;  width: 200px; ">
                             <a href="drop.php" class="btn btn-danger btn-block btn-rounded waves-effect waves-light">Cerrar Sumulacion </a>
                            </div>
              <ol class="breadcrumb">
              </ol>
            </div>
            <!-- /.col-lg-12 -->
          </div>
          <!-- row -->
          <!-- inicio-->
<hr>
<form class="range-form" action="regisgasto.php" required=" " method="POST" enctype="multipart/form-data" >
 <div class="inicio">
    <div class="scroll">
      <br><br><br><br><br><br>
    <div class="col-md-16">
    <div class="input-group">
    <input type="text" style="width: 1000px;"  id="nombre" name="nombre" class="form-control"
    placeholder="Nombre del gasto:" required=""  maxlength="16" minlength="1" pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9-,.]+"  >
    <button class="btn btn-outline-secondary" type="button" data-toggle="tooltip" data-placement="top" title="Aqui debes proporcionar el NOMBRE de cada GASTO">
     <i class="fas fa-question"></i>
      </button>
    <label for="nombre" class="form__label"></label>
    </div>
      </div>
<br>
<br>
<br>
  <div class="col-md-16">
    <div class="input-group">
    <input type="text" style="width: 1000px;" class="form-control" id="valor" name="valor"
    placeholder="Valor del gasto:" required="" pattern="[0-9]+" >
    <button class="btn btn-outline-secondary" type="button" data-toggle="tooltip" data-placement="top" title="Aqui debes proporcionar el VALOR  de cada uno de los gastos ">
     <i class="fas fa-question"></i>
      </button>
          <label for="Valor del gasto" class="form__label"></label>

    </div>
    </div>
    <br>
<br>
 <div>
 <br>
 <input type="hidden" id="documento" name="documento" value="<?php  echo $documento; ?>">

<br>
<button type="submit" class="btn btn-success btn-block btn-rounded waves-effect waves-light">Agregar Gastos</button>


</div>
<br>

</form>
</div>


<div class="table">
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th style="text-align: center; height: 40px; vertical-align: middle;" >Gasto</th>
                                <th style="text-align: center; height: 40px; vertical-align: middle;" >Valor</th>     
                                <th style="text-align: center; height: 40px; vertical-align: middle;" >Acciones</th>                     
                            </tr>
                        </thead>
                                <?php
                                 require_once('../../conexion.php');
                                 $conexion=conectar(); 
                                 $consulta2 ="SELECT * FROM ` $documento` ";
                                 $busqueda=mysqli_query($conexion,$consulta2);
                                   
                                 $consulta21 ="SELECT SUM(valor) as valor_total_gasto  FROM ` $documento` ";
                                 $busqueda1=mysqli_query($conexion,$consulta21);
                                 $total11= mysqli_fetch_array($busqueda1);
                                 $valor_total_gasto = $total11['valor_total_gasto'];
                                 $valor_total_gastos = $valor_total_gasto;                                                            
                                 $valor_total_gastos = number_format($valor_total_gastos, 2 ,',', '.');

                            foreach($busqueda as $elemento){ 
                              $_SESSION['Id_producto_gasto'] =  $elemento["id"];
                              ?>
                            <!-- Contenido de la tabla -->
                            <tr>
                                <td style="text-align: center; vertical-align: middle;" ><?php echo $elemento["nombre"]; ?></td>
                                <td style="text-align: center; vertical-align: middle;"><?php echo $elemento["valor"]; ?></td>
                                
                                <td style="text-align: center; vertical-align: middle;">
                                <a style="margin: 2px; border-radius: 5px;" href="eliminar_gastos.php?id=<?php echo $elemento["id"]; ?>&documento=<?php echo $documento; ?>" class="btn btn-danger" > Eliminar</a>
                                 </td>
                            </tr>
                           
                                 <?php
                                }
                                ?>   
                                
                                <thead>
                                <tr><th ></th>
                                <th style="text-align: center; vertical-align: middle;" ><?php echo $valor_total_gastos; ?></th>
                                
                                <th style="text-align: center; vertical-align: middle;">PORCENTAJES</th>
                            </tr>
                                </thead>
                       </table>
                       </div></div>
                       <form  method="POST" enctype="multipart/form-data" >
  <button style="width: 300px; left:40px; height: 50px; "  value="Siguiente" name="Siguiente"  type="submit" class="btn btn-warning btn-block btn-rounded waves-effect waves-light">Siguiente</button>  
                      
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

                                                            
                                                            <input type="hidden" id="cantidad_producto" name="cantidad_producto" value="<?php echo $cantidad_producto; ?>">
                                                            <label for="cantidad_producto" class="form__label"></label>
                                                            

                                                            <input type="hidden" id="valor_total_gasto" name="valor_total_gasto" value="<?php echo $valor_total_gasto; ?>">
                                                            <label for="valor_total_gasto" class="form__label"></label>
                                                            <input type="hidden" id="cantidad_producir" name="cantidad_producir" value="<?php echo $cantidad_producir; ?>">
                                                            <label for="cantidad_producir" class="form__label"></label>
  
                                                            <input type="hidden" id="nombreproducto" name="nombreproducto" value="<?php echo $nombreproducto; ?>">
                                                            <label for="nombreproducto" class="form__label"></label>
                                                            <input type="hidden" id="importe" name="importe" value="<?php echo $importe; ?>">
                                                            <label for="importe" class="form__label"></label>
                                                        </div>
                                                        </form>                               
</div>
 </div>                     



<!-- inicio -->
          <!-- /.row -->
       
   <footer>
      <?php
      include_once("../footer.php")
      ?>
   </footer>
      
      <!-- /#page-wrapper -->
      
    