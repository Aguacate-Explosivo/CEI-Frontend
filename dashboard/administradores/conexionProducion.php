<?php
 function conectar(){

	$hostname="51.222.104.17";
	$username="facnetsp_admin";
	$password="5b&xlxO3Ieob";
	$dbname="facnetsp_cei";
	
 	$conexion = mysqli_connect($hostname,$username, $password, $dbname);
	return $conexion;

}
?>