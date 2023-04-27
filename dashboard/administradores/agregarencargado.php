<form action="agregar.php" required=" " method="POST" enctype="multipart/form-data"> 
            <p>En este formulario se le permitirá inscribir a los encargados de cursos </p>
                          <!-- id="formInscripcion" --> 
                        
                        <br>
                        <div class="form__group">
                            <input id="nombre" name="nombre" type="text" class="form__input" placeholder=" "
                            required=" " pattern="[a-zA-ZÁÉÍÓÚáéíóúñ ]+"s>
                            <label for="nombre" class="form__label">Nombre Completo</label>
                          </div>
                          <br>
                          <div class="mb-3">
                            
                            <label for="formFile" class="form-label">Cargar Imagen</label>
                            <input class="form-control" name="imagen" id="imagen" type="file" 
                           required=" " accept="image/*">

                        </div>
                        
                        
                        <!-- </div> -->
                        <br>
                        <br>
                        <button type="submit" class="btn btn-success btn-large">Confirmar el Registro</button>
                        <a href="encacurso.php" class="btn btn-info" > Regresar</a>

                      </div>