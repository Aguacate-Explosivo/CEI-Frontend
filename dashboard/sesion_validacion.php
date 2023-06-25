<?php
    // Verificar si el token de autenticación está presente en el Local Storage
    echo "<script>
            var tiempoInactividad = 30 * 60 * 1000;
            var inactividad;
        
            function iniciarTemporizador() {
            inactividad = setTimeout(function() {
                localStorage.removeItem('auth_token');
                window.location.href = '../login.php';
                console.log('Redireccionando al usuario');
            }, tiempoInactividad);
            }
        
            function reiniciarTemporizador() {
            clearTimeout(inactividad);
            iniciarTemporizador();
            }
        
            var token = localStorage.getItem('auth_token');
        
            if (token) {
            iniciarTemporizador();
            } else {
            window.location.href = '../login.php';
            console.log('Redireccionando al usuario');
            }
        
            document.addEventListener('mousemove', reiniciarTemporizador);
          </script>";
?>
