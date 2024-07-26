<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="../../img/logo.webp">
    <title>CEI | Eventos</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body  >  

<?php
      include_once("../sesion_validacion.php")
      ?>


    <!-- Formulario -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-5 mb-5">Editar Eventos
            </div>
            <div class="row g-5">
                <div class="col-lg-6 mx-auto wow fadeInUp" data-wow-delay="0.1s">
          
                <?php 
         require_once('../../conexion.php');
         $conexion=conectar(); 
         $id_evento=$_REQUEST['id_evento'];
         
         $consulta ="SELECT * FROM eventos where id_evento = $id_evento";
         $busqueda=mysqli_query($conexion,$consulta);

         $fila = $busqueda -> fetch_assoc();
         ?>
           
            <!-- Fin de navegacion -->

            <form action="editarevento.php?id_evento=<?php echo $fila["id_evento"]?>" method="POST" enctype="multipart/form-data" >
                <!-- <div class="container" style=" "> -->
                  <div class="row g-3">
                  <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" id="nombre" name="nombre" class="form-control" 
                    value="<?php echo $fila['nombreEven']?>" placeholder=" " 
                    required=" " pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9 !¡?¿.-,]+">
                    <label for="nombre" class="form__label">Nombre del Evento:</label>
                    </div>
                    </div>
                    <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" id="lugar" name="lugar" class="form-control" placeholder=" "
                    value="<?php echo $fila['lugar']?>" required=" " pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9-#]+">
                    <label for="lugar" class="form__label">Lugar del Evento:</label>
                    </div>
                    </div>
                    
                  <div class="form-floating">
                    <input type="text" id="evento" name="evento" class="form-control"
                    value="<?php echo $fila['descripcionEven']?>" placeholder=" " 
                    required=" " pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9 ]+">
                    <label for="evento" class="form__label">Descripcion Breve del Evento:</label>
                    
                    </div>
                    <div class="col-md-6">
                  <div class="form-floating">
                    <input name ="fecha" type="date" class="form-control" id="fecha" 
                    value="<?php echo $fila['fecha']?>" required=" ">
                    <label for="fecha" class="form__label">Fecha</label>

                    </div>
                    </div>
                    <div class="col-md-6">
                  <div class="form-floating">
                 
                    <input name ="hora" type="time" class="form-control" id="hora" 
                    value="<?php echo $fila['hora']?>" required=" ">
                    <label for="hora" class="form__label">Hora</label>
                    </div>
                    </div>
                    <br>
                    <div class="col-md-12">
                  <div class="form-floating">
                    <select value="<?php echo $fila['estado']?>"
                    name ="estado" type="text" class="form-control" id="estado">
                    <option value="Activo">Activo</option>
                    <option value="Terminado">Terminado</option>
                    
                  </select>
                  <label for="estado" class="form__label">Estado del evento:</label>

                  </div>
                    </div>

                    <br>
                    <label for="fecha_inicio" class="fecha_inicio">Fecha de Inicio de las Inscripciones</label>
                    <div class="input-group">
                    <input type="date" id="fecha_inicio" name="fecha_inicio" class="form-control" placeholder="Fecha de Inicio de Inscripciones:" required step="1" min="2023-01-01" max="2055-12-31" value="<?php  echo $fila["fecha_inicio"]; ?>">
                    </div>
                    <br>
                    <label for="fecha_final" class="fecha_final">Fecha de cierre de las Inscripciones</label>
                    <div class="input-group">
                    <input type="date" id="fecha_final" name="fecha_final" class="form-control" placeholder="Fecha de cierre de Inscripciones:" required step="1" min="2023-01-01" max="2055-12-31" value="<?php  echo $fila["fecha_final"]; ?>">
                    </div>

                    <div class="col-md-12">
                  <div class="form-floating">
                        <!-- Seccion para cargar la imagen -->
                        <img style="width: 100px;" src="data:image/jpg;base64,<?php echo base64_encode($fila["imagen"]); ?>" class="card-img-top">

                            <label style=" width: 520px; margin-left: 340px;" for="imagen" class="form-label">Cargar Imagen</label>
                            <input class="form-control" type="file" id="imagen" name ="imagen"
                            required=" "  accept="image/*">
                        </div>
                        </div>

                        <h4>Imagenes Para La Galeria De Eventos Terminados</h4>

                  <div class="col-md-12">
                  <div class="form-floating">
                  <img style="width: 100px; margin: 5px;" src="data:image/jpg;base64,<?php echo base64_encode($fila["imagen1"]); ?>" class="card-img-top">
                  
                     <!-- <label style=" width: 420px; margin-left: 150px; margin-top: 60px;"  for="imagen1" class="form-label">Cargar Imagen</label> -->
                     <input class="form-control" type="file" id="imagen1" name ="imagen1"
                       accept="image/*" >
                    </div>
                    </div>
                    <div class="col-md-12">
                  <div class="form-floating">
                  <img style="width: 100px; margin: 5px;" src="data:image/jpg;base64,<?php echo base64_encode($fila["imagen2"]); ?>" class="card-img-top">
                  
                     <!-- <label style=" width: 420px; margin-left: 400px; margin-top: 60px;"  for="imagen2" class="form-label">Cargar Imagen</label> -->
                     <input class="form-control" type="file" id="imagen2" name ="imagen2"
                       accept="image/*" >
                    </div>
                    </div>
                    <div class="col-md-12">
                  <div class="form-floating">
                  <img style="width: 100px; margin: 5px;" src="data:image/jpg;base64,<?php echo base64_encode($fila["imagen3"]); ?>" class="card-img-top">
                  
                     <!-- <label style=" width: 420px; margin-left: 150px; margin-top: 60px;"  for="imagen3" class="form-label">Cargar Imagen</label> -->
                     <input class="form-control" type="file" id="imagen3" name ="imagen3"
                       accept="image/*" >
                    </div>
                    </div>
                    <div class="col-md-12">
                    <div class="form-floating">
                  <img style="width: 100px; margin: 5px;" src="data:image/jpg;base64,<?php echo base64_encode($fila["imagen4"]); ?>" class="card-img-top">
                  
                     <!-- <label style=" width: 420px; margin-left: 400px; margin-top: 60px;"  for="imagen4" class="form-label">Cargar Imagen</label> -->
                     <input class="form-control" type="file" id="imagen4" name ="imagen4"
                       accept="image/*" >
                    </div>
                    </div>
                    <div class="col-md-12">
                  <div class="form-floating">
                  <img style="width: 100px; margin: 5px;" src="data:image/jpg;base64,<?php echo base64_encode($fila["imagen5"]); ?>" class="card-img-top">
                  
                     <!-- <label style=" width: 420px; margin-left: 150px; margin-top: 60px;"  for="imagen5" class="form-label">Cargar Imagen</label> -->
                     <input class="form-control" type="file" id="imagen5" name ="imagen5"
                       accept="image/*" >
                    </div>
                    </div>
                    <div class="col-md-12">
                    <div class="form-floating">
                  <img style="width: 100px; margin: 5px;" src="data:image/jpg;base64,<?php echo base64_encode($fila["imagen6"]); ?>" class="card-img-top">
                  
                     <!-- <label style=" width: 420px; margin-left: 400px; margin-top: 60px;"  for="imagen6" class="form-label">Cargar Imagen</label> -->
                     <input class="form-control" type="file" id="imagen6" name ="imagen6"
                       accept="image/*" >
                    </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-large">Registrar un Nuevo Evento</button>
                    <a href="admineventos.php" class="btn btn-info" > Regresar</a>

                </div>
                </div>
                <!-- </div> -->
            </form>
                                
                        
                        
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
        <!-- Fin formulario -->


    


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../lib/wow/wow.min.js"></script>
    <script src="../../lib/easing/easing.min.js"></script>
    <script src="../../lib/waypoints/waypoints.min.js"></script>
    <script src="../../lib/owlcarousel/owl.carousel.min.js"></script>
    
    <script src="../../lib/lightbox/js/lightbox.min.js"></script>
    <!-- Template Javascript -->
    <script src="../../js/main.js"></script>
</body>

</html>

