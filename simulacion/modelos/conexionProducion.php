<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=51.222.104.17;dbname=facnetsp_cei",
			            "facnetsp_admin",
			            "5b&xlxO3Ieob");

		$link->exec("set names utf8");

		return $link;

	}

}