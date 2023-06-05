<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proveedores</title>
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
  <nav class="navbar fixed-top" style="background-color: rgb(194, 16, 16);" data-bs-theme="dark" >
    <div class="container-fluid">
      <button class="navbar-toggler" style="background-color: rgb(230, 72, 72);" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
      </button>
      <a href="index.php">
        <img src="imagenes/logo_empresa.png" alt="Logo" width="70" height="70" class="d-inline-block align-text-top">
      </a>
      <div class="text-white">
        ASAGO
      </div>
      <form class="d-flex col-sm-6 col-md-6 col-md-lg-6 col-xl-6" role="search">
        <input class="form-control me-2" type="search" placeholder="¿Qué producto buscas?" aria-label="Search">
        <button type="submit" style="background-color: rgb(230, 72, 72);" class="btn btn-danger me-2">Buscar</button>
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

        <div class="offcanvas-body" style="background-color: white;" > 
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
              <a class="fa fa-user fa-lg text-black me-3 btn"  href="proveedores.php" aria-hidden="true"> Mis Proveedores</a>
              <hr>    
            </li>
            <li class="nav-item">
              <a class="fa fa-user fa-lg text-black me-3 btn"  href="calificaciones.php" aria-hidden="true"> Atención al cliente</a></i>
              <hr>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>  
  <br>

    <div class="col-12 text-center mt-5">
      <br>
      <h1>Proveedores</h1>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row" >
      <div class="col-3">           
        <div class="card" style="width: 17rem;">
          <div class="card-body">
            <img src="imagenes/logo_luxe.png" class="card-img-top" alt="ProductoCarne"  width="500" height="200">
            <h5 class="card-title mt-4">Carnicos De Luxe</h5>
            <p class="card-text">Esta empresa nos brinda carne de res asi mismo una pequeña variedad de chorizo </p>
            <div class="d-grid gap-2">  
              <a class="btn btn-danger" href="productos_luxe.php" aria-hidden="true">Ver productos</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-3">   
        <div class="card" style="width: 17rem;">
          <div class="card-body">
            <img src="imagenes/logo_fama.png" class="card-img-top" alt="ProductoPollo"  width="500" height="200">
            <h5 class="card-title mt-4"> Carnicos Fama</h5>
            <p class="card-text">Esta empresa nos brinda carne de res asi mismo una pequeña variedad de chorizo</p>
            <div class="d-grid gap-2">
              <a class="btn btn-danger" href="productos_carnicos_fama.php" aria-hidden="true">Ver productos</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-3">  
        <div class="card" style="width: 17rem;">
          <div class="card-body">
            <img src="imagenes/logo_versalles.png" class="card-img-top" alt="ProductoCerdo"  width="500" height="200">
            <h5 class="card-title mt-4">Carnicos Versalles</h5>
            <p class="card-text">Esta empresa nos brinda una gran variedad de carne de res en diferentes cortes. </p>
            <div class="d-grid gap-2">
              <a class="btn btn-danger" href="productos_carnicos_versalles.php" aria-hidden="true">Ver productos</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-3">   
        <div class="card" style="width: 17rem;">
          <div class="card-body">
            <img src="imagenes/logo_gran_campo.jpg" class="card-img-top" alt="ProductoPollo"  width="500" height="200">
            <h5 class="card-title mt-4">El Gran Campo</h5>
            <p class="card-text">Esta empresa nos brinda carne de res asi mismo una pequeña variedad de pollo</p>
            <div class="d-grid gap-2">
              <a class="btn btn-danger" href="productos_el_gran_campo.php" aria-hidden="true">Ver productos</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-3 mt-5">   
        <div class="card" style="width: 17rem;">
          <div class="card-body">
            <img src="imagenes/logo_la_cumbre.png" class="card-img-top" alt="ProductoPollo"  width="500" height="200">
            <h5 class="card-title mt-4"> la cumbre </h5>
            <p class="card-text">Esta empresa nos brinda una gran variedad de pollo en diferentes cortes.</p>
            <div class="d-grid gap-2">
              <a class="btn btn-danger" href="productos_la_cumbre.php" aria-hidden="true">Ver productos</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-3 mt-5">   
        <div class="card" style="width: 17rem;">
          <div class="card-body">
            <img src="imagenes/logo_carnicos_del_campo.webp" class="card-img-top" alt="ProductoPollo"  width="500" height="200">
            <h5 class="card-title mt-4">Carnicos el campo </h5>
            <p class="card-text">Esta empresa nos brinda una gran variedad de pollo en diferentes cortes.</p>
            <div class="d-grid gap-2">
              <a class="btn btn-danger" href="productos_carnicos_del_campo.php" aria-hidden="true">Ver productos</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-3 mt-5">   
        <div class="card" style="width: 17rem;">
          <div class="card-body">
            <img src="imagenes/logo_carnicos_torino.jpg" class="card-img-top" alt="ProductoPollo"  width="500" height="200">
            <h5 class="card-title mt-4">carnicos torino </h5>
            <p class="card-text">Esta empresa nos brinda una gran variedad de carne de cerdo en diferentes cortes.</p>
            <div class="d-grid gap-2">
              <a class="btn btn-danger" href="productos_carnicos_torino.php" aria-hidden="true">Ver productos</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-3 mt-5">   
        <div class="card" style="width: 17rem;">
          <div class="card-body">
            <img src="imagenes/logo_monaco.png" class="card-img-top" alt="ProductoPollo"  width="500" height="200">
            <h5 class="card-title mt-4">carnicos monaco</h5>
            <p class="card-text">Esta empresa nos brinda una gran variedad de carne de cerdo en diferentes cortes.</p>
            <div class="d-grid gap-2">
              <a class="btn btn-danger" href="productos_carnicos_monaco.php" aria-hidden="true">Ver productos</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-4 mt-5">   
          <div class="card" style="width: 17rem;">
            <div class="card-body">
              <img src="imagenes/logo_la_especial.webp" class="card-img-top" alt="ProductoPollo"  width="500" height="200">
              <h5 class="card-title mt-4">Carnes La Especial</h5>
              <p class="card-text">Esta empresa nos brinda una gran variedad de carne de cerdo en diferentes cortes.</p>
              <div class="d-grid gap-2">
                <a class="btn btn-danger" href="productos_carnicos_la_especial.php" aria-hidden="true">Ver productos</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 mt-5">  
          <div class="card" style="width: 17rem;">
            <div class="card-body">
              <img src="imagenes/logo_prime.png" class="card-img-top" alt="ProductoChorizo"  width="500" height="200">
              <h5 class="card-title mt-4">carnicos prime </h5>
              <p class="card-text">Esta empresa nos brinda carne de chorizo asi mismo una pequeña variedad de carne de cerdo</p>
              <div class="d-grid gap-2">
                <a class="btn btn-danger" href="productos_carnicos_prime.php" aria-hidden="true">Ver productos</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>