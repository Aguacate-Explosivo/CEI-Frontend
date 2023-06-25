
            <!-- Navegacion -->
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
        <div class="container" >
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-5 mb-5">Editar Curso
            </div>
            <div class="row g-5">
                <div class="col-lg-6 mx-auto wow fadeInUp" data-wow-delay="0.1s">
          
                <?php 
         require_once('../../conexion.php');
         $conexion=conectar(); 
         $Id_Curso=$_REQUEST['Id_Curso'];
         
         $consulta ="SELECT * FROM cursos where Id_Curso = $Id_Curso";
         $busqueda=mysqli_query($conexion,$consulta);

         $fila = $busqueda -> fetch_assoc();
         ?>
            
            <!-- Fin de navegacion -->
            <form action="actualizarcurso.php?Id_Curso=<?php echo $fila["Id_Curso"]?>" method="POST" enctype="multipart/form-data" >
            <div class="row g-3">
             <div class="col-md-6">
               <div class="form-floating">
                    <input type="text" id="nom_curso" name="nom_curso" class="form-control" placeholder=" "
                    value="<?php echo $fila['NombreCurso']?>" required=" " pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9 !¡?¿.-,]+">
                    <label for="nom_curso" class="form__label">Nombre del curso:</label>
                    </div>
                    </div>
                    <div class="col-md-6">
                     <div class="form-floating">
                   
                    
                    <select  id="encargado" name="encargado" class="form-control" required=" "
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
             </div>

             <div class="col-md-6">
                     <div class="form-floating">
                    <input type="text" id="desc_curso" name="desc_curso" class="form-control" placeholder=" " 
                    value="<?php echo $fila['DescripcionCurso']?>" required=" " pattern="[a-zA-ZÁÉÍÓÚáéíóúñ 0-9 !¡?¿.-,]+">
                    <label for="desc_curso" class="form__label">Descripcion del Curso:</label>
                    </div>
                    </div>
                    
                     <div class="form-floating">
                        <!-- Seccion para cargar la imagen -->
                        <img style="width: 100px;" src="data:image/jpg;base64,<?php echo base64_encode($fila["imagen"]); ?>" class="card-img-top">

                        
                            
                            <label style=" margin-left: 150px; " for="formFile" class="form-label">Cargar Imagen</label>
                            <input class="form-control" name="imagen" id="imagen" type="file" 
                           required=" " accept="image/*" >

                        </div>
                  
                    <button type="submit" class="btn btn-success btn-large">Editar informacion del Curso</button>
                    <a href="admincursos.php" class="btn btn-info" > Regresar</a>
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

