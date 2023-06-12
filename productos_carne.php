<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/Css/carnes.css">
    <title>Productos Carne</title>
  
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
          <a class="fa fa-user-circle fa-lg me-2 text-white  btn" style="background-color: rgb(230, 72, 72);" href="ingresar.php" data-toggle="tooltip" title="Ingresar" aria-hidden="true"></a>
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




  
  <div class="tittle">
    <span>Productos de Carne</span>
  </div>

  <section class="contenedor">
    <div class="contenedor-items">
      <div class="item">
        <img  src="/imagenes/jamon.webp" alt="" class="img-item">
        <span class="titulo-item">Jamón</span>
        <span class="card-text">Precio Libra $5.000</span>
        <span class="card-text">Cod: 5146</span>
        <button class="card-button"><a href="productos_carne.php">Agregar al Carrito</a></button>
      </div>

      <div class="item"> 
        <img src="/imagenes/filetes_de_ternera.png" alt="" class="img-item">
        <span class="titulo-item">Filetes de Ternera</span>
        <span class="card-text">Precio Libra $10.000</span>
        <span class="card-text">Cod: 7895</span>
        <button class="card-button"><a href="productos_pollo.php">Agregar al Carrito</a></button>
      </div>

      <div class="item">
        <img src="/imagenes/lomo_de_ternera.jpg" alt="" class="img-item">
        <span class="titulo-item">Lomo de Ternera</span>
        <span class="card-text">Precio Libra $12.000</span>
        <span class="card-text">Cod: 3648</span>
        <button class="card-button"><a href="productos_cerdo.php">Agregar al Carrito</a></button>
      </div>

      <div class="item">
        <img src="/imagenes/chuleta_de_ternera.jpg" alt="" class="img-item">
        <span class="titulo-item">Chuleta de Ternera</span>
        <span class="card-text">Precio Libra $7.000</span>
        <span class="card-text">Cod: 4357</span>
        <button class="card-button"><a href="productos_chorizo.php">Agregar al Carrito</a></button>
      </div>

      <div class="item">
        <img src="/imagenes/pecho_de_res_2.jpg" alt="" class="img-item">
        <span class="titulo-item">Pecho de Res</span>
        <span class="card-text">Precio Libra $10.000</span>
        <span class="card-text">Cod: 7893</span>
        <button class="card-button"><a href="productos_chorizo.php">Agregar al Carrito</a></button>
      </div>

      <div class="item">
        <img src="/imagenes/morrillo.jpg" alt="" class="img-item">
        <span class="titulo-item">Morrillo</span>
        <span class="card-text">Precio Libra $14.000</span>
        <span class="card-text">Cod: 1513</span>
        <button class="card-button"><a href="productos_chorizo.php">Agregar al Carrito</a></button>
      </div>

      <div class="item">
        <img src="/imagenes/falda.png" alt="" class="img-item">
        <span class="titulo-item">Falda</span>
        <span class="card-text">Precio Libra $10.000</span>
        <span class="card-text">Cod: 8423</span>
        <button class="card-button"><a href="productos_chorizo.php">Agregar al Carrito</a></button>
      </div>

      <div class="item">
        <img src="/imagenes/costillar_de_res.jpg" alt="" class="img-item">
        <span class="titulo-item">Costilla de Res</span>
        <span class="card-text">Precio Libra $7.000</span>
        <span class="card-text">Cod: 2256</span>
        <button class="card-button"><a href="productos_chorizo.php">Agregar al Carrito</a></button>
      </div>
    </div>
  </section>

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