<h4>Imagenes Para La Galeria De Eventos Terminados</h4>
                  <div class="container" style="width: 3750px; margin-right: 2550px; ">
                  <div class="row g-3">
                  <div class="col-md-6">
                  <div class="form-floating">
                  <img style="width: 100px; margin: 5px;" src="data:image/jpg;base64,<?php echo base64_encode($fila["imagen1"]); ?>" class="card-img-top">
                  
                     <label style=" width: 420px; margin-left: 150px; margin-top: 60px;"  for="imagen1" class="form-label">Cargar Imagen</label>
                     <input style=" width: 420px; "  class="form-control" type="file" id="imagen1" name ="imagen1"
                       accept="image/*" required=" ">
                    </div>
                    </div>

                    <div class="col-md-6">
                  <div class="form-floating">
                  <img style="width: 100px; margin-left: 150px;" src="data:image/jpg;base64,<?php echo base64_encode($fila["imagen2"]); ?>" class="card-img-top">
                 
                     <label style=" width: 420px; margin-left: 350px; margin-top: 60px;" for="imagen2" class="form-label">Cargar Imagen</label>
                     <input  style=" margin: 10px;  width: 420px; margin-left: 150px;" class="form-control" type="file" id="imagen2" name ="imagen2"
                       accept="image/*" required=" ">
                    </div>
                    </div>

                    <div class="col-md-6">
                  <div class="form-floating">
                  <img style="width: 100px; margin: 5px;" src="data:image/jpg;base64,<?php echo base64_encode($fila["imagen3"]); ?>" class="card-img-top">
                  
                     <label style=" width: 420px; margin-left: 150px; margin-top: 60px;"  for="imagen3" class="form-label">Cargar Imagen</label>
                     <input style=" width: 420px; "  class="form-control" type="file" id="imagen3" name ="imagen3"
                       accept="image/*" required=" ">
                    </div>
                    </div>

                    <div class="col-md-6">
                  <div class="form-floating">
                  <img style="width: 100px; margin-left: 150px;" src="data:image/jpg;base64,<?php echo base64_encode($fila["imagen4"]); ?>" class="card-img-top">
                 
                     <label style=" width: 420px; margin-left: 350px; margin-top: 60px;" for="imagen4" class="form-label">Cargar Imagen</label>
                     <input  style=" margin: 10px;  width: 420px; margin-left: 150px;" class="form-control" type="file" id="imagen4" name ="imagen4"
                       accept="image/*" required=" ">
                    </div>
                    </div>

                    <div class="col-md-6">
                  <div class="form-floating">
                  <img style="width: 100px; margin: 5px;" src="data:image/jpg;base64,<?php echo base64_encode($fila["imagen5"]); ?>" class="card-img-top">
                  
                     <label style=" width: 420px; margin-left: 150px; margin-top: 60px;"  for="imagen5" class="form-label">Cargar Imagen</label>
                     <input style=" width: 420px; "  class="form-control" type="file" id="imagen5" name ="imagen5"
                       accept="image/*" required=" ">
                    </div>
                    </div>

                   <div class="col-md-6">
                  <div class="form-floating">
                  <img style="width: 100px; margin-left: 150px;" src="data:image/jpg;base64,<?php echo base64_encode($fila["imagen6"]); ?>" class="card-img-top">
                 
                     <label style=" width: 420px; margin-left: 350px; margin-top: 60px;" for="imagen6" class="form-label">Cargar Imagen</label>
                     <input  style=" margin: 10px;  width: 420px; margin-left: 150px;" class="form-control" type="file" id="imagen6" name ="imagen6"
                       accept="image/*" required=" ">
                    </div>
                    </div>















                    $imagen1= addslashes(file_get_contents($_FILES['imagen1']['tmp_name']));          
    $imagen2= addslashes(file_get_contents($_FILES['imagen2']['tmp_name']));          
    $imagen3= addslashes(file_get_contents($_FILES['imagen3']['tmp_name']));          
    $imagen4= addslashes(file_get_contents($_FILES['imagen4']['tmp_name']));          
    $imagen5= addslashes(file_get_contents($_FILES['imagen5']['tmp_name']));          
    $imagen6= addslashes(file_get_contents($_FILES['imagen6']['tmp_name']));          
