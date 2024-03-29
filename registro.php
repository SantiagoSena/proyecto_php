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
    <link rel="stylesheet" href="Css/index.css">
    <title>Registro Usuario</title>
</head>

<body> 
    <header>
        <div class="logo">
        <a href="index.php"><img src="imagenes/logo_asago1.png" alt=""></a>
        <h2>Asago S.A.S</h2>
        </div>
        <p></p>
    </header>
    
    <div class="container col-sm-6 col-md-6 col-lg-5 col-xl-5">
        <div class="card mt-4">
            <div class="card-header">
                <i class="fa fa-user fa-2x text-danger me-3 " id="card" aria-hidden="true"></i><h4>Registro Cliente</h4>
            </div>
            <div class="card-body mt-3 text-center">
                <h5 class="card-tittle"> Ingresa tus datos para</h5>
                <p class="card-text">iniciar sesión en tu Tienda Virtual</p>
                <hr>
            </div>

            <form action="insertar_registro.php" class="was-validated row g-3 mx-5" method="post">
                <div class="col-6">
                    <label class="form-label">Nombres</label>
                    <input name="nombres" class="form-control" type="text" required>
                </div>

                <div class="col-6">
                    <label class="form-label">Apellidos</label>
                    <input name="apellidos" class="form-control" type="text" required>
                </div>

                <div class="col-6">
                    <label class="form-label">Numero Documento</label>
                    <input name="id_usuario" class="form-control" type="number" required>
                </div>

                <div class="col-6">
                    <label class="form-label">Fecha de nacimiento</label>
                    <input name="fecha_nacimiento" class="form-control" type="date" required>
                </div>

                <div class="col-6">
                    <label class="form-label">Celular</label>
                    <input name="telefono" class="form-control" type="tel" required>
                </div>

                <div class="col-13">
                    <label class="form-label">Dirección</label>
                    <input name="direccion" class="form-control" type="text" required>
                </div>

                <div class="col-6">
                    <label class="form-label">Correo Electrónico</label>
                    <input name="email" class="form-control" type="email" placeholder="name@example.com" required>
                </div>

                <div class="col-6">
                    <label class="form-label">Contraseña</label>
                    <input name="contraseña" class="form-control" type="password" required>
                </div>

                <!--<div class="col-6">
                    <label class="form-label">Confirmar Contraseña</label>
                    <input name="contraseña2" class="form-control" type="password" required>
                    <br>
                </div>-->

                <div class="form-check mx-3">
                    <input class="form-check-input"  type="checkbox" value="" id="flexCheckChecked" required>
                    <label class="form-check-label text-dark" for="flexCheckChecked">
                      <p>Acepto términos y condiciones</p>
                    </label>
                  </div>

                <div class="d-grid gap-2 col-12 mx-auto">
                    <button class="btn btn-danger" type="submit">Registrarse</button>
                    <br>
                </div>
            </form>
        </div>
    </div> 
      
</body>
</php>
