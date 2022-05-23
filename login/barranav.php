<?php

session_start();

?>

<!-- Seccion del nav -->

<header id="topnav">
<div class="nav">
	<div class="contenedor">
		<div class="nav__wrapper">
			<a href="../index.html" class="logo">
				<img src="../imagen/logo.png" alt="lcrapidas">
			</a>
			<nav>
				<div class="nav__bgRecubrimiento"></div>
				<ul class="nav__lista">
					<div class="nav__lista__wrapper">
						<li> <a href="inicio.php" class="nav__enlace">Inicio</a></li>
						<li> <a href="../index.html" class="nav__enlace">Pagina Principal</a></li>
						<li> <a href="acerca.php" class="nav__enlace">Acerda de Nosotros</a></li>
						<?php
						if (isset($_SESSION["id_usuarios"])) {
							echo "<li> <a href='crud.php' class='nav__enlace'>Perfil</a></li>";
							echo "<li> <a href='db/cerrarsesion.php' class='btn primario-btn'>Cerrar Sesión</a></li>";
						}
						else {
							echo "<li> <a href='login.php' class='nav__enlace'>Iniciar Sesión</a></li>";
							echo "<li> <a href='registro.php' class='btn primario-btn'>Resgistrarse</a></li>";
						}
						?>
					</div>
				</ul>
			</nav>
		</div>
	</div>
</div>
</header>

<!-- Fin de la seccion del nav -->
