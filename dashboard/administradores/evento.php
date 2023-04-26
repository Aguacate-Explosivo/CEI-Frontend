<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script defer src="../js/bootstrap.min.js"></script>
    <meta name="description" content="Incentivar, desarrollar la participacion y contrubiur en procesos que fortalezcan la relacion universidad, empresa, sociedad y estado">
    <link
      rel="canonical"
      href="https://www.wrappixel.com/templates/myadmin-lite/"
    />
    <!-- Favicon icon -->
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
    <link rel="stylesheet" href="../css/styles.css">
    <link href="../css/style.css" rel="stylesheet" />
</head>

<body  >
  
  <!-- Cabecera -->
    
    <!-- Cuerpo de la pagina -->
    <main>
      <div class="container-fluid">
      <h4>ㅤㅤㅤㅤ</h4>

        <div class="jumbotron white-box">
            <!-- Navegacion -->
            <h4>Actualizar datos del evento</h4>

            <?php 
         include("conexion.php");
         $conexion=conectar(); 
         $id_evento=$_REQUEST['id_evento'];
         
         $consulta ="SELECT * FROM eventos where id_evento = $id_evento";
         $busqueda=mysqli_query($conexion,$consulta);

         $fila = $busqueda -> fetch_assoc();
         ?>
           
            <!-- Fin de navegacion -->
            <form action="editarevento.php?id_evento=<?php echo $fila["id_evento"]?>" method="POST" enctype="multipart/form-data" >
                <div class="form__group">
                    <input  style=" width: 500px;" type="text" id="nombre" name="nombre" class="form__input" 
                    value="<?php echo $fila['nombreEven']?>" placeholder=" " 
                    required=" " pattern="[a-zA-ZÁÉÍÓÚáéíóúñ ]+">
                    <label for="nombre" class="form__label">Nombre del Evento:</label>
                    </div>
                    <br>
                    <div class="form__group">
                    <input style=" width: 500px;" type="text" id="lugar" name="lugar" class="form__input" placeholder=" "
                    value="<?php echo $fila['lugar']?>" required=" " pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9 ]+">
                    <label for="lugar" class="form__label">Lugar del Evento:</label>
                    </div>
                    <br>
                    <div class="form__group">
                    <input style=" width: 500px;" type="text" id="evento" name="evento" class="form__input"
                    value="<?php echo $fila['descripcionEven']?>" placeholder=" " 
                    required=" " pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9 ]+">
                    <label for="evento" class="form__label">Descripcion Breve del Evento:</label>
                    </div>
                    <br>
                    <div class="form__group">
                    <label for="fecha" class="form-label">Fecha del Evento:</label>
                    <input style=" width: 500px;" name ="fecha" type="date" class="form-control" id="fecha" 
                    value="<?php echo $fila['fecha']?>" required=" ">
                    </div>
                    <br>
                    <div class="form__group">
                    <label for="fecha" class="form-label">Hora del Evento:</label>
                    <input style=" width: 500px;" name ="hora" type="time" class="form-control" id="hora" 
                    value="<?php echo $fila['hora']?>" required=" ">
                    </div>
                    <br>
                        <!-- Seccion para cargar la imagen -->
                        <img style="width: 100px;" src="data:image/jpg;base64,<?php echo base64_encode($fila["imagen"]); ?>" class="card-img-top">

                        <div class="mb-3">
                            <label for="imagen" class="form-label">Cargar Imagen Para Eventos</label>
                            <input style=" width: 500px;" class="form-control" type="file" id="imagen" name ="imagen"
                            required=" "  accept="image/*">
                        </div>
                    <br> 
                    <div class="form__group">
                  <label for="estado" class="form-label">Estado del Evento:</label>
                  <select required=" " name ="estado"  id="estado" class="form-control"  style=" width: 500px;">
                      <option value="Evento Activo" selected>Activo</option>
                      <option value="Evento Terminado">Terminado</option>
                  </select>
                  </div>
                  <br>
                  <h4>Imagenes Para La Galeria De Eventos Terminados</h4>
                  <br>
                  <img style="width: 100px;" src="data:image/jpg;base64,<?php echo base64_encode($fila["imagen1"]); ?>" class="card-img-top">
                  <div class="mb-3">
                     <label for="imagen1" class="form-label">Cargar Imagen</label>
                     <input style=" width: 500px;"  class="form-control" type="file" id="imagen1" name ="imagen1"
                       accept="image/*" required=" ">
                    </div>
                   <br>

                   <br>
                  <img style="width: 100px;" src="data:image/jpg;base64,<?php echo base64_encode($fila["imagen2"]); ?>" class="card-img-top">
                  <div class="mb-3">
                     <label for="imagen2" class="form-label">Cargar Imagen</label>
                     <input  style=" width: 500px;" class="form-control" type="file" id="imagen2" name ="imagen2"
                       accept="image/*" required=" ">
                    </div>
                   <br>

                   <br>
                  <img style="width: 100px;" src="data:image/jpg;base64,<?php echo base64_encode($fila["imagen3"]); ?>" class="card-img-top">
                  <div class="mb-3">
                     <label for="imagen3" class="form-label">Cargar Imagen</label>
                     <input style=" width: 500px;"  class="form-control" type="file" id="imagen3" name ="imagen3"
                       accept="image/*" required=" ">
                    </div>
                   <br>

                   <br>
                  <img style="width: 100px;" src="data:image/jpg;base64,<?php echo base64_encode($fila["imagen4"]); ?>" class="card-img-top">
                  <div class="mb-3">
                     <label for="imagen4" class="form-label">Cargar Imagen</label>
                     <input style=" width: 500px;"  class="form-control" type="file" id="imagen4" name ="imagen4"
                       accept="image/*" required=" ">
                    </div>
                   <br>

                   <br>
                  <img style="width: 100px;" src="data:image/jpg;base64,<?php echo base64_encode($fila["imagen5"]); ?>" class="card-img-top">
                  <div class="mb-3">
                     <label for="imagen5" class="form-label">Cargar Imagen</label>
                     <input style=" width: 500px;"  class="form-control" type="file" id="imagen5" name ="imagen5"
                       accept="image/*" required=" ">
                    </div>
                   <br>

                   <br>
                  <img style="width: 100px;" src="data:image/jpg;base64,<?php echo base64_encode($fila["imagen6"]); ?>" class="card-img-top">
                  <div class="mb-3">
                     <label for="imagen6" class="form-label">Cargar Imagen</label>
                     <input style=" width: 500px;" class="form-control" type="file" id="imagen6" name ="imagen6"
                       accept="image/*" required=" ">
                    </div>
                   <br>
                    <button style="margin: 2px; border-radius: 5px;"  type="submit" class="btn btn-success btn-large">Registrar un Nuevo Evento</button>
                    <a style="margin: 2px; border-radius: 5px;"  href="admineventos.php" class="btn btn-info" > Regresar</a>

                </div>
            </form>
            </div>
        </div>
    </main>
    <!-- Parte Inferior -->
    
</body>
</html>