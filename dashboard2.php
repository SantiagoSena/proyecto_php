<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="Css/dashboard2.css">
    <title>slide</title>
</head>

<body>
    <nav>
        <ul class="items">
            <li>
                <a class="logo" href="">
                    <img src="/imagenes/logo_empresa.png" alt="">
                    <span class="nav-item">Asago S.A.S</span>
                </a>
            </li>

            <li><a href="">
                <i class="icon uil uil-estate"></i>
                <span class="nav-item">Inicio</span>
            </a></li>

            <li><a href="usuarios.php">
                <i class="icon uil uil-users-alt"></i>
                <span class="nav-item">Usuarios</span>
            </a></li>

            <li><a href="productos.php">
                <i class="icon uil uil-shopping-bag"></i>
                <span class="nav-item">Productos</span>
            </a></li>

            <li><a href="ventas.php">
                <i class="icon uil uil-bill"></i>
                <span class="nav-item">Ventas</span>
            </a></li>

            <li><a href="pedidos.php">
                <i class="icon uil uil-truck"></i>
                <span class="nav-item">Pedidos</span>
            </a></li>

            <li><a href="compras.php">
                <i class="icon uil uil-store"></i>
                <span class="nav-item">Compras</span>
            </a></li>

            <li><a href="compras.php">
                <i class="icon uil uil-user"></i>
                <span class="nav-item">Proveedores</span>
            </a></li>

            <li class="logout"><a href="index.php">
                <i class="icon uil uil-sign-out-alt"></i>
                <span class="nav-item">Cerrar Sesión</span>
            </a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="tittle">
            <i class="uil uil-tachometer-fast-alt"></i>
            <h1>Estadísticas Diarias</h1>
        </div>
    </div>

    <section class="contenedor">
    <div class="contenedor-items">
      <div class="item">
        <div class="iconBx">
            <i class="uil uil-users-alt"></i>
        </div>
        <span class="titulo-item">Usuarios</span>
        <span class="card-text">100</span>        
      </div>

      <div class="item"> 
        <div class="iconBx">
            <i class="uil uil-shopping-bag"></i>
        </div>
        <span class="titulo-item">Productos</span>
        <span class="card-text">200</span>
      </div>

      <div class="item">
        <div class="iconBx">
            <i class="uil uil-bill"></i>
        </div>
        <span class="titulo-item">Ventas</span>
        <span class="card-text">80</span>
      </div>

      <div class="item">
        <div class="iconBx">
            <i class="uil uil-truck"></i>
        </div>
        <span class="titulo-item">Pedidos</span>
        <span class="card-text">60</span>
      </div>

      <div class="item">
        <div class="iconBx">
            <i class="uil uil-store"></i>
        </div>
        <span class="titulo-item">Compras</span>
        <span class="card-text">50</span>
      </div>

      <div class="item">
        <div class="iconBx">
            <i class="uil uil-user"></i>
        </div>
        <span class="titulo-item">Proveedores</span>
        <span class="card-text">10</span>
      </div>

    </div>
  </section>
    
</body>
</html>