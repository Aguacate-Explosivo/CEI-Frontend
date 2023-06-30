<?php
// include("../../log.php");
    // Verificar si el token de autenticación está presente en el Local Storage
    echo "<script>
            var token = localStorage.getItem('auth_token');
            if (!token) {
              window.location.href = '../login.php';
            }
          </script>";
          // logAction("Cerrado de Sesion","se ha cerrado la sesion del usuario por falta del token");
?>
