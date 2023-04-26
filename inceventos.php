<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="img/logo.webp">
    <title>CEI | Citas</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

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
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body  >  
   
    <?php require("cabecera.php");  ?>
    <!-- Navbar End -->


    <!-- Formulario -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-5 mb-5">Asistir a Evento</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 mx-auto wow fadeInUp" data-wow-delay="0.1s">
           <form action="dashboard\administradores\regisevento.php" method="POST"> 
            <p>En este formulario se le permitirá inscribirse a los Eventos que se realizan en el centro de emprendimiento e inovaccion</p>
                          <!-- id="formInscripcion" -->
                          <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" id="documento" name="documento" class="form-control" placeholder=" "
                            required="" style=" width: 500px;"  pattern="[0-9]+" maxlength="10" minlength="7">
                            <label for="documento" class="form__label">Numero de Documento:</label>
                        </div>
                        </div>
                        <br>
                        <div class="col-md-6">
                        <div class="form-floating">
                            <input id="nombre" name="nombre" type="text" class="form-control" placeholder=" "
                            required=" " style=" width: 500px;"  pattern="[a-zA-ZÁÉÍÓÚáéíóúñ ]+">
                            <label for="nombre" class="form__label">Nombre Completo</label>
                          </div>
                          </div>
                          <br>
                          <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" id="tel" name="tel" class="form-control" placeholder=" "
                            required="" style=" width: 500px;"  pattern="[0-9]+"  maxlength="11" minlength="10">
                            <label for="tel" class="form__label">Telefono:</label>
                        </div>
                        </div>
                        <br>
                        <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" id="direccion" name="direccion" class="form-control" placeholder=" "
                            required="" style=" width: 500px;"  pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9 ]+">
                            <label for="direccion" class="form__label">Dirección:</label>
                        </div>
                        <br>
                        <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" id="edad" name="edad" class="form-control" placeholder=" "
                            required="" style=" width: 500px;"  pattern="[ 0-9 ]+">
                            <label for="edad" class="form__label">Edad:</label>
                        </div>
                        </div>
                        <br>
                        <!-- <div class="form__group"> -->
                        <div class="col-md-6">
                        <div class="form-floating">
                                <select style=" width: 500px;"  name="evento_elegido" class="form-control">
                                    <!-- Codigo de la base de datos -->
                                    <?php
                                            require 'conexion.php';
                                            $conexion=conectar();
                                            $id_evento=$_GET['id_evento'];
                                            $consulta = "select *from eventos where id_evento='".$id_evento."'";
                                            $resultado=mysqli_query($conexion,$consulta);
                                            foreach($resultado as $row){ 
                                                echo '<option value="'.$row["nombreEven"].'">'.$row["nombreEven"].'</option>';
                                            }
                                            ?>
                                    <!-- Fin bd -->
                                    
                                </select>
                                </div>
                    </div>
                        <br>
                        <br>
                        
                        <button style=" margin: 2px; border-radius: 5px;" type="submit" class="btn btn-success ">Confirmar el Registro</button>
                        <a style="display: inline-block; margin: 2px; border-radius: 5px;" href="eventos.php" class="btn btn-info" > Regresar</a>
                        
                        
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
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
     <?php require("footer.php");  ?>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>