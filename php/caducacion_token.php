<?php
    echo"
    <script>
    let insertartoken = '123413523513'
    let almacenar = localStorage.setItem ('token', insertartoken)

    var tiempoInactividad = 1 * 60 * 1000; // 15 minutos en milisegundos
    var inactividad;

    function iniciarTemporizador() {
    inactividad = setTimeout(function() {
        // Remover el token del local storage
        localStorage.removeItem('token');
        // Redireccionar al usuario
        // window.location.href = 'ruta-de-redireccionamiento';
        console.log('Redireccionando al usuario');
    }, tiempoInactividad);
    }

    function reiniciarTemporizador() {
    clearTimeout(inactividad);
    iniciarTemporizador();
    }

    // Obtener el token del local storage
    var token = localStorage.getItem('token');

    if (token) {
    // Iniciar el temporizador si hay un token almacenado
    iniciarTemporizador();
    } else {
    // Redireccionar al usuario si no hay un token almacenado
    // window.location.href = 'ruta-de-redireccionamiento';
    console.log('Redireccionando al usuario');
    }

    document.addEventListener('mousemove', reiniciarTemporizador);
    </script>
    "
?>