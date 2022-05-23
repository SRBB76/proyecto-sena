
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CRUD | Projecto SENA</title>
    <link rel="stylesheet" type="text/css" href="../reset.css">
    <link rel="stylesheet" type="text/css" href="../estiloGlobal.css">
    <link rel="stylesheet" href="../componentes.css">
    <link rel="shortcut icon" href="../imagen/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="crud.css">
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
      <h3 class="form__titulo">
        Añadir usuarios
      </h3>
      <div class="form__wrapper">
      	<form action="añadir.php" method="post" name="form1">
	          <div class="form__grupo">
            <label for="firstName">Nombre</label>
            <input type="text" name="nombre" required>
          </div>
          <div class="form__grupo">
            <label for="lastName">Apellido</label>
            <input type="text" name="apellido" required>
          </div>
          <div class="form__grupo">
            <label for="Comida">Comida</label>
            <select name="tipo_comida" id="TipoComida">
              <option selected disabled>Escoger</option>
              <option value="pizza">Pizza - $15.000</option>
              <option value="pizza_champiñones">Pizza con Champiñones - $20.000</option>
              <option value="pizza_criolla">Pizza Criolla - $22.000</option>
              <option value="hamburguesa_1_carne">Hamburguesa de 1 carnes - $5.000</option>
              <option value="hamburguesa_2_carne">Hamburguesa de 2 carnes - $10.000</option>
              <option value="hamburguesa_4_carne">Hamburguesa de 4 carnes - $15.000</option>
              <option value="pollo_asado">Pollo Asado - $20.000</option>
              <option value="pollo_agridulce">Pollo Agridulce - $22.000</option>
              <option value="pollo_apanado">Pollo Apanado - $25.000</option>
              <option value="salchipapa_peq">Salchipapa Pequeño - $4.000</option>
              <option value="salchipapa_med">Salchipapa Mediano - $10.000</option>
              <option value="salchipapa_gra">Salchipapa Grande - $20.000</option>
              </select>
          </div>
          <div class="form__grupo">
          <label for="Bebida">Bebida</label>
          <select name="tipo_bebida" id="TipoBebida">
            <option selected disabled>Escoger</option>
            <option value="sprite">Sprite - $4.000</option>
            <option value="coca_cola">Coca Cola - $4.000</option>
            <option value="pepsi">Pepsi - $4.000</option>
            <option value="colombiana">Colombiana - $4.000</option>
            <option value="aguila">Aguila - $3.000</option>
            <option value="andina">Andina - $3.000</option>
            <option value="poker">Póker - $3.000</option>
            <option value="jugo_natural">Jugos Naturales - $5.000</option>
            <option value="jugo_leche">Jugo en Leche - $6.000</option>
            <option value="cola_pola">Cola y Pola - $3.500</option>
            </select>
          </div>
          <div class="form__grupo">
          <label for="tipo_pago">Tipo de pago</label>
          <select name="tipo_pago" id="TipoPago">
            <option selected disabled>Escoger</option>
            <option value="1">Efectivo</option>
            <option value="2">Tarjeta de debito</option>
            <option value="3">Tarjeta de Crédito</option>
            <option value="4">Daviplata</option>
            <option value="5">Nequii</option>
            <option value="6">Movii</option>
            <option value="7">Cheque</option>
            <option value="8">Cripto</option>
            </select>
          </div>
          <div class="form__grupo">
            <label for="text">Total de la Compra</label>
            <input type="text" name="id">
          </div>
          <button type="submit" name="Submit" value="Add" class="btn primario-btn">Enviar</button>
        </form>
      </div>
      <a href="crud.php" class="btn primario-btn">Inicio</a>
    </div>
    </section>
<!-- Fin de la sección de añadir usuario -->

<div class="contenedor">
  <div class="form__wrapper">

<?php

	if(isset($_POST['Submit'])) {
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
    $tipo_comida = $_POST['tipo_comida'];
		$tipo_bebida = $_POST['tipo_bebida'];
    $tipo_pago = $_POST['tipo_pago'];


		include_once("db/login-conn.php");

		$resultado = mysqli_query($conn, "insert into cliente_local(nombre,apellido,tipo_comida,tipo_bebida,tipo_pago) values('$nombre','$apellido','$tipo_comida','$tipo_bebida','$tipo_pago')");

		echo "<p>Usuario añadido con exito. <a class='btn primario-btn' href='crud.php'>Mira la tabla</a></p>";
	}
	?>
  </div>
  </div>
  </section>
<!-- Seccion del pie de pagina -->

<?php

include_once 'piedepagina.php';

?>

<!-- Fin de la seccion del pie de pagina -->
<!-- libreria de animacion js -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="login.js"></script>
<!-- Sccript para la libreria -->
</body>
</html>