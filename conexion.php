<?php

$conexion = mysqli_connect("localhost", "root", "", "sasg");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

mysqli_set_charset($conexion, "utf8");
?>