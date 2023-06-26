<?php
 require_once('config.php');
 $usuario = $_POST['Usuario'];
 $password = $_POST['Clave']; 

    if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
            case 971:
                header('Location: ../index2.php');
                break;
            case 214:
                header('Location: ../index2.php');
                break;
            case 354:
                header('Location: ../index2.php');
                break;
            case 578:
                header('Location: ../index2.php');
                break;
            default:
        }
    }
 $query = "SELECT usuarios.IdUsuario, usuarios.Email, usuarios.Contrasena, usuarios.Nombres, usuarios.Apellidos, roles.IdRol as rol FROM usuarios left join roles ON usuarios.Rol = roles.IdRol WHERE IdUsuario = '$usuario' AND contrasena = '$password' ";
 $result = $conexion->query($query);
 $row = $result->fetch_assoc();
 if($result->num_rows > 0){
    $nombres = $row['Nombres']." ".$row['Apellidos'];
    session_start();
    $_SESSION['user'] = $usuario;
    $_SESSION['rol'] = $row['rol'];
    setcookie('usuario',$nombres,time()+84600,'/');
    switch($_SESSION['rol']){
        case 971:
            header('location: ../index2.php');
            break;
        case 214:
            header('Location: ../index2.php');
            break;
        case 354:
            header('Location: ../index2.php');
            break;
        case 578:
            header('Location: ../index2.php');
            break;
        default:
    }
 }else{
    header('Location: ../ingresar.php');
 }

?>