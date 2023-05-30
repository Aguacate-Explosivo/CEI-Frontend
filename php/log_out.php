<?php
session_start();
session_destroy(); // Invalida la sesión actual
header('Location: ../login.php');
exit();
?>
