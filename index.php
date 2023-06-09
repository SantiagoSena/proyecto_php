

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="Css/index.css">
    <title>Pagina Asago</title>
  
</head>
<body>
  <nav class="navbar fixed-top" style="background-color: rgb(194, 16, 16);" data-bs-theme="dark" >
    <div class="container-fluid">
      <button class="navbar-toggler" style="background-color: rgb(230, 72, 72);" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="main">
        <div class="topbar">
          <div class="logo-image">
              <img src="/imagenes/logo_asago1.png" alt="">
          </div>

          <div class="logo">
            <span class="logo_name">Asago S.A.S</span>
          </div>
    
          <div class="search">
              <label>
                  <input type="text" placeholder="Busca aquí...">
                  <i class="uil uil-search"></i>
              </label>
          </div>

          <div class="menu">
              <span class="hi">Hola,</span>
              <br>
              <span class="sesion"> Inicia Sesión</span>
          </div>

          <div class="dropdown">
              <button class="dropbtn"><i class="uil uil-angle-down"></i></button>
              <div class="dropdown-content">
              <a href="ingresar2.php">Iniciar Sesión</a>
              <a href="registro.php">Registrarse</a>
              <hr>
              <a href="#">Mi cuenta</a>
          </div>            
        </div>
      </div>

      
      

      <div class="offcanvas offcanvas-start" id="offcanvasNavbar">
        <div class="offcanvas-header" style="background-color: rgb(230, 72, 72);">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">ASAGO</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body" style="background-color: white" > 
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="fa fa-shopping-bag fa-lg text-black me-2 btn"  href="productos.php" aria-hidden="true"> Inventario</a>
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
        <div class="carousel slide" id="carouselExampleAutoplaying" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img  src="/imagenes/producto_5.jpg"  alt="Promocion1">
            </div>

            <div class="carousel-item">
              <img class="chicken" src="/imagenes/carnicos.jpeg" alt="Promocion2">
            </div>

            <div class="carousel-item">
              <img class="chuletas" src="/imagenes/productos4.jpg"  alt="Promocion3">
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
  <footer class="pie-pagina">
    <div class="grupo-1">
      <div class="box">
          <figure>
          <div class="image">
            <img src="/imagenes/logo_asago1.png">
          </div>
         
          <div class="contacto">
            <h2>CONTACTOS</h2>
            <p>Tel: 3146576578 </p>
            <p>Tel: 3137853647</p>
            <p>Correo: Asago@gmail.com </p>
          </div>
            </figure>
      </div>
            
            
            <div class="box">
              <h2>SOBRE NOSOTROS</h2>
                <p>Nos dedicamos a la comercializacion de Pollo, Carne y Queso, cortamos la carne a tu gusto y empacamos al vacío como tu lo quieras, Productos de calidad y terneza.
Escríbenos ahora y olvidate de llegar a separar tus porciones, nosotros lo hacemos por ti.</p>
               
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="https://web.facebook.com/people/Asago-House/100066880955276/?mibextid=ZbWKwL" class="fa fa-facebook"></a>
                    <a href="https://instagram.com/asagohouse?igshid=NTc4MTIwNjQ2YQ==" class="fa fa-instagram"></a>
                    <a href="https://api.whatsapp.com/send?phone=573155766563&text=Hola+%F0%9F%91%8B+mi+nombre+es....&fbclid=PAAaaNmZtE0e80RfgMRKYlxMClDAYO5ippe5QsdSUW7br-Be3CNwa0b0ctr2E" class="fa fa-whatsapp"></a>
                    <a href="https://www.youtube.com/@AsagoHouse/featured" class="fa fa-youtube"></a>
                </div>
              </div>
        </div>
      
        <div class="grupo-2">
            <small>&copy;  2023 <b>- GAES 5</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>

</body>
</html>