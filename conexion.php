<?php
function conectar(){

	$hostname="localhost";
	$username="root";
	$password="";
	$dbname="cei";
	
	$conexion = mysqli_connect($hostname,$username, $password, $dbname);
	
	return $conexion;
}
?>