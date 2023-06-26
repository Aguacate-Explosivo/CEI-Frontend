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

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body  >  
<?php
      include_once("sesion_validacion.php");
      require_once('../conexion.php');
	    $conexion=conectar();      
      ?>
    


    <!-- Formulario -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-5 mb-5">Registrar Usuario
            </div>
            <div class="row g-5">
                <div class="col-lg-6 mx-auto wow fadeInUp" data-wow-delay="0.1s">
          



        <form action="agguser.php" required=" " method="POST" enctype="multipart/form-data"> 
              <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">REGISTRO DE USUARIO</h3>
              </div>

              <div class="card-body">
                <div class="input-group mb-auto">
                    <span class="input-group-text"><i class="fa fa-user " aria-hidden="false"></i></span>
                  <input type="text" class="form-control" placeholder="Username">
              </div>

              <br>
              
              <div>
                <div class="input-group mb-auto">
                    <span class="input-group-text"><i class="far fa-envelope"></i></span>
                  <input type="text" class="form-control" placeholder="correo">
              </div>

              <br>

              <div>
                <div class="input-group mb-auto">
                    <span class="input-group-text"><i class="fas fa-unlock"></i></span>
                  <input type="password" class="form-control" placeholder="Contraseña">
              </div>
              
              <br>

            <div class="row">
                <div class="form-group">
                  <label>Minimal</label>
                  <select class="form-control select2bs4" style="width: 100%;">
                    <option selected="selected">Seleccione Rol</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
              </div>

              <br>
              <br>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
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

