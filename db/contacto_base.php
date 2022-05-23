<?php
include_once './pedido.php';

$firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
$lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$asunto = mysqli_real_escape_string($conn, $_POST['asunto']);
$comentarios = mysqli_real_escape_string($conn, $_POST['comentarios']);

$sql = "insert into contacto(
	nombre, 
	apellido,
	email,
	asunto,
	comentarios
	) 

values 
	('$firstName','$lastName','$email','$asunto','$comentarios');";
	mysqli_query($conn, $sql);


header("Location: ../contacto.html?pedido=success");