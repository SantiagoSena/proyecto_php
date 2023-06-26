<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <link rel="stylesheet" href="Css/dashboard.css">
  <title>Proveedores</title>
</head>

<body>
  <div class="container">
    <nav>
      <ul>
        <li><a href="index2.php" class="logo">
          <img src="imagenes/logo_asago1.png">
          <span class="nav-item">Asago S.A.S</span>
        </a></li>

        <li><a href="dashboard.php">
          <i class="fas uil uil-estate"></i>
          <span class="nav-item">Dashboard</span>
        </a></li>

        <li><a href="usuarios2.php">
          <i class="fas uil uil-users-alt"></i>
          <span class="nav-item">Usuarios</span>
        </a></li>

        <li><a href="productos2.php">
          <i class="fas uil uil-shopping-bag"></i>
          <span class="nav-item">Productos</span>
        </a></li>

        <li><a href="ventas2.php">
          <i class="fas uil uil-bill"></i>
          <span class="nav-item">Ventas</span>
        </a></li>

        <li><a href="pedidos2.php">
          <i class="fas uil uil-truck"></i>
          <span class="nav-item">Pedidos</span>
        </a></li>
        
        <li><a href="compras.php">
          <i class="fas uil uil-store"></i>
          <span class="nav-item">Compras</span>
        </a></li>

        <li><a href="proveedores.php">
          <i class="fas uil uil-user"></i>
          <span class="nav-item">Proveedores</span>
        </a></li>

        <li><a href="config/logout.php" class="logout">
          <i class="fas uil uil-sign-out-alt"></i>
          <span class="nav-item">Cerrar Sesión</span>
        </a></li>
        </ul>
    </nav>

    <section class="main">
      <div class="main-top">
        <h1>Proveedores</h1>
        <p><?php echo "Bienvenido" ." ". $_COOKIE['usuario'];?></p>
      </div>

      <section class="contenedor">
        <div class="contenedor-proveedores">
          <div class="item">
            <img src="imagenes/logo_luxe.png" alt="" class="img-item">
            <span class="titulo-item">Carnicos De Luxe</span>
            <span class="text">Telefono: 321 7421234</span>
            <span class="text">Email: deluxe1@luxe.com</span>
            <span class="text">Direccion: calle 49N 5-12</span>
            <button class="card-button"><a href="empresa_luxe.php">Ver Productos</a></button>
          </div>

          <div class="item"> 
            <img src="imagenes/logo_fama.png" alt="" class="img-item">
            <span class="titulo-item">Carnicos Fama</span>
            <span class="text">Telefono: 322 1873562</span>
            <span class="text">Email: fama@fama.com</span>
            <span class="text">Direccion: Call 17 # 29-70</span>
            <button class="card-button"><a href="empresa_fama.php">Ver Productos</a></button>
          </div>

          <div class="item">
            <img src="imagenes/logo_versalles.png" alt="" class="img-item">
            <span class="titulo-item">Carnicos Versalles</span>
            <span class="text">Telefono: 310 2387128</span>
            <span class="text">Email: versal3@gmail.com</span>
            <span class="text">Direccion: Av 30 # 26-37</span>
            <button class="card-button"><a href="empresa_versalles.php">Ver Productos</a></button>
          </div>

          <div class="item">
            <img src="imagenes/logo_gran_campo.jpg" alt="" class="img-item">
            <span class="titulo-item">El Gran Campo</span>
            <span class="text">Telefono: 312 3109367</span>
            <span class="text">Email: campo2@gmail.com</span>
            <span class="text">Direccion: Car 10 # 3-92 </span>
            <button class="card-button"><a href="empresa_gran_campo.php">Ver Productos</a></button>
          </div>

          <div class="item">
            <img src="imagenes/logo_la_cumbre.png" alt="" class="img-item">
            <span class="titulo-item">La Cumbre</span>
            <span class="text">Telefono: 311 0938654</span>
            <span class="text">Email: lcum2@cumbre.com</span>
            <span class="text">Direccion: Car 21 # 17 -63</span>
            <button class="card-button"><a href="empresa_cumbre.php">Ver Productos</a></button>
          </div>

          <div class="item">
            <img src="imagenes/logo_carnicos_del_campo.webp" alt="" class="img-item">
            <span class="titulo-item">Carnicos El Campo</span>
            <span class="text">Telefono: 316 9836172</span>
            <span class="text">Email: Camp1@gmail.com</span>
            <span class="text">Direccion: Call 10 # 5-51</span>
            <button class="card-button"><a href="empresa_campo.php">Ver Productos</a></button>
          </div>

          <div class="item">
            <img src="imagenes/logo_carnicos_torino.jpg" alt="" class="img-item">
            <span class="titulo-item">Carnicos Torino</span>
            <span class="text">Telefono: 314 8361035</span>
            <span class="text">Email: tor7@torino.com</span>
            <span class="text">Direccion: Call 25 # 6-08</span>
            <button class="card-button"><a href="empresa_torino.php">Ver Productos</a></button>
          </div>

          <div class="item">
            <img src="imagenes/logo_monaco.png" alt="" class="img-item">
            <span class="titulo-item">Carnicos Monaco</span>
            <span class="text">Telefono: 350 5050092</span>
            <span class="text">Email: mon9@monaco.com</span>
            <span class="text">Direccion:  Av 1 # 28-57</span>
            <button class="card-button"><a href="empresa_monaco.php">Ver Productos</a></button>
          </div>

          <div class="item">
            <img src="imagenes/logo_la_especial.webp" alt="" class="img-item">
            <span class="titulo-item">Carnes La Especial</span>
            <span class="text">Telefono: 301 0982612</span>
            <span class="text">Email: laE2@especial.com</span>
            <span class="text">Direccion: Call 5 # 4-48</span>
            <button class="card-button"><a href="empresa_especial.php">Ver Productos</a></button>
          </div>

          <div class="item">
            <img src="imagenes/logo_prime.png" alt="" class="img-item">
            <span class="titulo-item">Carnicos Prime</span>
            <span class="text">Telefono: 323 0022123</span>
            <span class="text">Email: Prim2@prime.com</span>
            <span class="text">Direccion: Call 20 # 24-05</span>
            <button class="card-button"><a href="empresa_prime.php">Ver Productos</a></button>
          </div>
        </div>
      </section>
    </section>
  </div>

</body>
</html>
