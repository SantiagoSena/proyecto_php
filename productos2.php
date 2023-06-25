<?php
  include ("conexion.php");
  $producto = "SELECT * FROM producto WHERE NomCategoria = 'Carnicos'";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="Css/productos2.css">
    <title>Productos</title>
</head>
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

                <li><a href="compras.php">
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
                <i class="fas uil uil-shopping-bag"></i>
                <h1>Listado Productos</h1>
                <i class="fas fa-user-cog"></i>
            </div>
            
            <div class="boton-modal">
                <label for="btn-modal">Agregar Producto</label>
            </div>

            <input type="checkbox" id="btn-modal">
            <div class="container-modal">
                <div class="content-modal">
                    <div class="tittle">
                        <span>Registrar Producto</span>
                    </div>   

                    <form action="config/login.php" method="post">
                        <div class="row">
                            <label>ID Producto</label>
                            <input type="text" name="Usuario" required>
                        </div>

                        <div class="row">
                            <label>Fecha Registro</label>
                            <input type="date" name="Clave" required>
                        </div>

                        <div class="row">
                            <label>Nombre</label>
                            <input type="text" name="Usuario" required>
                        </div>

                        <div class="row">
                            <label>Categoria</label>
                            <input type="text" name="Usuario" required>
                        </div>

                        <div class="row">
                            <label>Cantidad</label>
                            <input type="number" name="Usuario" required>
                        </div>

                        <div class="row">
                            <label>Fecha Vencimiento</label>
                            <input type="date" name="Clave" required>
                        </div>

                        <div class="row block">
                            <label>Valor Libra</label>
                            <input type="number" name="Usuario" required>
                        </div>

                        <div class="row block">
                            <input name="btningresar" class="btn" type="submit" value="Agregar Producto">
                        </div>
                    </form>                    
                   
                    <label for="btn-modal" class="cerrar-modal"></label>
                </div>
            </div>

            <section class="dashboard">
                <div class="dashboard-list">
                    <h1>Carne</h1>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Fecha Registro</th>
                            <th>Nombre</th>
                            <th>Categoria</th>
                            <th>cantidad</th>
                            <th>Fecha Vencimiento</th>
                            <th>Valor libra</th>
                            <th>Saldo</th>
                            <th></th>
                        </tr>
                        </thead>

                        <tbody>
                            <?php
                            $resultado = mysqli_query($conexion, $producto);
                                while($row = mysqli_fetch_assoc($resultado)){
                            ?>

                            <tr>
                                <td><?php echo $row["IdProducto"];?></td>
                                <td><?php echo $row["FechaRegistro"];?></td>
                                <td><?php echo $row["NomProducto"];?></td>
                                <td><?php echo $row["NomCategoria"];?></td>
                                <td><?php echo $row["cantidad"];?></td>
                                <td><?php echo $row["FechaVencimiento"];?></td>
                                <td><?php echo $row["Valorlibra"];?></td>
                                <td><?php echo $row["Saldo"];?></td>
                                <td><a href="actualizar_producto.php?id_producto=<?php echo $row["IdProducto"];?>"data-toggle="tooltip" title="Editar" aria-hidden="true"><i class="uil uil-edit"></i></a></td>
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