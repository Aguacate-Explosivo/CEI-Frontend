<?php
    echo "<script>
    function logout() {
      // Eliminar el token del Local Storage
      localStorage.removeItem('auth_token');
      localStorage.removeItem('auth_perfil');
      
      // Redireccionar al formulario de inicio de sesión
      window.location.href = '../login.php';
    }
    logout();
  </script>";
  include("../conexion.php");
  $conexion = conectar();
  include("../log.php");
  logAction("Cerrado de Sesion","el usuario ha cerrado la sesión de forma manual");
?>
