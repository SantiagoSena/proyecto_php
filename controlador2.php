<?php
session_start();
if(!empty($_POST["btningresar"])){
    if (empty($_POST["Usuario"]) and empty($_POST["Clave"])) {
        echo '<div class="alert alert-danger">Los campos se encuentran vacios</div>';
    } else {
        $usuario=$_POST["Usuario"];
        $clave=$_POST["Clave"];
        $sql=$conexion->query("select * from usuarios where IdUsuario='$usuario' and Contrasena='$clave'");
        if ($datos=$sql->fetch_object()) {
            $_SESSION['id']=$datos->id;
            $_SESSION['nombre']=$datos->Nombres;
            $_SESSION['apellido']=$datos->Apellidos;
            header("location:index2.php");
        } else {
            echo '<div class="alert alert-danger">El usuario no existe</div>';
        } 
    }
}

?>