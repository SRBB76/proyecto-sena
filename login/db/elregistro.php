<?php

if (isset($_POST["submit"])) {

	$nombre = $_POST["nombre"];
	$email = $_POST["email"];
	$ndu = $_POST["ndu"];
	$cdu = $_POST["cdu"];
	$cdure = $_POST["cdure"];

require_once 'login-conn.php';
require_once 'funciones_conn.php';	

if (inputVacio($nombre, $email, $ndu, $cdu, $cdure) !== false) {
	header("location: ../registro.php?error=iniciovacio");
	exit();
}

if (invalidoNombre($ndu) !== false) {
	header("location: ../registro.php?error=invalidonombre");
	exit();
}

if (invalidoemail($email) !== false) {
	header("location: ../registro.php?error=invalidoemail");
	exit();
}

if (cduCoincide($cdu, $cdure) !== false) {
	header("location: ../registro.php?error=contraseñanocoincide");
	exit();
}

if (nduExiste($conn, $ndu, $email) !== false) {
	header("location: ../registro.php?error=nombredeusuariotomado");
	exit();

}

crearUsuario($conn, $nombre, $email, $ndu, $cdu);

}

else {
	header("location: ../registro.php");
	exit();
}
