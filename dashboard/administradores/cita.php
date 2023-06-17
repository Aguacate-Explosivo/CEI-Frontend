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
      include_once("sesion_validacion.php")
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
include("conexion.php");
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
  <input style=" width: 500px;" type="text" id="documento" name="documento" class="form-control" placeholder=" " 
  required  pattern="[0-9]+" maxlength="10" minlength="7"
  value="<?php echo $fila['documento']?>" >
  <label for="documento" class="form__label">Numero de Documento:</label>
  </div>
  </div>
  <div class="row g-3">
  <div class="form-floating">
  <input style=" width: 500px;" type="text" id="nombre" name="nombre" class="form-control" placeholder=" " 
  required pattern="[a-zA-ZÁÉÍÓÚáéíóúñ ]+"
  value="<?php echo $fila['nombre']?>" >
  <label for="name" class="form__label">Nombre:</label>
  </div>
  </div>
  <div class="row g-3">
  <div class="form-floating">
  <input style=" width: 500px;" type="text" id="tel" name="tel" class="form-control" placeholder=" "
  required pattern="[0-9]+"  maxlength="10" minlength="9"
  value="<?php echo $fila['telefono']?>" >
  <label for="tel" class="form__label">Telefono:</label>
  </div>
  </div>
  <div class="row g-3">
  <div class="form-floating">
  <input style=" width: 500px;" type="text" id="direccion" name="direccion" class="form-control" placeholder=" "
  required pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9 #-]+"
  value="<?php echo $fila['direccion']?>" >
  <label for="direccion" class="form__label">Dirección:</label>
  </div>
  </div>
  
  <div class="row g-3">
  <div class="form-floating">
  <label for="fecha" class="form-label"></label>
  <p>Nota: Debes Registar Tu Cita Con Intervalos De 30 Minutos</p>
  <input style=" width: 500px;" name ="fecha" type="datetime-local"
  class="form-control" id="fecha"
   min="2023-03-01 " max="2054-12-31" step="1800"
  required value="<?php echo $fila['fecha_hora']?>" >
  </div>
  </div>
  
  <br>
  <button style="margin: 2px; border-radius: 5px;" type="submit" class="btn btn-primary">Reprogramar cita</button>
  <a style="margin: 2px; border-radius: 5px;" href="reprocitas.php" class="btn btn-info" > Regresar</a>

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

