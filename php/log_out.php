<?php
    echo "<script>
    function logout() {
      // Eliminar el token del Local Storage
      localStorage.removeItem('auth_token');
      
      // Redireccionar al formulario de inicio de sesión
      window.location.href = '../login.php';
    }
    logout();
  </script>";
?>
