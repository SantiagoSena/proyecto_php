<?php
include("conexion.php");

$id_usuario = $_POST['id_usuario'];
$roles = 354;
/*$estado= 101;*/
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];


//Actualizar los datos

$insertar = "INSERT INTO usuarios(IdUsuario, Rol, /*Estado,*/ Nombres, Apellidos, FechaNacimiento, Direccion, Telefono, Email, Contrasena) VALUES ('$id_usuario', '$roles', /*'$estado' ,*/ '$nombres' , '$apellidos' , '$fecha_nacimiento', '$direccion' , '$telefono' , '$email' , '$contrasena')";

$resultado = mysqli_query($conexion, $insertar);

if ($resultado){
    echo "<script>alert('Se ha registrado el usuario con éxito'); window.location='/ingresar.php'</script>";
}
else{
    echo "<script>alert('No se pudo registrar'); window.history.go(-1);</script>";
}
?>
