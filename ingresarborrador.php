
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
        body {
            margin: 0rem;
          background-image: url(imagenes/fondo_blanco_pagina2.jpg);
          background-size: cover;
          background-repeat: no-repeat;
          background-position: center;
          background-attachment: fixed;
        }
    </style>
</head>
<body>
    <nav class="navbar " style="background-color: rgb(194, 16, 16);" data-bs-theme="dark" >
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">
            <img src="imagenes/logo_empresa.png" alt="Logo" width="70" height="70" class="d-inline-block align-text-top">
            ASAGO</a>
        </div>
    </nav>
    <br>
    <div class="container col-sm-4 col-md-4 col-lg-4 col-xl-3">
        <br>
        <div class="card mt-5">
            <div class="card-header">
                <i class="fa fa-user fa-2x text-danger me-3 " id="card" aria-hidden="true">Ingresar</i>
            </div>

            <div class="card-body mt-3 text-center">
                <h5 class="card-tittle"> Ingresa tus datos para</h5>
                <p class="card-text">iniciar sesión en tu Tienda Virtual</p>
                <hr>
            </div>
            <form class="was-validated g-3 mx-5" method="post" action="#">
                <div class="col-12">
                    <label class="form-label">Cedula Ciudadanía</label>
                    <input name="Usuario" class="form-control" type="number" required>
                </div>
                <br>

                <div class="col-12">
                    <label class="form-label">Contraseña</label>
                    <input name="Clave" class="form-control" type="password" required>
                </div>

                <div class="col-12 text-center">
                    <br>
                    <a href="#">¿Olvidaste tu Contraseña?</a>
                </div>
                <br>

                <div class="d-grid gap-2 col-12 mx-auto">
                    <input class="btn btn-danger "type="submit" value = "Iniciar Sesión">
                    <a class="btn btn-outline-danger" href="registro.php" aria-hidden="true">Registrarse</a>
                    <br>  
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>