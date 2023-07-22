<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="img/logo.webp">
    <title>CEI | Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
<!-- Favicon -->
<link href="img/favicon.webp" rel="icon">
<!-- Google Web Fonts -->
<link rel="preload" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap">
</noscript>
<!-- Icon Font Stylesheet -->
<link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
</noscript>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" defer>
<!-- Libraries Stylesheet -->
<link href="lib/animate/animate.min.css" rel="stylesheet" async>
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" async>
<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" async>
<!-- Customized Bootstrap Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" async>
<!-- Template Stylesheet -->
<link href="css/style.css" rel="stylesheet" async>
<link href="css/stylelog.css" rel="stylesheet" async>
</head>

<body>
<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="php/login_validacion.php" method="POST" enctype="multipart/form-data">
					<label for="chk" aria-hidden="true">Sign up</label>
                    <div class="align-items-center">
                        <a href="index.php">
                            <img src="img/logo.webp" class="img-fluid" alt="#" width="120px" height="56px">
                        </a>
                    </div>
					<input type="text" placeholder="Email" id="user" name="user" required>
					<input type="password" placeholder="Password" id="password" name="password" required>

					<button>Iniciar Sesión</button>
                    <div class="social-auth-links text-center mb-3">
                    <a href="index.php" class="btn btn-danger">Volver</a>
                    </div>
                    <br>	
				</form>
			</div>

			<div class="login">
            	
				<form action="registrousuario.php" enctype="multipart/form-data">
				<br>
                <button>Login</button>
				</form>
			</div>
	</div>
    <!-- Login Start -->
    
    <!-- Login End -->
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="lib/wow/wow.min.js" defer></script>
    <script src="lib/easing/easing.min.js" defer></script>
    <script src="lib/waypoints/waypoints.min.js" defer></script>
    <script src="lib/owlcarousel/owl.carousel.min.js" defer></script>
    <?php //require("footer.php");  ?>
    <script src="lib/lightbox/js/lightbox.min.js" defer></script>
    <!-- Template Javascript -->
    <script src="js/main.js" defer></script>
</body>

</html>