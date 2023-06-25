<?php
// Desactivar la visualización de warnings
ini_set('display_errors', 'Off');
ini_set('display_startup_errors', 'Off');

// Registrar los warnings en un archivo de registro de errores
ini_set('log_errors', 'On');
ini_set('error_log', '/ruta/al/archivo/error.log');

error_reporting(error_reporting() & ~E_NOTICE);
error_reporting(0);


?>