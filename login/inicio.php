<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Inicio | Projecto SENA</title>
	<link rel="stylesheet" type="text/css" href="../reset.css">
	<link rel="stylesheet" type="text/css" href="../estiloGlobal.css">
	<link rel="stylesheet" href="../componentes.css">
	<link rel="stylesheet" href="../inicio.css">
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

<!-- Seccion principal inicio-->
<section id="principal">
	<div class="contenedor">
		<div class="principal__wrapper">
			<div class="principal__izq" data-aos="fade-left">
				<div class="principal__wrapper__izq">
					<h1 class="principal__encabezado">El mejor e único lugar para trabajar</h1>
					<p class="principal__info">Somos un local de comidas rápidas multi-cocina que ofrece una amplia variedad de experiencias gastronómicas tanto en un ambiente informal como de alta cocina.</p>
					<div class="boton__principal">
						<a href="login.php" class="btn primario-btn">Inicia Sesión</a>
						<a href="registro.php" class="btn">Registrate</a>
					</div>
				</div>
			</div>
			<div class="principal__der" data-aos="fade-right">
				<div class="principal__imgWrapper">
				<img class="hamburguesa" src="../imagen/empresario.jpg" alt="principal__imgWrapper_de_comida">
			</div>
		</div>
		</div>
	</div>
</section>
<!-- Seccion principal final -->

<!-- Seccion de infromación del local -->

<section id="localInfo" data-aos='fade-up'>
	<div class="contenedor">
		<div class="localInfo__wrapper">
			<div class="localInfo__item">
				<div class="localInfo__icono">
					<img class="reloj" src="../imagen/reloj.svg" alt="icono">
				</div>
				<h3 class="localInfo__titulo">
					10 AM - 9 PM
				</h3>
				<p class="localInfo__texto">
					Hora de Apertura
				</p>
			</div>
			<div class="localInfo__item">
				<div class="localInfo__icono">
					<img class="direccion" src="../imagen/direccion.svg" alt="icono">
				</div>
				<h3 class="localInfo__titulo">
					Cr 25 A No. 56-59
				</h3>
				<p class="localInfo__texto">
					Dirección
				</p>
			</div>
			<div class="localInfo__item">
				<div class="localInfo__icono">
					<img class="celular" src="../imagen/celular.svg" alt="icono">
				</div>
				<h3 class="localInfo__titulo">
					312 6958159
				</h3>
				<p class="localInfo__texto">
					¡Llama ahora!
				</p>
			</div>
		</div>
	</div>
</section>
<!-- Fin de la seccion de  información del local -->
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


