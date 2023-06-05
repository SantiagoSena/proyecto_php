<?php
    include ("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Vista/Css/dashboard.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <title>Dashboard</title>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="/imagenes/logo_empresa.png" alt="">
            </div>
            <span class="logo_name"> Asago S.A.S</span>
        </div>

        <div class="menu-items">
            <div class="navigation">
                <ul> 
                    <li><a href="">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">Inicio</span>
                    </a></li>

                    <li><a href="usuarios.php">
                        <i class="uil uil-users-alt"></i>
                        <span class="link-name">Usuarios</span>
                    </a></li>

                    <li><a href="productos.php">
                        <i class="uil uil-shopping-bag"></i>
                        <span class="link-name">Productos</span>
                    </a></li>

                    <li><a href="ventas.php">
                        <i class="uil uil-bill"></i>
                        <span class="link-name">Ventas</span>
                    </a></li>

                    <li><a href="pedidos.php">
                        <i class="uil uil-shopping-cart"></i>
                        <span class="link-name">Pedidos</span>
                    </a></li>

                    <li><a href="domicilios_db.php">
                        <i class="uil uil-truck"></i>
                        <span class="link-name">Domicilios</span>
                    </a></li>

                    <li><a href="">
                        <i class="uil uil-store"></i>
                        <span class="link-name">Compras</span>
                    </a></li>

                    <li><a href="">
                        <i class="uil uil-book-reader"></i>
                        <span class="link-name">Atención al Cliente</span>
                    </a></li>

                    <li class="close-seccion"><a href="index.php">
                        <i class="uil uil-sign-out-alt"></i>
                        <span class="link-name">Cerrar Sesión</span>
                    </a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="main">
        <div class="topbar">
            <div class="toggle">
                <i class="uil uil-bars"></i>
            </div>

            <div class="search">
                <label>
                    <input type="text" placeholder="Busca aquí...">
                    <i class="uil uil-search"></i>
                </label>
            </div>

            <div class="user">
                <img src="/imagenes/avatar.PNG" alt="">
            </div>
        </div>
    </div>

    <div class="cardBox">
        <div class="card">
            <div>
                <div class="text"><a href="usuarios.php">Usuarios</a></div>
                <div class="number">100</div>
            </div>
            <div class="iconBx">
                <i class="uil uil-users-alt"></i>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="text"><a href="productos.php">Productos</a></div>
                <div class="number">200</div>
            </div>
            <div class="iconBx">
                <i class="uil uil-shopping-bag"></i>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="text"><a href="ventas.php">Ventas</a></div>
                <div class="number">80</div>
            </div>
            <div class="iconBx">
                <i class="uil uil-bill"></i>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="text"><a href="domicilios_db.php" >Domicilios</a></div>
                <div class="number">60</div>
            </div>
                <div class="iconBx">
                <i class="uil uil-truck"></i>
            </div>
        </div>
    </div>

    <div class="cardBox">
        <div class="card">
            <div>
                <span class="text"><a href="">Compras</a></span>
                <div class="number">50</div>
            </div>
            <div class="iconBx">
                <i class="uil uil-store"></i>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="text"><a href="pqrs.php">Comentarios</a></div>
                <div class="number">56</div>
            </div>
            <div class="iconBx">
                <i class="uil uil-comments"></i>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="text">Alertas</div>
                <div class="number">30</div>
            </div>
                <div class="iconBx">
                <i class="uil uil-exclamation-triangle"></i>
            </div>
        </div>
    </div>


       
</body>
</html>