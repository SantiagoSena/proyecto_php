<?php
include("conexion.php");

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$identificacion = $_POST['cedula'];
$edad = $_POST['edad'];
$celular = $_POST['celular'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];


//Actualizar los datos

$insertar = "INSERT INTO usuarios(IdUsuario, nombres, apellidos, FechaNacimiento, Direccion, Telefono,  Email, contrasena, Rol) VALUES ('$identificacion', '$nombres' , '$apellidos' , '$edad', '$direccion' , '$celular' , '$correo' , '$contraseña')";
$resultado = mysqli_query($conexion, $insertar);

if ($resultado){
    echo "<script>alert('Se ha registrado el usuario con éxito'); window.location='/index.php'</script>";
}
else{
    echo "<script>alert('No se pudo registrar'); window.history.go(-1);</script>";
}
?>
