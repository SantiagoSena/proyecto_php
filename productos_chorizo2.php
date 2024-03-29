<?php
require_once 'config/validate_session.php';
require_once 'config/validate_roles.php';

?>
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
    <link rel="stylesheet" href="Css/productos.css">
    <title>Productos Chorizo</title>

</head>
<body>

  <header>
    <div class="logo">
      <img src="imagenes/logo_asago1.png" alt="">
      <h2>Asago S.A.S</h2>
    </div>

    <div class="login">
    <p><?php echo "Bienvenido" ." ". $_COOKIE['usuario'];?></p>
      <div class="dropdown">
        <button class="dropbtn"><i class="uil uil-angle-down"></i></button>
        <div class="dropdown-content">
        <a href="config/logout.php">Cerrar sesion</a>
      </div> 
    </div> 
          
    <?php
      if($_SESSION['rol'] != 971 && $_SESSION['rol'] !=214 && $_SESSION['rol'] != 578 && $_SESSION['rol'] !=201){
        echo '';
        
      }
      elseif ($_SESSION['rol'] != 354) {
        echo '<a href="dashboard.php" class="carrito" data-toggle="tooltip" title="Dashboard"><i class="fa fa-database"></i></a>';
      }
    ?>  
  </header>

  <div class="tittle">
    <span>Productos de Chorizo</span>
  </div>

  <section class="contenedor">
    <div class="contenedor-items">
      <div class="item">
        <img  src="imagenes/chorizo_de_leon.jpg" alt="" class="img-item">
        <span class="titulo-item">Chorizo de León</span>
        <span class="card-text">Vienen 6 por $10.000</span>
        <span class="card-text">Cod: 6723</span>
        <button class="card-button"><a href="#">Agregar al Carrito</a></button>
      </div>

      <div class="item"> 
        <img src="imagenes/chorizo_gallego.jpg" alt="" class="img-item">
        <span class="titulo-item">Chorizo Gallego</span>
        <span class="card-text">Vienen 6 por $11.000</span>
        <span class="card-text">Cod: 1784</span>
        <button class="card-button"><a href="#">Agregar al Carrito</a></button>
      </div>

      <div class="item">
        <img src="imagenes/chorizo_extremeño.jpg" alt="" class="img-item">
        <span class="titulo-item">Chorizo Extremeño</span>
        <span class="card-text">Vienen 6 por $13.000</span>
        <span class="card-text">Cod: 3658</span>
        <button class="card-button"><a href="#">Agregar al Carrito</a></button>
      </div>

      <div class="item">
        <img src="imagenes/chorizo_de_navarra.jpg" alt="" class="img-item">
        <span class="titulo-item">Chorizo Navarra</span>
        <span class="card-text">Vienen 6 por $15.000</span>
        <span class="card-text">Cod: 5789</span>
        <button class="card-button"><a href="#">Agregar al Carrito</a></button>
      </div>
  </section>

  <footer class="pie-pagina">
    <div class="grupo-1">
      <div class="box">
        <figure>
          <div class="image">
            <img src="imagenes/logo_asago1.png">
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