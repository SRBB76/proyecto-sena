<?php
include_once './pedido.php';

$firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
$lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$number = mysqli_real_escape_string($conn, $_POST['number']);
$tipo_comida = mysqli_real_escape_string($conn, $_POST['tipo_comida']);
$tipo_bebida = mysqli_real_escape_string($conn, $_POST['tipo_bebida']);
$tipo_pago = mysqli_real_escape_string($conn, $_POST['tipo_pago']);
$comentarios = mysqli_real_escape_string($conn, $_POST['comentarios']);

$sql = "insert into cliente_domicilio(
	nombre, 
	apellido, 
	direccion, 
	movil, 
	email,
	cedula,
	tipo_comida,
	tipo_bebida,
	tipo_pago,
	comentarios
	) 

values 
	('$firstName','$lastName','$address','$phone','$email','$number','$tipo_comida','$tipo_bebida','$tipo_pago','$comentarios');";
	mysqli_query($conn, $sql);


header("Location: ../agenda.html?pedido=success");