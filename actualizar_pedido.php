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
 $id_pedido = $_GET["id_pedido"];
 $pedido = "SELECT * FROM pedido WHERE IdPedido = '$id_pedido'";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="Css/tables.css">
    <title>Actualizar</title>
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
        <i class="fas uil uil-truck"></i>
        <h1>Editar Pedidos</h1>
        <p><?php echo "Bienvenido" ." ". $_COOKIE['usuario'];?></p>
      </div>

      <section class="dashboard">
        <form action="procesar_actualizar.php" method="post">
          <div class="dashboard-list">
            <table class="table">
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th>Estado Pedido</th>
                  <th>Valor Total</th>
                </tr>
              </thead>

              <tbody>
                <?php
                  $resultado = mysqli_query($conexion, $pedido);
                  while($row = mysqli_fetch_assoc($resultado)){
                ?>
                <tr>
                  <td><input type="hidden" value="<?php echo $row["IdPedido"];?>" name="id_pedido" ></td>
                  <td><input type="hidden" value="<?php echo $row["IdUsuario"];?>" name="id_cliente" ></td>
                  <td><input type="hidden" value="<?php echo $row["FechaEmision"];?>" name="fecha_emision" ></td>
                  <td><input type="text" value="<?php echo $row["Estado"];?>" name="estado" ></td>
                  <td><input type="number" value="<?php echo $row["ValorTotal"];?>" name="valor_total" ></td>
                </tr>
                <?php
                  } mysqli_free_result($resultado);
                ?>
              </tbody>
            </table>
          <input class="btn-actualizar" type="submit" value="Actualizar"></td>
        </div>
        </form>
      </section>
    </section>
  </div>
</body>
</html>