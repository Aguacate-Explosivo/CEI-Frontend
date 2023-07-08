<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="../../img/logo.webp">
    <title>CEI | citas</title>
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
            <h1 class="display-5 mb-5">Reprogramar Cita
            </div>
            <div class="row g-5">
                <div class="col-lg-6 mx-auto wow fadeInUp" data-wow-delay="0.1s">
          

<?php 
require_once('../../conexion.php');
$conexion=conectar(); 
$idcita=$_REQUEST['idcita'];

$consulta ="SELECT * FROM citas where idcita = $idcita";
$busqueda=mysqli_query($conexion,$consulta);

$fila = $busqueda -> fetch_assoc();
?>
<form action="editarcita.php?idcita=<?php echo $fila["idcita"]?>" method="POST" enctype="multipart/form-data" >
<div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                            <select  class="form-control" value="<?php echo $fila['tipodocumento']?>"  name="tipodocumento" id="tipodocumento">
                                <option value="Cedula de ciudadania">Cedula de ciudadania</option>
                                <option value="Targeta de identidad">Targeta de identidad </option>
                                <option value="Contraseña">Contraseña</option>
                                <option value="Documento extranjero">Documento extranjero</option>
                                <option value="Pasaporte">Pasaporte </option>
                                </select>
                                <label  for="tipodocumento" class="form__label">Tipo de Documento:</label>

                            </div>
                        </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="documento" value="<?php echo $fila['documento']?>"  name="documento" placeholder="Your Name" required pattern="[0-9]+" maxlength="10" minlength="7">
                                    <label for="documento">Numero de Documento</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-floating">
                            <select  class="form-control" name="categoria" value="<?php echo $fila['categoria']?>"  id="categoria">
                                <option value="Estudiante">Estudiante</option>
                                <option value="Docente">Docente</option>
                                <option value="Administrativo">Administrativo</option>
                                <option value="Comunidad general">Comunidad general</option>
                                <option value="Otro">Otro</option>
                                </select>
                                <label  for="categoria" class="form__label">Categoria:</label>

                            </div>
                        </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" value="<?php echo $fila['nombre']?>"  id="nombre" name="nombre" placeholder="Your Email" required pattern="[a-zA-ZÁÉÍÓÚáéíóúñ ]+">
                                    <label for="nombre">Nombre</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="tel" name="tel" value="<?php echo $fila['telefono']?>"  placeholder="Your Name" required pattern="[0-9]+"  maxlength="10" minlength="9">
                                    <label for="tel">Telefono</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" id="correo" name="correo" class="form-control" value="<?php echo $fila['correo']?>"  placeholder="your email" required pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9-#.@]+">
                                <label for="correo" >Correo:</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" id="institucion" name="institucion" value="<?php echo $fila['institucion']?>" class="form-control" placeholder="ff"
                                    required pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9-#.]+" value="UTCH">
                                <label for="institucion" class="form__label">Institucion:</label>
                            </div>
                        </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="datetime-local" value="<?php echo $fila['fecha_hora']?>"  class="form-control" id="fecha" name="fecha" placeholder="Your Email" min="2023-03-01 " max="2030-12-31" step="1800" required >
                                    <label for="fecha">Fecha y Hora</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="direccion" value="<?php echo $fila['direccion']?>"  name="direccion" required pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9-#]+" placeholder="Subject">
                                    <label for="direccion">Dirección</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-floating">
                            <select  class="form-control" name="tema" value="<?php echo $fila['tema']?>"  id="tema">
                                <option value="Estudiante">Estudiante</option>
                                <option value="Docente">Docente</option>
                                <option value="Administrativo">Administrativo</option>
                                <option value="Comunidad general">Comunidad general</option>
                                <option value="Otro">Otro</option>
                                </select>
                                <label  for="tema" class="form__label">Tema de Cita:</label>

                            </div>
                        </div>
                        <div class="col-12">
                                <div class="form-floating">
                                <input value="<?php echo $fila['descripcion']?>"  maxlength="200" type="text" style="height: 170px;"  class="form-control" id="descripcion" name="descripcion" required pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9-#]+" placeholder="Subject">
                                    <label for="descripcion" >Breve Descripcion de la Cita</label>
                                </div>
                            </div>
                        
  <br><br><br><br><br><br>
  <button style="margin: 2px; border-radius: 5px;" type="submit" class="btn btn-primary">Reprogramar cita</button>
  <a style="margin: 2px; border-radius: 5px;" href="../reprocitas.php" class="btn btn-info" > Regresar</a>

</div>
     
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

