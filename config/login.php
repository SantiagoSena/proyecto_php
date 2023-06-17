<?php
 require_once('config.php');
 $usuario = $_POST['Usuario'];
 $password = $_POST['Clave']; 

    if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
            case 971:
                header('Location: ../dashboard.php');
                break;
            case 214:
                header('Location: ../index2.php');
                break;
            case 354:
                header('Location: ../index2.php');
            default:
        }
    }
 $query = "SELECT usuarios.IdUsuario, usuarios.Email, usuarios.Contrasena, usuarios.Nombres, roles.IdRol as rol FROM usuarios left join roles ON usuarios.Rol = roles.IdRol WHERE Email = '$usuario' AND contrasena = '$password' ";
 $result = $conexion->query($query);
 $row = $result->fetch_assoc();
 if($result->num_rows > 0){
    session_start();
    $_SESSION['user'] = $usuario;
    $_SESSION['rol'] = $row['rol'];

    switch($_SESSION['rol']){
        case 971:
            header('location: ../dashboard.php');
            break;
        case 214:
            header('Location: ../index2.php');
            break;
        case 354:
            header('Location: ../index2.php');
        default:
    }
 }else{
    header('Location: ../ingresar.php');
 }

?>