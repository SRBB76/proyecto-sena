<?php

class funciones_conn{

function inputVacio($nombre, $email, $ndu, $cdu, $cdure) {
	$resultado;
	if (empty($nombre) || empty($email) || empty($ndu) || empty($cdu) || empty($cdure)) {
		$resultado = true;
	}
	else{
		$resultado = false;
	}
	return $resultado;
}

function invalidoNombre($ndu) {
	$resultado;
	if (!preg_match("/^[a-zA-Z0-9]*$/", $ndu)) {
		$resultado = true;
	}
	else{
		$resultado = false;
	}
	return $resultado;
}

function invalidoemail($email) {
	$resultado;
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$resultado = true;
	}
	else{
		$resultado = false;
	}
	return $resultado;
}

function cduCoincide($cdu, $cdure) {
	$resultado;
	if ($cdu !== $cdure) {
		$resultado = true;
	}
	else{
		$resultado = false;
	}
	return $resultado;
}

function nduExiste($conn, $ndu, $email){
	$sql = "select * from usuarios where ndu = ? or email = ?;";
	$decl = mysqli_stmt_init($conn);	
	if (!mysqli_stmt_prepare($decl, $sql)) {
	header("location: ../registro.php?error=declfallo");
	exit();
	}

	mysqli_stmt_bind_param($decl, "ss", $ndu, $email);
	mysqli_stmt_execute($decl);

	$resultadoDatos = mysqli_stmt_get_result($decl);

	if ($row = mysqli_fetch_assoc($resultadoDatos)) {
		return $row;
	}
	else{
		$resultado = false;
		return $resultado;
	}
	mysqli_stmt_close($decl);
}

function crearUsuario($conn, $nombre, $email, $ndu, $cdu){
	$sql = "insert into usuarios (
	nombre, 
	email,
	ndu,
	cdu)

	values (?, ?, ?, ?);";

	$decl = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($decl, $sql)) {
	header("location: ../registro.php?error=declaracionerronea");
	exit();
	}

	$hashcdu = password_hash($cdu, PASSWORD_DEFAULT);

	mysqli_stmt_bind_param($decl, "ssss", $nombre, $email, $ndu, $hashcdu);
	mysqli_stmt_execute($decl);
	mysqli_stmt_close($decl);
	header("location: ../registro.php?error=ningun_error");
	exit();
}

function loginInputVacio($ndu, $cdu) {
	$resultado;
	if (empty($ndu) || empty($cdu)) {
		$resultado = true;
	}
	else{
		$resultado = false;
	}
	return $resultado;
}

function loginUser($conn, $ndu, $cdu){
	$nduExiste = nduExiste($conn, $ndu, $ndu);

	if ($nduExiste === false) {
	header("location: ../login.php?error=loginerroneo");
	exit();
	}

	$cduhash = $nduExiste["cdu"];
	$cduveri = password_verify($cdu, $cduhash);

	if ($cduveri === false) {
	header("location: ../login.php?error=contraseñaerronea");
	exit();
	}
	else if ($cduveri === true){
		session_start();
		$_SESSION["id_usuarios"] = $nduExiste["id_usuarios"];
		$_SESSION["ndu"] = $nduExiste["ndu"];
		header("location: ../login.php");
		exit();
	}
}
}