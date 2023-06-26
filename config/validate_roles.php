<?php

$roles_permitidos = ['971', '354' , '214' , '578'];

if(!array_key_exists('rol', $_SESSION) || !in_array($_SESSION['rol'], $roles_permitidos)){
    header("Location: ingresar.php");
}

?>