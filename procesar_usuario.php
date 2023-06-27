<?php
include("conexion.php");

//ACTUALIZAR LOS DATOS USUARIO

$id_usuario = $_POST['id_usuario'];
$rol = $_POST['rol'];
$estado = $_POST['estado'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];

$actualizar_usuario = "UPDATE usuarios SET Rol='$rol' , Estado='$estado' WHERE IdUsuario='$id_usuario'";

$resultado_usuario = mysqli_query($conexion, $actualizar_usuario);

if ($resultado_usuario) {
    echo "<script>alert('Se ha actualizado el usuario con éxito'); window.location='/usuarios.php'</script>";
} else {
    echo "<script>alert('No se pudo actualizar el usuario: " . mysqli_error($conexion) . "'); window.history.go(-1);</script>";
}


?>