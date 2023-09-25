<?php
    include("conexion.php");
?>

<!DOCTYPE php>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
   
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/registro.css">
    <title>Registro2</title>
</head>

<body> 
    <header>
        <div class="logo">
        <a href="index.php"><img src="imagenes/logo_asago1.png" alt=""></a>
        <h2>Asago S.A.S</h2>
        </div>
        <p></p>
    </header>
    
    <div class="container-item">
        <div class="container">
            <div class="tittle">
                <span>REGISTRARSE</span>
            </div>

            <div class="text">
                <span>Ingresa tus datos para</span>
                <div class="bold"> 
                    <span>Registrarse en tu Tienda Virtual</span>  
                </div>
            </div>    

            <form action="config/login.php" method="post">
                <div class="row">
                    <div class="flex">
                        <i class="fa-solid fa-user"></i>
                        <label>Nombres</label>
                    </div>
                    <input type="text" name="nombres" required>
                </div>

                <div class="row">
                    <div class="flex">
                        <i class="fa-solid fa-user"></i>
                        <label>Apellidos</label>
                    </div>
                    <input type="text" name="apellidos" required>
                </div>

                <div class="row">
                    <div class="flex">
                        <i class="fa-solid fa-user"></i>
                        <label>Cédula de ciudadanía</label>
                    </div>
                    <input type="number" name="id_usuario" placeholder="Ej: 1234567890" required>
                </div>

                <div class="row">
                    <div class="flex">
                        <i class="fa-solid fa-user"></i>
                        <label>Fecha Nacimiento</label>
                    </div>
                    <input type="date" name="fecha_nacimiento" required>
                </div>

                <div class="row">
                    <div class="flex">
                        <i class="fa-solid fa-user"></i>
                        <label>Telefono</label>
                    </div>
                    <input type="number" name="telefono" required>
                </div>

                <div class="row">
                    <div class="flex">
                        <i class="fa-solid fa-user"></i>
                        <label>Dirección</label>
                    </div>
                    <input type="text" name="direccion" required>
                </div>

                <div class="row">
                    <div class="flex">
                        <i class="fa-solid fa-user"></i>
                        <label>Correo Electrónico</label>
                    </div>
                    <input type="text" name="email" placeholder="name@example.com" required>
                </div>

                <div class="row">
                    <div class="flex">
                        <i class="fa-solid fa-unlock"></i>
                        <label>Contraseña</label>
                    </div>
                    <input type="password" name="Clave" placeholder="Contraseña" required>
                </div>

                <div class="row">
                    <div class="flex">
                        <i class="fa-solid fa-unlock"></i>
                        <label>Confirmar Contraseña</label>
                    </div>

                    <input type="password" name="Clave2" placeholder="Contraseña" required>

                    <div class="pass">
                        <a href="">¿Olvidaste tu Contraseña?</a>
                    </div>
                </div>

                <div class="row">
                    <button class="btnresgistro" type="submit">Registrarse</button>
                </div>
            </form>
        </div>
    </div>

      
</body>
</php>
