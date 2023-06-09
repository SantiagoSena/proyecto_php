<?php
    include("conexion.php");
?>

<!DOCTYPE php>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro ASAGO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
        body {
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
          <a class="navbar-brand" href="ingresar.php">
            <img src="imagenes/logo_empresa.png" alt="Logo" width="70" height="70" class="d-inline-block align-text-top">
            ASAGO</a>
        </div>
      </nav>
    
    <div class="container col-sm-6 col-md-6 col-lg-5 col-xl-5">
        <div class="card mt-4">
            <div class="card-header">
                <i class="fa fa-user fa-2x text-danger me-3 " id="card" aria-hidden="true"></i><h4>Registrarse</h4>
            </div>
            <div class="card-body mt-3 text-center">
                <h5 class="card-tittle"> Ingresa tus datos para</h5>
                <p class="card-text">iniciar sesión en tu Tienda Virtual</p>
                <hr>
            </div>

            <form class="was-validated row g-3 mx-5" method="post">
                <div class="col-6">
                    <label class="form-label"> Nombres</label>
                    <input name="nombres" class="form-control" type="text" required>
                </div>

                <div class="col-6">
                    <label class="form-label">Apellidos</label>
                    <input name="apellidos" class="form-control" type="text" required>
                </div>

                <div class="col-6">
                    <label class="form-label">Tipo de Documento</label>
                    <select name="tipo_documento" class="form-select" >
                        <option value="">Seleccione un tipo</option>
                        <option value="Cedula de ciudadadnia">Cédula de ciudadanía</option>
                        <option value="Tarjeta de extranjeria">Tarjeta de extranjería</option>
                        <option value="Cedula de extranjeria">Cédula de extranjería</option>
                    </select>
                </div>

                <div class="col-6">
                    <label class="form-label"> Numero Documento</label>
                    <input name="cedula" class="form-control" type="number" required>
                </div>

                <div class="col-6">
                    <label class="form-label"> Fecha de nacimiento</label>
                    <input name="edad" class="form-control" type="date" required>
                </div>

                <div class="col-6">
                    <label class="form-label"> Celular</label>
                    <input name="celular" class="form-control" type="tel" required>
                </div>

                <div class="col-13">
                    <label class="form-label"> Dirección</label>
                    <input name="direccion" class="form-control" type="text" required>
                </div>

                <div class="col-6">
                    <label class="form-label"> Correo Electrónico</label>
                    <input name="correo" class="form-control" type="email" placeholder="name@example.com" required>
                </div>

                <div class="col-6">
                    <label class="form-label" type="hidden"> </label>
                    <input name="correo2" class="form-control" type="hidden"  placeholder="name@example.com" required>
                </div>

                <div class="col-6">
                    <label class="form-label"> Contraseña</label>
                    <input name="contraseña" class="form-control" type="password" required>
                </div>

                <div class="col-6">
                    <label class="form-label"> Confirmar Contraseña</label>
                    <input name="contraseña2" class="form-control" type="password" required>
                    <br>
                </div>

                <div class="form-check mx-3">
                    <input class="form-check-input"  type="checkbox" value="" id="flexCheckChecked">
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
