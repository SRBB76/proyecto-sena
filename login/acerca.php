<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Acerca de | Projecto SENA</title>
	<link rel="stylesheet" type="text/css" href="../reset.css">
	<link rel="stylesheet" type="text/css" href="../estiloGlobal.css">
	<link rel="stylesheet" href="../componentes.css">
	<link rel="stylesheet" href="../acercade.css">
	<link rel="shortcut icon" href="../imagen/logo.ico" type="image/x-icon">
		<!-- libreria de animacion css-->
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
</head>

<!-- Seccion del nav -->

<?php

include_once 'barranav.php';

?>

<!-- Fin de la seccion del nav -->


<!-- Sección de nuestra historia -->

<section id="historia" data-aos="fade-up">
	<div class="contenedor">
		<div class="historia__wrapper">
			<div class="historia__img">
				<img src="../imagen/local.jpg" alt="lcrapidas">
			</div>
			<div class="historia__info">
				<h3 class="historia__titulo">
					Nuestra Historia
				</h3>
				<p class="historia__subtitulo">
					Todo inicio en 2015
				</p>
				<p class="historia__texto">
					Bienvenido a L.C.Rápidas. Nos enorgullecemos de ofrecer un servicio cálido y amable y de crear deliciosas experiencias culinarias para todos. Utilizando sólo los ingredientes locales más frescos, nos aseguraremos de que tenga una experiencia gastronómica para recordar.
					<br><br>
					Desde 2015, somos el lugar perfecto para una cena romántica para dos, para ponerse al día con los amigos, para fiestas familiares, para reuniones de negocios y para reunir a los seres queridos. Con un entorno confortable, precios asequibles y capacidad para hasta 40 comensales, podemos atender todas las ocasiones.
				</p>
			</div>
		</div>
	</div>
</section>

<!-- Fin de la sección de nuestra historia -->

<!-- Nuestros objetivos -->

<section id="metas" data-aos="fade-down">
	<div class="contenedor">
		<div class="metas__info">
			<h3 class="metas__titulo">
				Nuestros Objetivos
			</h3>
			<p class="metas__texto">
				Venderemos alimentos y bebidas deliciosas y extraordinarias que cumplan con los criterios de máxima calidad, frescura y estacionalidad, combinando las tradiciones culinarias modernas y clásicas. Haciendo gala de calidez, amabilidad, eficiencia, habilidad, profesionalidad e integridad en nuestro trabajo, atenderemos continuamente a nuestros consumidores con un servicio excepcional. Que cada cliente que entre por nuestras puertas salga impresionado por su experiencia en L.C.Rápidas y con ganas de volver.
			</p>
		</div>
		<div class="metas__imgs__wrapper">
			<div class="metas__img1">
				<img src="../imagen/local4.jpg" alt="lcrapidas">
			</div>
			<div class="metas__img2">
				<img src="../imagen/local3.jpg" alt="lcrapidas">
			</div>
			<div class="metas__img3">
				<img src="../imagen/local2.jpg" alt="lcrapidas">
			</div>
		</div>
	</div>
</section>

<!-- Fin de la seccion de nuestros objetivos -->
<!-- Seccion del pie de pagina -->

<?php

include_once 'piedepagina.php';

?>

<!-- Fin de la seccion del pie de pagina -->

<!-- libreria de animacion js -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="login.js"></script>
</body>
</html>
