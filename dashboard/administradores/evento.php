<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script defer src="js/bootstrap.min.js"></script>
    <meta name="description" content="Incentivar, desarrollar la participacion y contrubiur en procesos que fortalezcan la relacion universidad, empresa, sociedad y estado">
    <link rel="icon" href="img/logo.webp">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>CEI | Eventos</title>
</head>

<body  class="container-fluidslider">
  
  <!-- Cabecera -->
    
    <!-- Cuerpo de la pagina -->
    <main>
      <div class="container-fluid">
        <h2>Actualizar datos del evento</h2>
        <div class="jumbotron">
            <!-- Navegacion -->
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
                    <input type="text" id="nombre" name="nombre" class="form__input" 
                    value="<?php echo $fila['nombreEven']?>" placeholder=" " 
                    required=" " pattern="[a-zA-ZÁÉÍÓÚáéíóúñ ]+">
                    <label for="nombre" class="form__label">Nombre del Evento:</label>
                    </div>
                    <br>
                    <div class="form__group">
                    <input type="text" id="lugar" name="lugar" class="form__input" placeholder=" "
                    value="<?php echo $fila['lugar']?>" required=" " pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9 ]+">
                    <label for="lugar" class="form__label">Lugar del Evento:</label>
                    </div>
                    <br>
                    <div class="form__group">
                    <input type="text" id="evento" name="evento" class="form__input"
                    value="<?php echo $fila['descripcionEven']?>" placeholder=" " 
                    required=" " pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9 ]+">
                    <label for="evento" class="form__label">Descripcion Breve del Evento:</label>
                    </div>
                    <br>
                    <div class="form__group">
                    <label for="fecha" class="form-label">Fecha del Evento:</label>
                    <input name ="fecha" type="date" class="form-control" id="fecha" 
                    value="<?php echo $fila['fecha']?>" required=" ">
                    </div>
                    <br>
                    <div class="form__group">
                    <label for="fecha" class="form-label">Hora del Evento:</label>
                    <input name ="hora" type="time" class="form-control" id="hora" 
                    value="<?php echo $fila['hora']?>" required=" ">
                    </div>
                    <br>
                        <!-- Seccion para cargar la imagen -->
                        <img style="width: 100px;" src="data:image/jpg;base64,<?php echo base64_encode($fila["imagen"]); ?>" class="card-img-top">

                        <div class="mb-3">
                            <label for="imagen" class="form-label">Cargar Imagen</label>
                            <input  class="form-control" type="file" id="imagen" name ="imagen"
                            required=" "  accept="image/*">
                        </div>
                    <br> 
                    <button type="submit" class="btn btn-success btn-large">Registrar un Nuevo Evento</button>
                    <a href="administrar_eventos.php" class="btn btn-info" > Regresar</a>

                </div>
            </form>
            </div>
        </div>
    </main>
    <!-- Parte Inferior -->
    
</body>
</html>