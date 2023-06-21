<?php
// session_start();
//Declaracion de Variables
//vars - Form 1
// $doc_autor = '';
// $nombre_autor = '';
// $email_autor = '';
// //vars - form 2
// $nombre_negocio = '';
// $industria_negocio = '';
// $estado_negocio = '';
// $zona_geografica_negocio = '';
// $publico_objetivo = '';
// $innovacion = '';
// $precios = '';
// $calidad = '';
// $rapidez = '';
// //vars - form 3
// $clientes_interesados_plan = '';
// $cantidadMonetaria_interesados_plan = '';;
// $ganancias_estipuladas_interesados_plan = '';;
// $socios_productores = '';;
// $tipo_marketing_plan = '';;
// $inversion_publicidad = '';;


// //Formulario 1 - Overview
// if(isset($_POST['doc_autor_plan'],$_POST['autor_plan'], $_POST['autor_email'])){
//     // Datos del Overview
//     $doc_autor = $_POST['doc_autor_plan'];
//     $nombre_autor = $_POST['autor_plan'];
//     $email_autor = $_POST['autor_email'];

//     // Almacenar los datos en la sesión
//     $_SESSION['doc_autor'] = $doc_autor;
//     $_SESSION['nombre_autor'] = $nombre_autor;
//     $_SESSION['email_autor'] = $email_autor;
//     header("Location: mercado.php");
//     exit;
// }
// //Formulario 2 - Datos de Mercado 1
// if(isset($_POST['nombre_negocio_plan'],$_POST['industria_plan'],$_POST['zona_geografica_plan'],$_POST['publico_objetivo_plan'],$_POST['innovacion_negocio_plan'],$_POST['Precio_negocio_plan'],$_POST['Calidad_negocio_plan'],$_POST['Rapidez_negocio_plan'])){
//     //Datos del mercado 1
//     $nombre_negocio = $_POST['nombre_negocio_plan'];
//     $industria_negocio = $_POST['industria_plan'];
//     $estado_negocio;
//     $zona_geografica_negocio = $_POST['zona_geografica_plan'];
//     $publico_objetivo = $_POST['publico_objetivo_plan'];
//     $innovacion = $_POST['innovacion_negocio_plan'];
//     $precios = $_POST['Precio_negocio_plan'];
//     $calidad = $_POST['Calidad_negocio_plan'];
//     $rapidez = $_POST['Rapidez_negocio_plan'];
//     if (isset($_POST['negocio_nuevo'])) {
//         $estado_negocio = "Nuevo";
//     } else {
//         $estado_negocio = "Existente";
//     }
//     // Almacenar los datos en la sesión
//     $_SESSION['nombre_negocio'] = $nombre_negocio;
//     $_SESSION['industria_negocio'] = $industria_negocio;
//     $_SESSION['estado_negocio'] = $estado_negocio;
//     $_SESSION['zona_geografica_negocio'] = $zona_geografica_negocio;
//     $_SESSION['publico_objetivo'] = $publico_objetivo;
//     $_SESSION['innovacion'] = $innovacion;
//     $_SESSION['precios'] = $precios;
//     $_SESSION['calidad'] = $calidad;
//     $_SESSION['rapidez'] = $rapidez;
//     header("Location: mercado2.php");
//     exit;
// }

// //Formulario 3 - Datos de Mercado 2
// if(isset($_POST['clientes_interesados_plan'],$_POST['cantidadMonetaria_interesados_plan'],$_POST['socios_productores'],$_POST['tipo_marketing_plan'],$_POST['inversion_publicidad'])){
//     //Datos del mercado 2
//     $clientes_interesados_plan = $_POST['clientes_interesados_plan'];
//     $cantidadMonetaria_interesados_plan = $_POST['cantidadMonetaria_interesados_plan'];
//     // $ganancias_estipuladas_interesados_plan = $_POST['ganancias_estipuladas_interesados_plan'];
//     $socios_productores = $_POST['socios_productores'];
//     $tipo_marketing_plan = $_POST['tipo_marketing_plan'];
//     $inversion_publicidad = $_POST['inversion_publicidad'];
//     // Almacenar los datos en la sesión
//     $_SESSION['clientes_interesados_plan'] = $clientes_interesados_plan;
//     $_SESSION['cantidadMonetaria_interesados_plan'] = $cantidadMonetaria_interesados_plan;
//     // $_SESSION['ganancias_estipuladas_interesados_plan'] = $ganancias_estipuladas_interesados_plan;
//     $_SESSION['socios_productores'] = $socios_productores;
//     $_SESSION['tipo_marketing_plan'] = $tipo_marketing_plan;
//     $_SESSION['inversion_publicidad'] = $inversion_publicidad;
//     // header("Location: agregarproducto.php");
//     // exit;
// }

// //Imprimiendo los Datos para Depurar
// echo "doc_autor: " .   $_SESSION['doc_autor'] . "<br>";
// echo "nombre_autor: " . $_SESSION['nombre_autor'] . "<br>";
// echo "email_autor: " . $_SESSION['email_autor'] . "<br>";
// echo "nombre_negocio: " . $_SESSION['nombre_negocio'] . "<br>";
// echo "industria_negocio: " . $_SESSION['industria_negocio'] . "<br>";
// echo "estado_negocio: " . $_SESSION['estado_negocio'] . "<br>";
// echo "zona_geografica_negocio: " . $_SESSION['zona_geografica_negocio'] . "<br>";
// echo "publico_objetivo: " . $_SESSION['publico_objetivo'] . "<br>";
// echo "innovacion: " . $_SESSION['innovacion'] . "<br>";
// echo "precios: " . $_SESSION['precios'] . "<br>";
// echo "calidad: " . $_SESSION['calidad'] . "<br>";
// echo "rapidez: " . $_SESSION['rapidez'] . "<br>";
// echo "clientes_interesados_plan: " . $clientes_interesados_plan . "<br>";
// echo "cantidadMonetaria_interesados_plan: " . $cantidadMonetaria_interesados_plan . "<br>";
// // echo "ganancias_estipuladas_interesados_plan: " . $ganancias_estipuladas_interesados_plan . "<br>";
// echo "socios_productores: " . $socios_productores . "<br>";
// echo "tipo_marketing_plan: " . $tipo_marketing_plan . "<br>";
// echo "inversion_publicidad: " . $inversion_publicidad . "<br>";
?>