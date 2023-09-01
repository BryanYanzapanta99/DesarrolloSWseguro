<?php
	$conexion = new mysqli("localhost", "root", "", "proyecto");
	if (mysqli_connect_error()) {
		echo "Conexcion Fallida";
	}
	$conexion->set_charset("utf8");
?>