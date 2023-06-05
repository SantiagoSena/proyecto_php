<?php
    include("conexion.php");

    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $tipoDocu = $_POST["tipo_documento"];
    $identificacion = $_POST["cedula"];
    $fechaNacimiento = $_POST["edad"];
    $celular = $_POST["celular"];
    $direccion = $_POST["direccion"];
    $correo = $_POST["correo"];
    $correo2 = $_POST["correo2"];
    $clave = $_POST["contraseña"];
    $clave2 = $_POST["contraseña2"];

    $insertar = "INSERT INTO usuarios(IdUsuario, Nombres, Apellidos, FechaNacimiento, Direccion, Telefono, Email, Contrasena) VALUES ('$identificacion', '$nombres', '$apellidos', '$fechaNacimiento', '$direccion', '$celular', '$correo', '$clave')";

    $resultado = mysqli_query($conexion, $insertar);

    if ($resultado){
        echo "<script>alert('Se ha registrado el usuario con éxito'); window.location='/index.php'</script>";
    }
    else{
        echo "<script>alert('No se pudo registrar'); window.history.go(-1);</script>";
    }
?>