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

$Venta = "SELECT * FROM venta";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="Css/tables.css">
    <title>Ventas</title>
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
            </ul>
        </nav>

        <section class="main">
            <div class="main-top">
                <i class="fas uil uil-bill"></i>
                <h1>Listado Ventas</h1>
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
                    <label for="btn-modal-agregar">Agregar Venta</label>
                    <label for="btn-modal-consultar">Consultar</label>               
                </div>            
            </div>       
        
            <input type="checkbox" id="btn-modal-agregar" class="checkbox-hidden">
            <div class="container-modal" id="container-modal-agregar">
                <div class="content-modal">
                    <div class="tittle">
                        <span>Registrar Venta</span>
                    </div>   

                    <form action="insertar_venta.php" method="post">
                        <div class="row">
                            <label>ID Venta</label>
                            <input type="text" name="id_venta" required>
                        </div>

                        <div class="row">
                            <label>Fecha Emisión</label>
                            <input type="date" name="fecha_emision" required>
                        </div>

                        <!--
                        <div class="row">
                            <label>Id Pedido</label>
                            <input type="text" name="id_pedido" required>
                        </div>
                        -->

                        <div class="row">
                            <label>Id Producto</label>
                            <input type="number" name="id_producto" required>
                        </div>

                        <div class="row">
                            <label>Producto</label>
                            <input type="text" name="producto" required>
                        </div>

                        <div class="row">
                            <label>Tipo</label>
                            <select name="ven_tipo" class="form-select" >
                                <option value="">Seleccione una Opción</option>
                                <option value="Fisico">Punto Fisico</option>
                                <option value="linea">En linea</option>
                            </select>
                        </div>

                        <div class="row">
                            <label>Cantidad</label>
                            <input type="number" name="cantidad" required>
                        </div>

                        <!--
                        <div class="row">
                            <label>Valor Producto</label>
                            <input type="number" name="valor_producto" required>
                        </div>
                        -->

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
                            <label>Id Venta</label>
                            <input type="number" name="id_venta" >
                        </div>

                        <div class="row">
                            <label>Producto</label>
                            <input type="text" name="nom_producto" >
                        </div>

                        <div class="row">
                            <label>Tipo</label>
                            <select name="ven_tipo" class="form-select" >
                                <option value="">Seleccione una Opción</option>
                                <option value="Fisico">Punto Fisico</option>
                                <option value="linea">En linea</option>
                            </select>
                        </div>

                        <div class="row">
                            <label>Cantidad</label>
                            <input type="text" name="Cantidad" >
                        </div>

                        <div class="row block">
                            <input class="btn" type="submit" value="Consultar">
                        </div>
                    </form>
                    <label for="btn-modal-consultar" class="cerrar-modal"></label>
                </div>
            </div>

            <?php
            if (isset($_POST['id_venta'])) {
                $id_Venta = $_POST['id_venta'];
            }

            if (isset($_POST['nom_producto'])) {
                $nom_Producto = $_POST['nom_producto'];
            }

            if (isset($_POST['ven_tipo'])) {
                $ven_Tipo = $_POST['ven_tipo'];
            }

            if (isset($_POST['Cantidad'])) {
                $Cantidad = $_POST['Cantidad'];
            }    

            $venta = "SELECT * FROM venta WHERE 1";

            if (!empty($id_Venta)){
                $venta.= " AND IdVenta LIKE '%$id_Venta%'";
            }

            if (!empty($nom_Producto)){
                $venta.= " AND Producto LIKE '%$nom_Producto%'";
            }

            if (!empty($ven_Tipo)){
                $venta .= " AND Tipo LIKE '%$ven_Tipo%'";
            }           

            if (!empty($Cantidad)){
                $venta.= " AND Cantidad = '$Cantidad'";
            }

            ?>

            <section class="dashboard">
                <div class="dashboard-list">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Fecha Emisión</th>
                            <th>Tipo</th>
                            <th>Id Producto</th>
                            <th>Productos</th>
                            <th>Cantidad</th>
                            <th>SubTotal</th>
                            <th>Valor Total</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php
                            $resultado = mysqli_query($conexion, $venta);
                            while($row = mysqli_fetch_assoc($resultado)){
                        ?>
                        <tr>
                            <td><?php echo $row["IdVenta"];?></td>
                            <td><?php echo $row["FechaEmision"];?></td>
                            <td><?php echo $row["Tipo"];?></td>
                            <td><?php echo $row["IdProducto"];?></td>
                            <td><?php echo $row["Producto"];?></td>
                            <td><?php echo $row["Cantidad"];?></td>
                            <td><?php echo "$". $row["SubTotal"];?></td>
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

            <section class="paginacion">
                <ul>
                    <li class="disabled">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </section>
        </section>
    </div>
</body>
</html>