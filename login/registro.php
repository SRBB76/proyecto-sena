<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Registrarse | Projecto SENA</title>
	<link rel="stylesheet" type="text/css" href="../reset.css">
	<link rel="stylesheet" type="text/css" href="../estiloGlobal.css">
	<link rel="stylesheet" href="../componentes.css">
	<link rel="stylesheet" type="text/css" href="login-estilos.css">
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
		<form action="db/elregistro.php" method="POST">
		 	<div class="login__campo">
		 		<input type="text" name="nombre">
		 		<label for="name">Nombre y Apellido</label>
		 		<span class="borde"></span>
		 	</div>
		 	<div class="login__campo">
		 		<input type="email" name="email">
		 		<label for="email">Email</label>
		 		<span class="borde"></span>
		 	</div>
		 	<div class="login__campo">
		 		<input type="text" name="ndu">
		 		<label for="username">Nombre del usuario</label>
		 		<span class="borde"></span>
		 	</div>
		 	<div class="login__campo">
		 		<input type="password" name="cdu">
		 		<label for="password">Contraseña</label>
		 		<span class="borde"></span>
		 	</div>
		 	<div class="login__campo">
		 		<input type="password" name="cdure">
		 		<label for="password">Repita la Contraseña</label>
		 		<span class="borde"></span>
		 	</div>
		 <button class="secundario-btn" type="submit" name="submit">Registrarse</button>
		 </form>
		 <a class="boton primario-btn" href="login.php">Iniciar Sesión</a>
<!-- seccion del login en php -->
<?php

if (isset($_GET["error"])){
	if($_GET["error"] == "iniciovacio"){
	echo "<p>Completa todos los campos!</p>";
}
else if ($_GET["error"] == "invalidonombre"){
	echo "<p>Escoge un nombre de usuario adecuado!</p>";
}
else if ($_GET["error"] == "invalidoemail"){
	echo "<p>Escoge un email adecuado!</p>";
}
else if ($_GET["error"] == "contraseñanocoincide"){
	echo "<p>Las contraseñas no coinciden!</p>";
}
else if ($_GET["error"] == "declfallo"){
	echo "<p>Algo salió mal, intenta de nuevo!</p>";
}
else if ($_GET["error"] == "nombredeusuariotomado"){
	echo "<p>Nombre de usuario tomado!</p>";
}
else if ($_GET["error"] == "ningun_error"){
	echo "<p>Has iniciado sesión</p>";
}
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