<?php
function conectar(){

	$hostname="127.0.0.1:33065
";
	$username="root";
	$password="";
	$dbname="cei";
	
	$conexion = mysqli_connect($hostname,$username, $password, $dbname);
	
	return $conexion;
}
?>