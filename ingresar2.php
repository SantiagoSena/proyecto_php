<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Inicio de sesion</title>
</head>
<body>
    <form method="post" action="">
        <h1>INICIAR SESION</h1>
        <?php
        include("conexion.php");
        include("controlador2.php");
        ?>
        <hr>
        <i class="fa-solid fa-user"></i>
        <label >Identificacion</label>
        <input type="text" name="Usuario" placeholder="Numero de identificación">

        <i class="fa-solid fa-unlock"></i>
        <label >Clave</label>
        <input type="password" name="Clave" placeholder="Clave">
        <hr>
        <input name="btningresar" class="btn" type="submit" value="Iniciar Sesion">
        <a name="btnregistro" class="btn" value="Registrar" href="registro.php">Registrar</a>
    </form>
    
</body> 
</html>