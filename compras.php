<?php
require_once 'config/validate_session.php';
require_once 'config/validate_roles.php';
include ("conexion.php");

if(!isset($_SESSION['rol'])){
    header('Location: ingresar.php');
}else{
    if($_SESSION['rol'] != 971 && $_SESSION['rol']!=214 && $_SESSION['rol'] != 578 && $_SESSION['rol'] != 201){
        header('Location: ingresar.php');
    }
}

$Compra = "SELECT * FROM compra";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="Css/tables.css">
    <title>Compras</title>
</head>

<body>
    <div class="container">
        <nav>
            <ul>
                <?php
                if($_SESSION['rol'] != 971  && $_SESSION['rol'] != 578){
                    echo '
                        <li><a href="index2.php" class="logo">
                        <img src="imagenes/logo_asago1.png">
                        <span class="nav-item">Asago S.A.S</span>
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
                        
                        <li><a href="config/logout.php" class="logout">
                        <i class="fas uil uil-sign-out-alt"></i>
                        <span class="nav-item">Cerrar Sesión</span>
                        </a></li>';

                }
                elseif ($_SESSION['rol'] != 214 && $_SESSION['rol'] != 201) {
                    echo '

                    <li><a href="index2.php" class="logo">
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
                    </a></li>';
                }
                ?>  

                <!--
                <li><a href="index2.php" class="logo">
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
                -->
            </ul>
        </nav>

        <section class="main">
            <div class="main-top">
                <i class="fas uil uil-store"></i>
                <h1>Listado Compras</h1>
                <p><?php echo "Bienvenido" ." ". $_COOKIE['usuario'];?></p>
            </div>

            <?php
            if($_SESSION['rol'] != 971  && $_SESSION['rol'] != 578){
                echo '';
                }
                elseif ($_SESSION['rol'] != 214 && $_SESSION['rol'] != 201) {
                echo '';
                }
            ?>

            <div class="container-botones">
                <div class="boton-modal">
                    <label for="btn-modal-agregar">Agregar Compra</label>
                    <label for="btn-modal-consultar">Consultar</label>               
                </div>            
            </div>

            <input type="checkbox" id="btn-modal-agregar" class="checkbox-hidden">
            <div class="container-modal" id="container-modal-agregar">
                <div class="content-modal">
                    <div class="tittle">
                        <span>Registrar Compra</span>
                    </div>   

                    <form action="insertar_compra.php" method="post">
                    <div class="row">
                            <label>Id Compra</label>
                            <input type="number" name="id_compra" required>
                        </div>

                        <div class="row">
                            <label>Fecha Emisión</label>
                            <input type="date" name="fecha_emision" required>
                        </div>

                        <div class="row">
                            <label>Id Proveedor</label>
                            <input type="number" name="id_proveedor" required>
                        </div>

                        <!--
                        <div class="row">
                            <label>Id Producto</label>
                            <input type="number" name="id_producto" required>
                        </div>
                        -->

                        <div class="row">
                            <label>Descripción</label>
                            <input type="text" name="descripcion" required>
                        </div>                     

                        <div class="row">
                            <label>Valor Producto</label>
                            <input type="number" name="valor_producto"  required>
                        </div>

                        <div class="row">
                            <label>SubTotal</label>
                            <input type="number" name="subtotal"  required>
                        </div>

                        <div class="row">
                            <label>Valor Total</label>
                            <input type="number" name="valor_total"  required>
                        </div>

                        <div class="row block">
                            <input class="btn" type="submit" value="Agregar Compra">
                        </div>

                    </form>     
                    <label for="btn-modal-agregar" class="cerrar-modal"></label>                
                </div>
            </div>

            <input type="checkbox" id="btn-modal-consultar" class="checkbox-hidden">
            <div class="container-modal" id="container-modal-consultar">
                <div class="content-modal">
                    <div class="tittle">
                        <span>Consultar</span>
                    </div>

                    <form action="" method="post">
                        <div class="row">
                            <label>ID Producto</label>
                            <input type="number" name="id_compra" >
                        </div>

                        <div class="row">
                            <label>ID Proveedor</label>
                            <input type="number" name="id_proveedor">
                        </div>

                        <div class="row">
                            <label>Descripción</label>
                            <input type="text" name="descripcion">
                        </div>

                        <div class="row block">
                            <input class="btn" type="submit" value="Consultar">
                        </div>
                    </form>
                    <label for="btn-modal-consultar" class="cerrar-modal"></label>
                </div>
            </div>

            <?php
            if (isset($_POST['id_compra'])) {
                $Id_compra = $_POST['id_compra'];
            }

            if (isset($_POST['id_proveedor'])) {
                $Id_proveedor = $_POST['id_proveedor'];
            }

            if (isset($_POST['descripcion'])) {
                $descripcion = $_POST['descripcion'];
            }

            $Compra = "SELECT * FROM compra WHERE 1";

            if (!empty($Id_compra)){
                $Compra .= " AND IdCompra LIKE '%$Id_compra%'";
            }

            if (!empty($Id_proveedor)){
                $Compra .= " AND IdProveedor LIKE '%$Id_proveedor%'";
            }

            if (!empty($descripcion)){
                $Compra .= " AND Descripcion LIKE '%$descripcion%'";
            }
            ?>
            
            <section class="dashboard">
                <div class="dashboard-list">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Fecha Emisión</th>
                            <th>Id Proveedor</th>
                            <!--<th>Id Producto</th>-->
                            <th>Descripcion</th>
                            <th>ValorProducto</th>
                            <th>SubTotal</th>
                            <th>ValorTotal</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php
                            $resultado = mysqli_query($conexion, $Compra);
                            while($row = mysqli_fetch_assoc($resultado)){
                        ?>
                        <tr>
                            <td><?php echo $row["IdCompra"];?></td>
                            <td><?php echo $row["FechaEmision"];?></td>
                            <td><?php echo $row["IdProveedor"];?></td>
                            <!--<td><?php echo $row["IdProducto"];?></td>-->
                            <td><?php echo $row["Descripcion"];?></td>
                            <td><?php echo "$".$row["ValorProducto"];?></td>
                            <td><?php echo "$".$row["SubTotal"];?></td>
                            <td><?php echo "$". $row["ValorTotal"];?></td>
                            <td></td>
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