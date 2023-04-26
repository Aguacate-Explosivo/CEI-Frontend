<main>
      <div class="container-fluid">
        <h2>Programacion de Citas</h2>
        <div class="jumbotron">
            <!-- conexion bd -->
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
              <input type="text" id="documento" name="documento" class="form__input" placeholder=" " 
              required=""  pattern="[0-9]+" maxlength="10" minlength="7"
              value="<?php echo $fila['documento']?>" >
              <label for="documento" class="form__label">Numero de Documento:</label>
              </div>
              <br>
            <div class="form__group">
              <input type="text" id="nombre" name="nombre" class="form__input" placeholder=" " 
              required="" pattern="[a-zA-ZÁÉÍÓÚáéíóúñ ]+"
              value="<?php echo $fila['nombre']?>" >
              <label for="name" class="form__label">Nombre:</label>
              </div>
              <br> 
            <div class="form__group">
              <input type="text" id="tel" name="tel" class="form__input" placeholder=" "
              required="" pattern="[0-9]+"  maxlength="10" minlength="9"
              value="<?php echo $fila['telefono']?>" >
              <label for="tel" class="form__label">Telefono:</label>
              </div>
              <br>
            <div class="form__group">
              <input type="text" id="direccion" name="direccion" class="form__input" placeholder=" "
              required="" pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9 - ]+"
              value="<?php echo $fila['direccion']?>" >
              <label for="direccion" class="form__label">Dirección:</label>
              </div>
              
              <br> 
              <label for="fecha" class="form-label">Fecha  ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ Nota: Debes Registar Tu Cita Con Intervalos De 30 Minutos</label>
              <input name ="fecha" type="datetime-local"
              class="form-control" id="fecha"
               min="2023-03-01 " max="2054-12-31" step="1800"
              required="" value="<?php echo $fila['fecha_hora']?>" >

              
              <br>
              <button type="submit" class="btn btn-success btn-large">Registrar cita</button>
              <a  href="reprocitas.php" class="btn btn-info" > Regresar</a>

            </div>
          </form>
        </div>
      </div>
    </main>
