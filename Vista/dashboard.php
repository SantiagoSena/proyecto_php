
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
                        <i class="uil uil-truck"></i>
                        <span class="link-name">Pedidos</span>
                    </a></li>

                    <li><a href="compras.php">
                        <i class="uil uil-store"></i>
                        <span class="link-name">Compras</span>
                    </a></li>

                    <li><a href="compras.php">
                        <i class="uil uil-user"></i>
                        <span class="link-name">Proveedores</span>
                    </a></li>

                    <li><a href="calificaciones.php">
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

            <div class="dropdown">
                <button class="dropbtn"><i class="uil uil-angle-down"></i></button>
                <div class="dropdown-content">
                <a href="#">Opción 1</a>
                <a href="#">Opción 2</a>
                <a href="#">Opción 3</a>
                </div>
            </div>            
        </div>
    </div>

    <div class="title">
        <i class="uil uil-tachometer-fast-alt"></i>
        <h1></i>Estadisticas Diarias</h1>
    </div>

    <div class="cardBox">
        <div class="card">
            <div>
                <div class="text">Usuarios</div>
                <div class="number">100</div>
            </div>
            <div class="iconBx">
                <i class="uil uil-users-alt"></i>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="text">Productos</div>
                <div class="number">200</div>
            </div>
            <div class="iconBx">
                <i class="uil uil-shopping-bag"></i>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="text">Ventas</div>
                <div class="number">80</div>
            </div>
            <div class="iconBx">
                <i class="uil uil-bill"></i>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="text">Pedidos</div>
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
                    <span class="text">Compras</span>
                    <div class="number">50</div>
                </div>
                <div class="iconBx">
                    <i class="uil uil-store"></i>
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="text">Proveedores</div>
                    <div class="number">10</div>
                </div>
                    <div class="iconBx">
                    <i class="uil uil-user"></i>
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="text">Comentarios</div>
                    <div class="number">56</div>
                </div>
                <div class="iconBx">
                    <i class="uil uil-comments"></i>
                </div>
            </div>
        </div>
    </div>


       
</body>
</html>