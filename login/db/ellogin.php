<?php

if (isset($_POST["submit"])) {
	
	$ndu = $_POST["ndu"];
	$cdu = $_POST["cdu"];

	require_once 'login-conn.php';
	require_once 'funciones_conn.php';

if (loginInputVacio($ndu, $cdu) !== false) {
	header("location: ../login.php?error=iniciovacio");
	exit();
}

loginUser($conn, $ndu, $cdu);

}

else{
	header("location: ../login.php");
	exit();

}