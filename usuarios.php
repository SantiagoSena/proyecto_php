<?php
    include ("conexion.php");
    $Usuario_cliente = "SELECT * FROM usuarios WHERE Rol = '354'";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="Css/tables.css">
    <title>Usuarios</title>
</head>

<body>
    <div class="container">
        <nav>
            <ul>
                <li><a href="index.php" class="logo">
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

                <li><a href="#" class="logout">
                    <i class="fas uil uil-sign-out-alt"></i>
                    <span class="nav-item">Cerrar Sesión</span>
                </a></li>
            </ul>
        </nav>


        <section class="main">
            <div class="main-top">
                <i class="fas uil uil-bill"></i>
                <h1>Listado Usuarios</h1>
                <p><?php echo "Bienvenido" ." ". $_COOKIE['usuario'];?></p>
            </div>

            <section class="dashboard">
                <div class="dashboard-list">
                    <h1>Clientes</h1>
                    <table class="table">
                        <thead>      
                            <tr>                              
                                <th>Id</th>
                                <th>Rol</th>
                                <th>Estado</th>
                                <th>Nombres</th>
                                <th>Apellido</th>
                                <th>Fecha de Nacimiento</th>
                                <th>Direccion</th>
                                <th>Telefono</th>
                                <th>Email</th>
                                <th>Contraseña</th> 
                            </tr>
                        </thead>

                        <tbody>

                        <?php
                            $resultado = mysqli_query($conexion, $Usuario_cliente);
                            while($row = mysqli_fetch_assoc($resultado)){
                        ?>
                        <tr>
                            <td><?php echo $row["IdUsuario"];?></td>
                            <td><?php echo $row["Rol"];?></td>
                            <td><?php echo $row["Estado"];?></td>
                            <td><?php echo $row["Nombres"];?></td>
                            <td><?php echo $row["Apellidos"];?></td>
                            <td><?php echo $row["FechaNacimiento"];?></td>
                            <td><?php echo $row["Direccion"];?></td>
                            <td><?php echo $row["Telefono"];?></td>
                            <td><?php echo $row["Email"];?></td>
                            <td><?php echo $row["Contrasena"];?></td>
                        </tr>
                        <?php
                            } mysqli_free_result($resultado);
                        ?>
                        </tbody>
                    </table>
                </div>

                <div class="dashboard-list">
                    <h1>Vendedores</h1>
                    <?php
                        $Usuario_vendedor = "SELECT * FROM usuarios WHERE Rol = '214'"
                    ?>
                    <table class="table">
                        <thead>  
                            <tr>                                  
                                <th>Id</th>
                                <th>Rol</th>
                                <th>Estado</th>
                                <th>Nombres</th>
                                <th>Apellido</th>
                                <th>Fecha de Nacimiento</th>
                                <th>Dirección</th>
                                <th>Teléfono</th>
                                <th>Email</th>
                                <th>Contraseña</th>  
                            </tr>
                        </thead>

                        <tbody>
                        <?php
                            $resultado = mysqli_query($conexion, $Usuario_vendedor);
                            while($row = mysqli_fetch_assoc($resultado)){
                        ?>
                        <tr>
                            <td><?php echo $row["IdUsuario"];?></td>
                            <td><?php echo $row["Rol"];?></td>
                            <td><?php echo $row["Estado"];?></td>
                            <td><?php echo $row["Nombres"];?></td>
                            <td><?php echo $row["Apellidos"];?></td>
                            <td><?php echo $row["FechaNacimiento"];?></td>
                            <td><?php echo $row["Direccion"];?></td>
                            <td><?php echo $row["Telefono"];?></td>
                            <td><?php echo $row["Email"];?></td>
                            <td><?php echo $row["Contrasena"];?></td>
                        </tr>
                        <?php
                            } mysqli_free_result($resultado);
                        ?>
                        </tbody>
                    </table>
                </div>

                <div class="dashboard-list">
                    <h1>Domiciliarios</h1>
                    <?php
                        $Usuario_Domiciliario = "SELECT * FROM usuarios WHERE Rol = '201'"
                    ?>
                    <table class="table">
                        <thead>  
                            <tr>                                  
                                <th>Id</th>
                                <th>Rol</th>
                                <th>Estado</th>
                                <th>Nombres</th>
                                <th>Apellido</th>
                                <th>Fecha de Nacimiento</th>
                                <th>Dirección</th>
                                <th>Teléfono</th>
                                <th>Email</th>
                                <th>Contraseña</th>  
                            </tr>
                        </thead>

                        <tbody>
                        <?php
                            $resultado = mysqli_query($conexion, $Usuario_Domiciliario);
                            while($row = mysqli_fetch_assoc($resultado)){
                        ?>
                        <tr>
                            <td><?php echo $row["IdUsuario"];?></td>
                            <td><?php echo $row["Rol"];?></td>
                            <td><?php echo $row["Estado"];?></td>
                            <td><?php echo $row["Nombres"];?></td>
                            <td><?php echo $row["Apellidos"];?></td>
                            <td><?php echo $row["FechaNacimiento"];?></td>
                            <td><?php echo $row["Direccion"];?></td>
                            <td><?php echo $row["Telefono"];?></td>
                            <td><?php echo $row["Email"];?></td>
                            <td><?php echo $row["Contrasena"];?></td>
                        </tr>
                        <?php
                            } mysqli_free_result($resultado);
                        ?>
                        </tbody>
                    </table>
                </div>

                <div class="dashboard-list">
                    <h1>Administradores</h1>
                    <?php
                        $Usuario_administrador = "SELECT * FROM usuarios WHERE Rol = '578'"
                    ?>
                    <table class="table">
                        <thead>  
                            <tr>                                  
                                <th>Id</th>
                                <th>Rol</th>
                                <th>Estado</th>
                                <th>Nombres</th>
                                <th>Apellido</th>
                                <th>Fecha de Nacimiento</th>
                                <th>Dirección</th>
                                <th>Teléfono</th>
                                <th>Email</th>
                                <th>Contraseña</th>  
                            </tr>
                        </thead>

                        <tbody>
                        <?php
                            $resultado = mysqli_query($conexion, $Usuario_administrador);
                            while($row = mysqli_fetch_assoc($resultado)){
                        ?>
                        <tr>
                            <td><?php echo $row["IdUsuario"];?></td>
                            <td><?php echo $row["Rol"];?></td>
                            <td><?php echo $row["Estado"];?></td>
                            <td><?php echo $row["Nombres"];?></td>
                            <td><?php echo $row["Apellidos"];?></td>
                            <td><?php echo $row["FechaNacimiento"];?></td>
                            <td><?php echo $row["Direccion"];?></td>
                            <td><?php echo $row["Telefono"];?></td>
                            <td><?php echo $row["Email"];?></td>
                            <td><?php echo $row["Contrasena"];?></td>
                        </tr>
                        <?php
                            } mysqli_free_result($resultado);
                        ?>
                        </tbody>
                    </table>
                </div>

                <div class="dashboard-list">
                    <h1>SuperAdmin</h1>
                    <?php
                        $Usuario_SuperAdmin = "SELECT * FROM usuarios WHERE Rol = '971'"
                    ?>
                    <table class="table">
                        <thead>  
                            <tr>                                  
                                <th>Id</th>
                                <th>Rol</th>
                                <th>Estado</th>
                                <th>Nombres</th>
                                <th>Apellido</th>
                                <th>Fecha de Nacimiento</th>
                                <th>Dirección</th>
                                <th>Teléfono</th>
                                <th>Email</th>
                                <th>Contraseña</th>  
                            </tr>
                        </thead>

                        <tbody>
                        <?php
                            $resultado = mysqli_query($conexion, $Usuario_SuperAdmin);
                            while($row = mysqli_fetch_assoc($resultado)){
                        ?>
                        <tr>
                            <td><?php echo $row["IdUsuario"];?></td>
                            <td><?php echo $row["Rol"];?></td>
                            <td><?php echo $row["Estado"];?></td>
                            <td><?php echo $row["Nombres"];?></td>
                            <td><?php echo $row["Apellidos"];?></td>
                            <td><?php echo $row["FechaNacimiento"];?></td>
                            <td><?php echo $row["Direccion"];?></td>
                            <td><?php echo $row["Telefono"];?></td>
                            <td><?php echo $row["Email"];?></td>
                            <td><?php echo $row["Contrasena"];?></td>
                        </tr>
                        <?php
                            } mysqli_free_result($resultado);
                        ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </section>
    </div>
</body>
</html>