<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Asago</title>
    <link rel="stylesheet" href="/Vista/Css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  
</head>
<body>
  <nav class="navbar fixed-top" style="background-color: rgb(194, 16, 16);" data-bs-theme="dark" >
    <div class="container-fluid">
      <button class="navbar-toggler" style="background-color: rgb(230, 72, 72);" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
      </button>
        <div class="text-white text-center" style="margin-right: 10px; font-size: 20px">
          <img src="/imagenes/logo_empresa.png" alt="Logo" width="70" height="70" class="d-inline-block align-text-top">
          ASAGO</div> 
      <form class="d-flex col-sm-6 col-md-6 col-md-lg-6 col-xl-6" role="search">
        <input class="form-control me-2" type="search" placeholder="¿Qué producto buscas?" aria-label="Search">
        <button type="submit" style="background-color: rgb(230, 72, 72);" class="btn btn-danger me-2">Buscar</button>
      </form>
      <div class="icon m-8">
        <h5>
        <div class="dropdown">
          <a class="fa fa-headphones fa-lg me-2 text-white btn" style="background-color: rgb(230, 72, 72);" data-bs-toggle="dropdown" title="Atención al cliente" aria-hidden="true"></a>
          <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="chat_pqrs.php">Chat</a></li>
              <li><a class="dropdown-item" href="llamanos.php">Llamada</a></li>
              <li><a class="dropdown-item" href="whatsapp.php">Whatsapp</a></li>
          </ul>
          <a class="fa fa-user-circle fa-lg me-2 text-white btn" style="background-color: rgb(230, 72, 72);" href="ingresar.php" data-toggle="tooltip" title="Ingresar" aria-hidden="true"></a>
          <a class="fa fa-truck fa-lg me-2 text-white btn" style="background-color: rgb(230, 72, 72);" href="domicilios.php" data-toggle="tooltip" title="Domicilios" aria-hidden="true"></a>
        </div>
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
              <a class="fa fa-user fa-lg text-black me-3 btn"  href="proveedores.php" aria-hidden="true"> Mis proveedores</a>
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

  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="carousel slide" id="carouselExampleAutoplaying" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/imagenes/producto_5.jpg"  alt="Promocion1" width="1300" height="500">
            </div>

            <div class="carousel-item">
              <img src="/imagenes/carnicos.jpeg" alt="Promocion2" width="1400" height="500">
            </div>

            <div class="carousel-item">
              <img src="/imagenes/productos4.jpg"  alt="Promocion3" width="1400" height="500">
            </div>
          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>

          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>

  <div class="Titulo">
    <div class="col-12 text-center mt-5">
      <br>
      <h1><strong>Categorías</strong></h1>
    </div>
     </div>
  </div>
  <div class="container mt-5">
    <div class="row" >
      <div class="col-3">           
        <div class="card" style="width: 17rem;">
          <div class="card-body">
            <img src="/imagenes/carne.png" class="card-img-top" alt="ProductoCarne"  width="500" height="200">
            <h5 class="card-title mt-4">Carnes</h5>
            <p class="card-text">Aqui encontraras todo tipo de productos carnicos a tu gusto.</p>
            <div class="d-grid gap-2">  
              <a class="btn btn-danger" href="producto_carnicos.php" aria-hidden="true">Ir a categoria</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-3">   
        <div class="card" style="width: 17rem;">
          <div class="card-body">
            <img src="/imagenes/pollo.jpg" class="card-img-top" alt="ProductoPollo"  width="500" height="200">
            <h5 class="card-title mt-4">Pollo</h5>
            <p class="card-text">Aqui encontraras todo tipo de productos de pollo a tu gusto</p>
            <div class="d-grid gap-2">
              <a class="btn btn-danger" href="productos_de_pollo.php" aria-hidden="true">Ir a categoria</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-3">  
        <div class="card" style="width: 17rem;">
          <div class="card-body">
            <img src="/imagenes/cerdo.jpg" class="card-img-top" alt="ProductoCerdo"  width="500" height="200">
            <h5 class="card-title mt-4">Cerdo</h5>
            <p class="card-text">Aqui encontraras todo tipo de productos de cerdo a tu gusto</p>
            <div class="d-grid gap-2">
              <a class="btn btn-danger" href="productos_de_cerdo.php" aria-hidden="true">Ir a categoria</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-3">  
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <img src="/imagenes/chorizo.jpg" class="card-img-top" alt="ProductoChorizo"  width="500" height="200">
            <h5 class="card-title mt-4">Chorizo</h5>
            <p class="card-text">Aqui encontraras todo tipo de productos de chorizo a tu gusto</p>
            <div class="d-grid gap-2">
              <a class="btn btn-danger" href="productos_de_chorizo.php" aria-hidden="true">Ir a categoria</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="Titulo">
  <div class="col-12 text-center mt-5">
    <br>
    <h1><strong>Productos Destacados</strong></h1>
    </div>
   
  <div class="container mt-5">
    <div class="row">
      <div class="col-3"> 
        <div class="card" style="width: 17rem;">
          <div class="card-body">
            <img src="/imagenes/costillas_carnosas_de_cerdo.jpg" class="card-img-top" alt="ProductoCarne"  width="500" height="200">
            <h5 class="card-title mt-4">Costillas Carnosas</h5>
            <p class="card-text">Precio por libra $13.000</p>
            <p class="card-text"><i>Cod.9898</i></p>
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
      <div class="col-3"> 
        <div class="card" style="width: 17rem;">
          <div class="card-body">
            <img src="/imagenes/lomo_de_ternera.jpg" class="card-img-top" alt="ProductoCarne"  width="500" height="200">
            <h5 class="card-title mt-4">Lomo de Ternera</h5>
            <p class="card-text">Precio por libra $12.000</p>
            <p class="card-text"><i>Cod.3648</i></p>
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

      <div class="col-3"> 
        <div class="card" style="width: 17rem;">
          <div class="card-body">
            <img src="/imagenes/chorizo_de_leon.jpg" class="card-img-top" alt="ProductoCarne"  width="500" height="200" >
            <h5 class="card-title mt-4">Chorizo de León</h5>
            <p class="card-text">Vienen 6 por el precio de $10.000</p>
            <p class="card-text"><i>Cod.6723</i></p>
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

      <div class="col-3"> 
        <div class="card" style="width: 17rem;">
          <div class="card-body">
            <img src="/imagenes/muslo_de_pollo.jpg" class="card-img-top" alt="ProductoCarne"  width="500" height="200" >
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
    </div>
  </div>
  <br>
  <footer>
    <div class="col-md-12 col-lg-12 col-sm-12 col-xl-12" style="background-color: rgb(194, 16, 16); width: 100%; position: relative;" data-bs-theme="dark">
      <h6> Contactos</h6>
      <h6>Tel: 3146576578</h6>
      <h6> Tel: 3137853647</h6>
      <h6>Correo: Asago@gmail.com</h6>
    </div>
    </footer>
</div>
</body>
</html>