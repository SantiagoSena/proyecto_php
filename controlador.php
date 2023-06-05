<?php

if(!empty($_POST["btn btn-danger"])){
    if (empty($_POST["Usuario"]) and empty($_POST["Clave"])) {
        echo '<div class="alert alert-danger">Los campos se encuentran vacios</div>';
    } else {
        $usuario=$_POST["Usuario"];
        $clave=$_POST["Clave"];
        $sql=$conexion->query("select * from usuarios where IdUsuario='$usuario' and Contrasena='$clave'");
        if ($datos=$sql->fetch_object()) {
            header("location:index.php");
        } else {
            echo '<div class="alert alert-danger">El usuario no existe</div>';
        }   
    }
}

?>