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
            <h4>Reprogramar Cita</h4>

            <?php 
         include("conexion.php");
         $conexion=conectar(); 
         $idcita=$_REQUEST['idcita'];
         
         $consulta ="SELECT * FROM citas where idcita = $idcita";
         $busqueda=mysqli_query($conexion,$consulta);

         $fila = $busqueda -> fetch_assoc();
         ?>
            <form action="editarcita.php?idcita=<?php echo $fila["idcita"]?>" method="POST" enctype="multipart/form-data" >
          <div class="form__group">
              <input style=" width: 500px;" type="text" id="documento" name="documento" class="form__input" placeholder=" " 
              required=""  pattern="[0-9]+" maxlength="10" minlength="7"
              value="<?php echo $fila['documento']?>" >
              <label for="documento" class="form__label">Numero de Documento:</label>
              </div>
              <br>
            <div class="form__group">
              <input style=" width: 500px;" type="text" id="nombre" name="nombre" class="form__input" placeholder=" " 
              required="" pattern="[a-zA-ZÁÉÍÓÚáéíóúñ ]+"
              value="<?php echo $fila['nombre']?>" >
              <label for="name" class="form__label">Nombre:</label>
              </div>
              <br> 
            <div class="form__group">
              <input style=" width: 500px;" type="text" id="tel" name="tel" class="form__input" placeholder=" "
              required="" pattern="[0-9]+"  maxlength="10" minlength="9"
              value="<?php echo $fila['telefono']?>" >
              <label for="tel" class="form__label">Telefono:</label>
              </div>
              <br>
            <div class="form__group">
              <input style=" width: 500px;" type="text" id="direccion" name="direccion" class="form__input" placeholder=" "
              required="" pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9 - ]+"
              value="<?php echo $fila['direccion']?>" >
              <label for="direccion" class="form__label">Dirección:</label>
              </div>
              
              <br> 
              <label for="fecha" class="form-label">Fecha  ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ Nota: Debes Registar Tu Cita Con Intervalos De 30 Minutos</label>
              <input style=" width: 500px;" name ="fecha" type="datetime-local"
              class="form-control" id="fecha"
               min="2023-03-01 " max="2054-12-31" step="1800"
              required="" value="<?php echo $fila['fecha_hora']?>" >

              
              <br>
              <button style="margin: 2px; border-radius: 5px;" type="submit" class="btn btn-success btn-large">Registrar cita</button>
              <a style="margin: 2px; border-radius: 5px;" href="reprocitas.php" class="btn btn-info" > Regresar</a>

            </div>
                 
            </form>
            </div>
        </div>
    </main>
    <!-- Parte Inferior -->
    
</body>
</html>