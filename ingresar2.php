<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/estilo3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Inicio de sesion</title>
</head>
<body>
    <div class="login-box">
        <img src="imagenes/logo_empresa.png" class="avatar" alt="Avatar Image">
    <form method="post" action="">
        <h1>INICIAR SESION</h1>
        <hr>
        <div class="text">
            <span>Ingresa tus datos para</span>
        </div>    
        <span class="bold">iniciar sesión en tu Tienda Virtual</span>  

        <i class="fa-solid fa-user"></i>
        <label >Cédula de ciudadanía</label>
        <input type="text" name="Usuario" placeholder="Ej: 1234567890">

        <i class="fa-solid fa-unlock"></i>
        <label >Constraseña</label>
        <input type="password" name="Clave" placeholder="Contraseña">
        <div class="btn-2">
            <a href="">¿Olvidaste tu Contraseña?</a>
        </div>
        <input name="btningresar" class="btn" type="submit" value="Iniciar Sesión">
        <a class="btnregistro" value="Registrar" href="registro.php">Registrarse</a>
        
    </form>
    
</body> 
</html>