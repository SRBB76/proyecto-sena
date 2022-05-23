<?php
include_once("db/login-conn.php");


if(isset($_POST['update']))
{
	$id = $_POST['id'];

		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
    $tipo_comida = $_POST['tipo_comida'];
		$tipo_bebida = $_POST['tipo_bebida'];
    $tipo_pago = $_POST['tipo_pago'];

	$resultado = mysqli_query($conn, "update cliente_local set nombre='$nombre', apellido='$apellido', tipo_comida='$tipo_comida', tipo_bebida='$tipo_bebida' where id_cliente_local=$id");

	header("Location: crud.php");
}
?>


<?php
$id = $_GET['id'];

$resultado = mysqli_query($conn, "select * from cliente_local where id_cliente_local=$id");

while($datos_usuarios = mysqli_fetch_array($resultado))
{
		$nombre = $datos_usuarios['nombre'];
		$apellido = $datos_usuarios['apellido'];
    $tipo_comida = $datos_usuarios['tipo_comida'];
		$tipo_bebida = $datos_usuarios['tipo_bebida'];
    $tipo_pago = $datos_usuarios['tipo_pago'];
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CRUD | Projecto SENA</title>
    <link rel="stylesheet" type="text/css" href="../reset.css">
    <link rel="stylesheet" type="text/css" href="../estiloGlobal.css">
    <link rel="stylesheet" href="../componentes.css">
    <link rel="shortcut icon" href="../imagen/logo.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="crud.css">
        <!-- libreria de animacion css-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
</head>
<body>


<!-- Seccion del nav -->

<?php

include_once 'barranav.php';

?>

<!-- Fin de la seccion del nav -->

<!-- Sección de añadir usuario -->

  <section id="formulario" data-aos="fade-up">
    <div class="contenedor">
	<form name="update_user" method="post" action="editar.php">
		<div class="form__grupo">
		<table border="0">
			<tr>
				<td>Nombre</td>
				<td><input type="text" name="nombre" value=<?php echo $nombre;?>></td>
			</tr>
			<tr>
				<td>Apellido</td>
				<td><input type="text" name="apellido" value=<?php echo $apellido;?>></td>
			</tr>
			<tr>
				<td>Tipo de Comida</td>
				<td><input type="text" name="tipo_comida" value=<?php echo $tipo_comida;?>></td>
			</tr>
			<tr>
				<td>Tipo de Bebida</td>
				<td><input type="text" name="tipo_bebida" value=<?php echo $tipo_bebida;?>></td>
			</tr>
			<tr>
				<td>Tipo de Pago</td>
				<td><input type="text" name="tipo_pago" value=<?php echo $tipo_pago;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Editar"></td>
			</tr>
		</table>
		</div>
	</form>
	<a href="crud.php" class="btn primario-btn">inicio</a>
</div>
</section>
<!-- Fin de la sección de añadir usuario -->

<?php

include_once 'piedepagina.php';

?>

<!-- Fin de la seccion del pie de pagina -->
<!-- libreria de animacion js -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<!-- Sccript para la libreria -->
<script src="login.js"></script>
</body>
</html>