<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login | Projecto SENA</title>
	<link rel="stylesheet" type="text/css" href="../reset.css">
	<link rel="stylesheet" type="text/css" href="../estiloGlobal.css">
	<link rel="stylesheet" href="../componentes.css">
	<link rel="stylesheet" href="login-estilos.css">
	<link rel="shortcut icon" href="../imagen/logo.ico" type="image/x-icon">
		<!-- libreria de animacion css-->
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
</head>
<body>

<!-- Seccion del nav -->

<?php

include_once 'barranav.php';

?>

<!-- Fin de la seccion del nav -->

<!-- seccion del login -->

<section id="login" data-aos="fade-up">
	<div class="contenedor__form">
		<div class="login__form">
		<form action="db/ellogin.php" method="POST">
		 	<div class="login__campo">
		 		<input type="text" name="ndu">
		 		<label for="name">Usuario/Email</label>
		 		<span class="borde"></span>
		 	</div>
		 	<div class="login__campo">
		 		<input type="password" name="cdu">
		 		<label for="cdu">Contraseña</label>
		 		<span class="borde"></span>
		 	</div>
<button class="secundario-btn" type="submit" name="submit">Ingresar</button>
		 </form>
<a class="boton primario-btn" href="registro.php">Registrarse</a>
<br>
<!-- seccion del login en php -->

<?php

if (isset($_GET["error"])){
	if($_GET["error"] == "iniciovacio"){
	echo "<p>Completa todos los campos!</p>";
}
else if ($_GET["error"] == "loginerroneo")
	echo "<p>Informacion de login incorrecta!</p>";
} 

?>
<!-- Fin de la seccion del login en php -->

		</div>
	</div>
</section>


<!-- Fin de la seccion del login -->

<!-- Seccion del pie de pagina -->

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