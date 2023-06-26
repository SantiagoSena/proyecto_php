<?php
require_once 'config/validate_session.php';
require_once 'config/validate_roles.php';
if(!isset($_SESSION['rol'])){
    header('Location: ingresar.php');
}else{
    if($_SESSION['rol'] != 971 ){
        header('Location: ingresar.php');
    }
}
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
                <li><a href="index.php" class="logo">
                    <img src="imagenes/logo_asago1.png">
                    <span class="nav-item">Asago S.A.S</span>
                </a></li>

                <li><a href="dashboard2.php">
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

                <li><a href="#" class="logout">
                    <i class="fas uil uil-sign-out-alt"></i>
                    <span class="nav-item">Cerrar Sesión</span>
                </a></li>
            </ul>
        </nav>

        <section class="main">
            <div class="main-top">
                <i class="fas uil uil-dashboard"></i>
                <h1>Estadisticas Diarias</h1>
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
        </section>
    </div>
    
</body>
</html>