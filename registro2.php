<?php
    include("conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<div class="container_add">
        <h2 class="container_title">Registrar Cliente</h2>
        <form action="insertar.php" method="post" class="container_form">
            <label for="" class="container_label">Nombres:</label>
            <input name="nombres"type="text" class="container_input">
            <label for="" class="container_label">Apellidos:</label>
            <input name="apellidos"type="text" class="container_input">
            <label for="" class="container_label">Identificación:</label>
            <input name="cedula"type="number" class="container_input">
            <label for="" class="container_label">Fecha de Nacimiento: </label>
            <input name="edad"type="date" class="container_input">
            <label for="" class="container_label">Celular:</label>
            <input name="celular"type="number" class="container_input">
            <label for="" class="container_label">direccion:</label>
            <input name="direccion" type="text" class="container_input">
            <label for="" class="container_label">Correo:</label>
            <input name="correo"type="email" class="container_input">
            <label for="" class="container_label">Contraseña:</label>
            <input name="contraseña"type="password" class="container_input">
            <input class="container_submit" type="submit" value="Registrar">
        </form>
        
    </div>
</body>
</html>