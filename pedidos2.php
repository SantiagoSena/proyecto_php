<?php
    include ("conexion.php");
    $pedido = "SELECT * FROM pedido"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="Css/productos2.css">
    <title>Ventas</title>
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
                <i class="fas uil uil-bill"></i>
                <h1>Listado Ventas</h1>
            </div>
            
            <div class="boton-modal">
                <label for="btn-modal">Agregar Venta</label>
            </div>

            <input type="checkbox" id="btn-modal">
            <div class="container-modal">
                <div class="content-modal">
                    <div class="tittle">
                        <span>Registrar Venta</span>
                    </div>   

                    <form action="config/login.php" method="post">
                        <div class="row">
                            <label>ID Venta</label>
                            <input type="text" name="id_venta" required>
                        </div>

                        <div class="row">
                            <label>Fecha Emisión</label>
                            <input type="date" name="fecha_emision" required>
                        </div>

                        <div class="row">
                            <label>Id Pedido</label>
                            <input type="text" name="id_pedido" required>
                        </div>

                        <div class="row">
                            <label>Id Cliente</label>
                            <input type="text" name="id_cliente" required>
                        </div>

                        <div class="row">
                            <label>Id Producto</label>
                            <input type="number" name="id_producto" required>
                        </div>

                        <div class="row">
                            <label>Producto</label>
                            <input type="text" name="producto" required>
                        </div>

                        <div class="row">
                            <label>Cantidad</label>
                            <input type="number" name="cantidad" required>
                        </div>

                        <div class="row">
                            <label>Valor Producto</label>
                            <input type="number" name="valor_producto" required>
                        </div>

                        <div class="row">
                            <label>Valor SubTotal</label>
                            <input type="number" name="valor_subtotal" required>
                        </div>

                        <div class="row">
                            <label>Valor Total</label>
                            <input type="number" name="valor_total" required>
                        </div>

                        <div class="row block">
                            <input class="btn" type="submit" value="Agregar Venta">
                        </div>
                    </form>                    
                   
                    <label for="btn-modal" class="cerrar-modal"></label>
                </div>
            </div>

            <section class="dashboard">
                <div class="dashboard-list">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Fecha Emisión</th>
                            <th>Id Pedido</th>
                            <th>Id Cliente</th>
                            <th>Id Producto</th>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Valor Producto</th>
                            <th>SubTotal</th>
                            <th>Valor Total</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php
                            $resultado = mysqli_query($conexion, $Venta);
                            while($row = mysqli_fetch_assoc($resultado)){
                        ?>
                        <tr>
                            <td><?php echo $row["IdVenta"];?></td>
                            <td><?php echo $row["FechaEmision"];?></td>
                            <td><?php echo $row["IdPedido"];?></td>
                            <td><?php echo $row["IdCliente"];?></td>
                            <td><?php echo $row["IdProducto"];?></td>
                            <td><?php echo $row["Producto"];?></td>
                            <td><?php echo $row["Cantidad"];?></td>
                            <td><?php echo "$". $row["ValorProducto"];?></td>
                            <td><?php echo "$". $row["SubTotal"];?></td>
                            <td><?php echo "$". $row["ValorTotal"];?></td>
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