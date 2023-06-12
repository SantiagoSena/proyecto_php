<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos Pollo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
      body {
        margin: 0;
        background-image: url(imagenes/fondo_blanco_pagina2.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        justify-content: space-evenly;
      }
    </style>
</head>
<body>
  <nav class="navbar" style="background-color: rgb(194, 16, 16);" data-bs-theme="dark" >
    <div class="container-fluid">
      <button class="navbar-toggler" style="background-color: rgb(230, 72, 72);" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="text-white text-center" style="margin-right: 10px; font-size: 20px">
        <img src="imagenes/logo_empresa.png" alt="Logo" width="70" height="70" class="d-inline-block align-text-top">
        ASAGO</div> 
      <form class="d-flex col-sm-6 col-md-6 col-md-lg-6 col-xl-6" role="search">
        <input class="form-control me-2" type="search" placeholder="¿Qué producto buscas?" aria-label="Search">
        <button type="submit" style="background-color: rgb(230, 72, 72);" class="btn btn-danger me-2">Search</button>
      </form>
      <div class="icon m-8">
        <h5>
        <a class="fa fa-user-circle fa-lg me-2 text-white btn" style="background-color: rgb(230, 72, 72);" href="ingresar.php" data-toggle="tooltip" title="Ingresar" aria-hidden="true"></a>
        <a class="fa fa-truck fa-lg me-2 text-white btn" style="background-color: rgb(230, 72, 72);" href="domicilios.php" data-toggle="tooltip" title="Domicilios" aria-hidden="true"></a>
        <a class="fa fa-close me-2 text-white btn" style="background-color: rgb(230, 72, 72);" href="index.php" data-toggle="tooltip" title="Cerrar" aria-hidden="true"></a>
        </h5>
      </div>

      <div class="offcanvas offcanvas-start" id="offcanvasNavbar">
        <div class="offcanvas-header" style="background-color: rgb(230, 72, 72);">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">ASAGO</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body" style="background-color: white" > 
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="fa fa-shopping-bag fa-lg text-black me-2 btn"  href="categorias.php" aria-hidden="true"> Inventario</a>
              <hr>
            </li>
            <li class="nav-item">
              <a class="fa fa-shopping-cart fa-lg text-black me-3 btn"  href="pedidos.php" aria-hidden="true"> Mis Pedidos</a>
              <hr>
            </li>
            <li class="nav-item">
              <a class="fa fa-truck fa-lg text-black me-3 btn"  href="domicilios_db.php" aria-hidden="true"> Domicilios</a>
              <hr>
            </li>
            <li class="nav-item">
              <a class="fa fa-lock fa-lg text-black me-3 btn"  href="ingresar.php" aria-hidden="true"> Compras</a>
              <hr>    
            </li>
            <li class="nav-item">
              <a class="fa fa-user fa-lg text-black me-3 btn"  href="proveedores.php" aria-hidden="true"> Mis Proveedores</a>
              <hr>    
            </li>
            <li class="nav-item">
              <a class="fa fa-user fa-lg text-black me-3 btn"  href="ingresar.php" aria-hidden="true"> Atencion al cliente</a></i>
              <hr>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>  
  
  <div class="container">
    <div class="row">
      <div class="col-12">
        <p><h1 class="text-center mt-5">Productos Pollo</h1></p>
      </div>

      <div class="col-3 g-3">    
        <div class="card" style="width: 17rem;">
          <div class="card-body">
            <img src="imagenes/muslo_de_pollo.jpg" class="card-img-top" alt="ProductoCarne"  width="500" height="200" >
            <h5 class="card-title mt-4">Muslos de Pollo</h5>
            <p class="card-text">Precio por libra $5.000</p>
            <p class="card-text"><i>Cod.8796</i></p>
            <i class="fa fa-star text-danger" aria-hidden="true"></i>
            <i class="fa fa-star text-danger" aria-hidden="true"></i>
            <i class="fa fa-star text-danger" aria-hidden="true"></i>
            <i class="fa fa-star text-danger" aria-hidden="true"></i>
            <i class="fa fa-star text-danger" aria-hidden="true"></i>
            <div class="d-grid gap-2">
              <br>
              <a class="btn btn-danger" href="#" aria-hidden="true">Agregar</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-3 g-3">  
        <div class="card" style="width: 17rem;">
          <div class="card-body">
            <img src="imagenes/alas_de_pollo.jpg" class="card-img-top" alt="ProductoCarne"  width="500" height="200">
            <h5 class="card-title mt-4">Alas</h5>
            <p class="card-text">Precio por libra $7.000</p>
            <p class="card-text"><i>Cod.5983</i></p>
            <i class="fa fa-star text-danger" aria-hidden="true"></i>
            <i class="fa fa-star text-danger" aria-hidden="true"></i>
            <i class="fa fa-star text-danger" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <div class="d-grid gap-2">
              <br>
              <a class="btn btn-danger" href="#" aria-hidden="true">Agregar</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-3 g-3">
        <div class="card" style="width: 17rem;">
          <div class="card-body">
            <img src="imagenes/pechuga_de_pollo.jpg" class="card-img-top" alt="ProductoCarne"  width="500" height="200">
            <h5 class="card-title mt-4">Pechuga</h5>
            <p class="card-text">Precio por libra $10.000</p>
            <p class="card-text"><i>Cod.7036</i></p>
            <i class="fa fa-star text-danger" aria-hidden="true"></i>
            <i class="fa fa-star text-danger" aria-hidden="true"></i>
            <i class="fa fa-star text-danger" aria-hidden="true"></i>
            <i class="fa fa-star text-danger" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <div class="d-grid gap-2">
              <br>
              <a class="btn btn-danger" href="#" aria-hidden="true">Agregar</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-3 g-3">
        <div class="card" style="width: 17rem;">
          <div class="card-body">
            <img src="imagenes/patas_de_pollo.jpg" class="card-img-top" alt="ProductoCarne"  width="500" height="200">
            <h5 class="card-title mt-4">Patas de Pollo</h5>
            <p class="card-text">Precio por libra $3.000</p>
            <p class="card-text"><i>Cod.8426</i></p>
            <i class="fa fa-star text-danger" aria-hidden="true"></i>
            <i class="fa fa-star text-danger" aria-hidden="true"></i>
            <i class="fa fa-star text-danger" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <div class="d-grid gap-2">
              <br>
              <a class="btn btn-danger" href="#" aria-hidden="true">Agregar</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-3 g-3">
        <div class="card" style="width: 17rem;">
          <div class="card-body">
            <img src="imagenes/espinazo_de_pollo.webp" class="card-img-top" alt="ProductoCarne"  width="500" height="200">
            <h5 class="card-title mt-4">Espinazo</h5>
            <p class="card-text">Precio por libra $10.000</p>
            <p class="card-text"><i>Cod.7586</i></p>
            <i class="fa fa-star text-danger" aria-hidden="true"></i>
            <i class="fa fa-star text-danger" aria-hidden="true"></i>
            <i class="fa fa-star text-danger" aria-hidden="true"></i>
            <i class="fa fa-star text-danger" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <div class="d-grid gap-2">
              <br>
              <a class="btn btn-danger" href="#" aria-hidden="true">Agregar</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-3 g-3">
        <div class="card" style="width: 17rem;">
          <div class="card-body">
            <img src="imagenes/rabadilla_de_pollo.jpg" class="card-img-top" alt="ProductoCarne"  width="500" height="200">
            <h5 class="card-title mt-4">Rabadilla</h5>
            <p class="card-text">Precio por libra $12.000</p>
            <p class="card-text"><i>Cod.5836</i></p>
            <i class="fa fa-star text-danger" aria-hidden="true"></i>
            <i class="fa fa-star text-danger" aria-hidden="true"></i>
            <i class="fa fa-star text-danger" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <div class="d-grid gap-2">
              <br>
              <a class="btn btn-danger" href="#" aria-hidden="true">Agregar</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-3 g-3">
        <div class="card" style="width: 17rem;">
          <div class="card-body">
            <img src="imagenes/pescuezos_de_pollo.jpg" class="card-img-top" alt="ProductoCarne"  width="500" height="200">
            <h5 class="card-title mt-4">Pescuezo</h5>
            <p class="card-text">Precio por libra $5.000</p>
            <p class="card-text"><i>Cod.6983</i></p>
            <i class="fa fa-star text-danger" aria-hidden="true"></i>
            <i class="fa fa-star text-danger" aria-hidden="true"></i>
            <i class="fa fa-star text-danger" aria-hidden="true"></i>
            <i class="fa fa-star text-danger" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <div class="d-grid gap-2">
              <br>
              <a class="btn btn-danger" href="#" aria-hidden="true">Agregar</a>
            </div>
          </div>
        </div>
      </div>
  
  
</body>
    </html>