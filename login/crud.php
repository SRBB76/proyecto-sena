<?php
include_once("db/login-conn.php");

$resultado = mysqli_query($conn, "select * from cliente_local");
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
    <link rel="stylesheet" href="login-estilos.css">
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

<!-- Seccion de ver usuario -->

<section id="crud" data-aos="fade-up">
        <div class="contenedor">
            <div class="usuario__añadir">
                <table>
                    <tr>
                        <th>Nombre</th> <th>Apellido</th> <th>Tipo de Comida</th> <th>Tipo de Bebida</th> <th>Tipo de Pago</th> 
                    </tr>
                    <?php
                    while($datos_usuarios = mysqli_fetch_array($resultado)) {

                        echo "<tr>";
                        echo "<td>".$datos_usuarios['nombre']."</td>";
                        echo "<td>".$datos_usuarios['apellido']."</td>";
                        echo "<td>".$datos_usuarios['tipo_comida']."</td>";
                        echo "<td>".$datos_usuarios['tipo_bebida']."</td>";
                        echo "<td>".$datos_usuarios['tipo_pago']."</td>";
                        echo "<td><a class= 'btn primario-btn' href='editar.php?id=$datos_usuarios[id_cliente_local]'>Editar</a> | | <a class='btn primario-btn' href='borrar.php?id=$datos_usuarios[id_cliente_local]'>Borrar</a></td></tr>";
                    }
                ?>
                </table>
            </div>
        <a class="btn primario-btn" href="añadir.php">Añadir un usuario</a><br/><br/>
    </div>
</section>

<!-- Fin de la seccion ver usuario -->


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