<?php
require_once 'config/validate_session.php';
require_once 'config/validate_roles.php';
include ("conexion.php");
if(!isset($_SESSION['rol'])){
    header('Location: ingresar.php');
}else{
    if($_SESSION['rol'] != 971 && $_SESSION['rol']!=214 && $_SESSION['rol'] != 578){
        header('Location: ingresar.php');
    }
}

$numeroUsuario = $conexion->query("SELECT COUNT(*) FROM usuarios");
$numeroUsuario = $numeroUsuario->fetch_assoc();

$numeroVenta = $conexion->query("SELECT COUNT(*) FROM venta");
$numeroVenta = $numeroVenta->fetch_assoc();

$numeroPedido = $conexion->query("SELECT COUNT(*) FROM pedido");
$numeroPedido = $numeroPedido->fetch_assoc();

$numeroCompra = $conexion->query("SELECT COUNT(*) FROM compra");
$numeroCompra = $numeroCompra->fetch_assoc();

$numeroProducto = $conexion->query("SELECT COUNT(*) FROM producto");
$numeroProducto = $numeroProducto->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="Css/dashboard.css">
    <title>Dashboard</title>
</head>

<body>
    <div class="container">
        <nav>
            <ul>
                <li><a href="#" class="logo">
                    <img src="imagenes/logo_asago1.png">
                    <span class="nav-item">Asago S.A.S</span>
                </a></li>

                <li><a href="dashboard.php">
                    <i class="fas uil uil-estate"></i>
                    <span class="nav-item">Dashboard</span>
                </a></li>

                <li><a href="usuarios.php">
                    <i class="fas uil uil-users-alt"></i>
                    <span class="nav-item">Usuarios</span>
                </a></li>

                <li><a href="productos.php">
                    <i class="fas uil uil-shopping-bag"></i>
                    <span class="nav-item">Productos</span>
                </a></li>

                <li><a href="ventas.php">
                    <i class="fas uil uil-bill"></i>
                    <span class="nav-item">Ventas</span>
                </a></li>

                <li><a href="pedidos.php">
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
                <i class="fas uil uil-dashboard"></i>
                <h1>Estadisticas Diarias</h1>
                <p><?php echo "Bienvenido" ." ". $_COOKIE['usuario'];?></p>
            </div>

            <section class="contenedor">
                <div class="contenedor-items">
                    <div class="item">
                        <div class="iconBx">
                            <i class="uil uil-users-alt"></i>
                        </div>
                        <span class="titulo-item">Usuarios</span>
                        <span class="card-text"><?php echo $numeroUsuario['COUNT(*)'];?></span>       
                    </div>

                    <div class="item"> 
                        <div class="iconBx">
                            <i class="uil uil-shopping-bag"></i>
                        </div>
                        <span class="titulo-item">Productos</span>
                        <span class="card-text"><?php echo $numeroProducto['COUNT(*)'];?></span>
                    </div>

                    <div class="item">
                        <div class="iconBx">
                            <i class="uil uil-bill"></i>
                        </div>
                        <span class="titulo-item">Ventas</span>
                        <span class="card-text"><?php echo $numeroVenta['COUNT(*)'];?></span>
                    </div>

                    <div class="item">
                        <div class="iconBx">
                            <i class="uil uil-truck"></i>
                        </div>
                        <span class="titulo-item">Pedidos</span>
                        <span class="card-text"><?php echo $numeroPedido['COUNT(*)'];?></span>
                    </div>

                    <div class="item">
                        <div class="iconBx">
                            <i class="uil uil-store"></i>
                        </div>
                        <span class="titulo-item">Compras</span>
                        <span class="card-text">465</span>
                    </div>
                </div>
            </section>
        </section>
    </div>
    
</body>
</html>