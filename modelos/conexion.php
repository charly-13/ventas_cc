<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=ventascc_2022",
			            "ventascc_2022",
			            "Abecedario1997@");

		$link->exec("set names utf8");

		return $link;

	}

}