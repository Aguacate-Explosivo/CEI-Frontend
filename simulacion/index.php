<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/citas.controlador.php";
require_once "controladores/cursos.controlador.php";
require_once "controladores/eventos.controlador.php";
require_once "controladores/archivos.controlador.php";
require_once "controladores/talento.controlador.php";

require_once "modelos/usuarios.modelo.php";
require_once "modelos/citas.modelo.php";
require_once "modelos/cursos.modelo.php";
require_once "modelos/eventos.modelo.php";
require_once "modelos/archivos.modelo.php";
require_once "modelos/talento.modelos.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();