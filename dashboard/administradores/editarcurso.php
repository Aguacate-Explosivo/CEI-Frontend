
            <!-- Navegacion -->
            <?php 
         include("conexion.php");
         $conexion=conectar(); 
         $Id_Curso=$_REQUEST['Id_Curso'];
         
         $consulta ="SELECT * FROM cursos where Id_Curso = $Id_Curso";
         $busqueda=mysqli_query($conexion,$consulta);

         $fila = $busqueda -> fetch_assoc();
         ?>
            
            <!-- Fin de navegacion -->
            <form action="actualizarcurso.php?Id_Curso=<?php echo $fila["Id_Curso"]?>" method="POST" enctype="multipart/form-data" >
                <div class="form__group">
                    <input type="text" id="nom_curso" name="nom_curso" class="form__input" placeholder=" "
                    value="<?php echo $fila['NombreCurso']?>" required=" " pattern="[a-zA-ZÁÉÍÓÚáéíóúñ ]+">
                    <label for="nom_curso" class="form__label">Nombre del curso:</label>
                    </div>
                    <br>
                    <div class="form__group">
                   
                    
                    <select id="encargado" name="encargado" class="form__input" required=" "
                    value="<?php echo $fila['EncargadoCurso']?>" >
                                    <!-- Codigo de la base de datos -->
             <?php
               

               $query1 = "select *from `encargado` order by encargados";
               $query2 = mysqli_query($conexion,$query1);

               while($row = mysqli_fetch_array($query2))
               {
                $id = $row['id'];
                $hora = $row['encargados'];

                ?>
                <option value="<?php echo $hora; ?>"><?php echo $hora; ?></option>
                <?php
               }

               ?>    
              
              <option  selected> <?php echo $fila['EncargadoCurso']?></option>
             </select>
             </div>

                    <br> 
                    <div class="form__group">
                    
                    <div class="form__group">
                    <input type="text" id="desc_curso" name="desc_curso" class="form__input" placeholder=" " 
                    value="<?php echo $fila['DescripcionCurso']?>" required=" " pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9 ]+">
                    <label for="desc_curso" class="form__label">Descripcion del Curso:</label>
                    </div>
                    <br>
                    </div>
                        <!-- Seccion para cargar la imagen -->
                        <img style="width: 100px;" src="data:image/jpg;base64,<?php echo base64_encode($fila["imagen"]); ?>" class="card-img-top">

                        <div class="mb-3">
                            
                            <label for="formFile" class="form-label">Cargar Imagen</label>
                            <input class="form-control" name="imagen" id="imagen" type="file" 
                           required=" " accept="image/*" >

                        </div>
                    <br> 
                    <button type="submit" class="btn btn-success btn-large">Editar informacion del Curso</button>
                    <a href="admincursos.php" class="btn btn-info" > Regresar</a>
                </div>
            </form>