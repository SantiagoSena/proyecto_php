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

include ("conexion.php");
  $producto = "SELECT * FROM producto";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="Css/tables.css">
    <title>Productos</title>
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
                <i class="fas uil uil-shopping-bag"></i>
                <h1>Listado Productos</h1>
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
                    <label for="btn-modal-registrar">Agregar Equipo</label>
                    <label for="btn-modal-consultar">Consultar</label>               
                </div>
            </div>

            <input type="checkbox" id="btn-modal-registrar" class="checkbox-hidden">
            <div class="container-modal" id="container-modal-registrar">
                <div class="content-modal">
                    <div class="tittle">
                        <span>Registrar Producto</span>
                    </div>   

                    <form action="insertar_producto.php" method="post">
                        <div class="row">
                            <label>ID Producto</label>
                            <input type="number" name="id_producto" required>
                        </div>

                        <div class="row">
                            <label>Fecha Registro</label>
                            <input type="date" name="fecha_registro" required>
                        </div>

                        <div class="row">
                            <label>Nombre</label>
                            <input type="text" name="nombre_producto" required>
                        </div>

                        <div class="row">
                            <label>Categoria</label>
                            <select name="categoria" class="form-select" >
                                <option value="">Seleccione una categoria</option>
                                <option value="Carnicos">Carne</option>
                                <option value="Pollo">Pollo</option>
                                <option value="Cerdo">Cerdo</option>
                                <option value="Chorizo">Chorizo</option>
                            </select>
                        </div>

                        <div class="row">
                            <label>Cantidad</label>
                            <input type="number" name="cantidad" required>
                        </div>

                        <div class="row">
                            <label>Fecha Vencimiento</label>
                            <input type="date" name="fecha_vencimiento" required>
                        </div>

                        <div class="row">
                            <label>Valor Libra</label>
                            <input type="number" name="valor_libra" required>
                        </div>

                        <div class="row">
                            <label>Saldo</label>
                            <input type="number" name="saldo_producto" required>
                        </div>

                        <div class="row block">
                            <input class="btn" type="submit" value="Agregar Producto">
                        </div>
                    </form>     
                    <label for="btn-modal-registrar" class="cerrar-modal"></label>                
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
                            <input type="number" name="id_producto" >
                        </div>

                        <div class="row">
                            <label>Nombre</label>
                            <input type="text" name="nombre_producto" >
                        </div>

                        <div class="row">
                            <label>Categoria</label>
                            <select name="categoria" class="form-select" >
                                <option value="">Seleccione una categoria</option>
                                <option value="Carne">Carne</option>
                                <option value="Pollo">Pollo</option>
                                <option value="Cerdo">Cerdo</option>
                                <option value="Chorizo">Chorizo</option>
                            </select>
                        </div>

                        <div class="row">
                            <label>Cantidad</label>
                            <input type="text" name="cantidad" >
                        </div>

                        <div class="row">
                            <label>Estado</label>
                            <select name="equi_estado" class="form-select" >
                                <option value="">Seleccione un Estado</option>
                                <option value="Disponible">Disponible</option>
                                <option value="No Disponible">No Disponible</option>
                            </select>
                        </div>

                        <div class="row block">
                            <input class="btn" type="submit" value="Consultar">
                        </div>
                    </form>
                    <label for="btn-modal-consultar" class="cerrar-modal"></label>
                </div>
            </div>

            <?php
            if (isset($_POST['id_producto'])) {
                $id_producto = $_POST['id_producto'];
            }

            if (isset($_POST['nombre_producto'])) {
                $nombre_producto = $_POST['nombre_producto'];

            }

            if (isset($_POST['categoria'])) {
                $categoria = $_POST['categoria'];
            }

            if (isset($_POST['cantidad'])) {
                $cantidad = $_POST['cantidad'];

            }

            $producto = "SELECT * FROM producto WHERE 1";

            if (!empty($id_producto)){
                $producto .= " AND IdProducto LIKE '%$id_producto%'";
            }

            if (!empty($nombre_producto)){
                $producto .= " AND NomProducto LIKE '%$nombre_producto%'";
            }

            if (!empty($categoria)){
                $producto .= " AND NomCategoria = '$categoria'";
            }

            if (!empty($cantidad)){
                $producto .= " AND cantidad = '$cantidad'";
            }
            ?>

            <section class="dashboard">
            <div class="dashboard-list">
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
                            <th>Acciones</th>
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
                                <td><?php echo "$". $row["Valorlibra"];?></td>
                                <td><?php echo "$". $row["Saldo"];?></td>
                                <td><a href="actualizar_producto.php?id_producto=<?php echo $row["IdProducto"];?>" class="edit" data-toggle="tooltip" title="Editar" aria-hidden="true"><i class="uil uil-edit"></i></a></td>
                            </tr>
                            <?php
                            } mysqli_free_result($resultado);
                            ?>
                        </tbody>
                    </table>
                </div>
                
                <?php
                    $producto_carne = "SELECT * FROM producto WHERE NomCategoria = 'Carne' ";
                ?>
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
                            <th>Acciones</th>
                        </tr>
                        </thead>

                        <tbody>
                            <?php
                            $resultado = mysqli_query($conexion, $producto_carne);
                                while($row = mysqli_fetch_assoc($resultado)){
                            ?>

                            <tr>
                                <td><?php echo $row["IdProducto"];?></td>
                                <td><?php echo $row["FechaRegistro"];?></td>
                                <td><?php echo $row["NomProducto"];?></td>
                                <td><?php echo $row["NomCategoria"];?></td>
                                <td><?php echo $row["cantidad"];?></td>
                                <td><?php echo $row["FechaVencimiento"];?></td>
                                <td><?php echo "$". $row["Valorlibra"];?></td>
                                <td><?php echo "$". $row["Saldo"];?></td>
                                <td><a href="actualizar_producto.php?id_producto=<?php echo $row["IdProducto"];?>" class="edit" data-toggle="tooltip" title="Editar" aria-hidden="true"><i class="uil uil-edit"></i></a></td>
                            
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