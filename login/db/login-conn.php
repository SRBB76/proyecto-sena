<?php

$dbNombreserver = "localhost";
$dbUsuario = "root";
$dbContrasena = "";
$dbNombre = "lcrapidas";

$conn = mysqli_connect($dbNombreserver, $dbUsuario, $dbContrasena, $dbNombre);

if (!$conn){
	die("Conexión Fallida!: " . mysqli_connect_error());
}