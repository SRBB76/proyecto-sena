<?php
include_once("db/login-conn.php");

$id = $_GET['id'];

$resultado = mysqli_query($conn, "delete from cliente_local where id_cliente_local=$id");

header("Location: crud.php");
?>