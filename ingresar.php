<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="Css/ingresar.css">
    <title>inicio Sesion</title>
</head>

<body>

    <div class="container-item">
        <div class="container">
            <div class="tittle">
                <span>INICIAR SESIÓN</span>
            </div>

            <div class="text">
                <span>Ingresa tus datos para</span>
                <div class="bold"> 
                    <span>iniciar sesión en tu Tienda Virtual</span>  
                </div>
            </div>    

            <form action="config/login.php" method="post">
                <div class="row">
                    <div class="flex">
                        <i class="fa-solid fa-user"></i>
                        <label>Cédula de ciudadanía</label>
                    </div>

                    <input type="text" name="Usuario" placeholder="Ej: 1234567890" required>
                </div>

                <div class="row">
                    <div class="flex">
                        <i class="fa-solid fa-unlock"></i>
                        <label>Constraseña</label>
                    </div>

                    <input type="password" name="Clave" placeholder="Contraseña" required>

                    <div class="pass">
                        <a href="">¿Olvidaste tu Contraseña?</a>
                    </div>
                </div>

                <div class="row">
                    <input name="btningresar" class="btn" type="submit" value="Iniciar Sesión">
                    <a class="btnregistro" value="Registrar" href="registro.php">Registrarse</a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>