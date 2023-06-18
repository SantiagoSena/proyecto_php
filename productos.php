<?php
  include ("conexion.php");
  $producto = "SELECT * FROM producto WHERE NomCategoria = 'Carnicos'";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar " style="background-color: rgb(194, 16, 16);" data-bs-theme="dark" >
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">
            <img src="imagenes/logo_empresa.png" alt="Logo" width="70" height="70" class="d-inline-block align-text-top">
            BIENVENIDO ADMINISTRADOR</a>
            <form class="d-flex col-sm-6 col-md-6 col-md-lg-6 col-xl-6" role="search">
                <input class="form-control me-2" type="search" placeholder="¿Qué producto buscas?" aria-label="Search">
                <button type="submit" style="background-color: rgb(230, 72, 72);" class="btn btn-danger me-2">Buscar</button>
              </form>
              <div class="icon ml-4">
                <h5>
                  <a class="fa fa-envelope me-2 text-white btn" style="background-color: rgb(230, 72, 72);" href="#" data-toggle="tooltip" title="Correo" aria-hidden="true"></a>
                  <a class="fa fa-bell me-2 text-white btn" style="background-color: rgb(230, 72, 72);" href="#" data-toggle="tooltip" title="Notificaciones" aria-hidden="true"></a>
                  <a class="fa fa-close me-2 text-white btn" style="background-color: rgb(230, 72, 72);" href="index.php" data-toggle="tooltip" title="Cerrar" aria-hidden="true"></a>
                </h5>
              </div>
        </div>
    </nav>
    
    <div class="row no-gutters ">
      <div class="col-md-2 bg-danger mt-0 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
          <li class="nav-item">
              <a class="nav-link active text-white" href="productos.php"><i class="fa fa-shopping-basket mx-2" aria-hidden="true"></i>Productos</a>
              <hr class="bg-primary">
          </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="usuarios.php"><i class="fa fa-book mx-2" aria-hidden="true"></i>Listado Usuarios</a>
          <hr class="bg-primary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="ventas.php"><i class="fa fa-book mx-2" aria-hidden="true"></i>Listado Ventas</a>
          <hr class="bg-primary"> 
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="pedidos.php"><i class="fa fa-cart-plus mx-2" aria-hidden="true"></i>Listado Pedidos</a>
          <hr class="bg-primary"> 
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="domicilios_db.php"><i class="fa fa-truck mx-2" aria-hidden="true"></i>Listado Domicilios</a>
          <hr class="bg-primary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="proveedores.php"><i class="fa fa-user fa-lg mx-2" aria-hidden="true"></i>Proveedores</a>
          <hr class="bg-primary"> 
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="calificaciones.php"><i class="fa fa-star mx-2" aria-hidden="true"></i>Atención Cliente</a>
          <hr class="bg-primary">
        </li>
      </ul>
    </div>

    <div class="col-md-10 p-5 pt-5">
      <h3><i class="fa fa-shopping-basket me-2" aria-hidden="true"></i> Listado Productos</h3>
      <hr>
      <div class="d-grid gab-3 d-md-flex mt-2 mx-3 justify-content-md-start">
        <button type="button" class="btn btn-danger text-white " data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: rgb(230, 72, 72) ;">
          Agregar Producto
        </button>
      </div>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5 " id="exampleModalLabel">Nuevo Producto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form class="was-validated row g-3 mx-5" method="post">
              <div class="modal-body">
                <div class="col-12" style="text-align:left">
                  <label class="form-label">ID Producto</label>
                  <input name="id_producto" class="form-control" type="number" required>
              </div>
              <br>
              <div class="col-12" style="text-align:left">
                <label class="form-label">Fecha Registro</label>
                <input name="fecha_registro" class="form-control" type="date" required>
              </div>
              <br>
              <div class="col-12" style="text-align:left">
                <label class="form-label" >Nombre Producto</label>
                <input name="nombre_producto" class="form-control" type="text" required>
              </div>
              <br>
              <div class="col-12" style="text-align:left">
                <label class="form-label">Fecha Vencimiento</label>
                <input name="fecha_vencimiento" class="form-control" type="date" required>
              </div>
              <br>
              <div class="col-12" style="text-align:left">
                    <label class="form-label">Categoria</label>
                    <select name="categoria" class="form-select" >
                        <option value="">Seleccione una categoria</option>
                        <option value="Carnicos">Carnicos</option>
                        <option value="Pollo">Pollo</option>
                        <option value="Cerdo">Cerdo</option>
                        <option value="Chorizo">Chorizo</option>
                    </select>
                </div>
              <br>
              <div class="col-12" style="text-align:left">
                <label class="form-label">Cantidad</label>
                <input name="cantidad" class="form-control" type="number" required>
              </div>
              <br>
              <div class="col-12" style="text-align:left">
                <label class="form-label">Valor por libra</label>
                <input name="valor_libra" class="form-control" type="number" required>
              </div>
              <br>
              <div class="col-12" style="text-align:left">
                <label class="form-label">Saldo</label>
                <input name="saldo_producto" class="form-control" type="number" required>
              </div>
              </div>
              <div class="modal-footer">
                <input class="btn btn-danger" type="submit" value="Agregar" style="background-color: rgb(230, 72, 72);">
              </div>
              </form>
            </div>
          </div>
        </div>
      <br>
      <div class="card text-center col-sm-12 col-md-10 col-lg-10 col-xl-10">
        <div class="card-header">
          <ul class="nav nav-pills card-header-pills">
            <li class="nav-item">
              <h4><i class="fa fa-people me-2" aria-hidden="true"></i>Carne</h4>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">Id Producto</th>
                <th scope="col">Fecha Registro</th>
                <th scope="col">Nombre Producto</th>
                <th scope="col">Nombre Categoria</th>
                <th scope="col">cantidad</th>
                <th scope="col">Fecha Vencimiento</th>
                <th scope="col">Valor libra</th>
                <th scope="col">Saldo</th>
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
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded btn " data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
              </tr>
              <?php
                } mysqli_free_result($resultado);
                ?>
            </tbody>
          </table>
        </div>
      </div>
  <?php
    $producto_pollo = "SELECT * FROM producto WHERE NomCategoria = 'Pollo' ";
  ?>
      <hr>
      <div class="card text-center col-sm-12 col-md-10 col-lg-10 col-xl-10">
        <div class="card-header">
          <ul class="nav nav-pills card-header-pills">
            <li class="nav-item">
              <h4><i class="fa fa-people me-2" aria-hidden="true"></i>Pollo</h4>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">Id Producto</th>
                <th scope="col">Fecha Registro</th>
                <th scope="col">Nombre Producto</th>
                <th scope="col">Nombre Categoria</th>
                <th scope="col">cantidad</th>
                <th scope="col">Fecha Vencimiento</th>
                <th scope="col">Valor libra</th>
                <th scope="col">Saldo</th>
              </tr>
            </thead>
      
            <tbody>
              <?php
                $resultado = mysqli_query($conexion, $producto_pollo);
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
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded btn " data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
              </tr>
              <?php
                } mysqli_free_result($resultado);
                ?>
            </tbody>
          </table>
        </div>
      </div>
  <?php
    $producto_cerdo = "SELECT * FROM producto WHERE NomCategoria = 'Cerdo' ";
  ?>
      <hr>
      <div class="card text-center col-sm-12 col-md-10 col-lg-10 col-xl-10">
        <div class="card-header">
          <ul class="nav nav-pills card-header-pills">
            <li class="nav-item">

              <h4><i class="fa fa-people me-2" aria-hidden="true"></i>Cerdo</h4>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
              <th scope="col">Id Producto</th>
                <th scope="col">Fecha Registro</th>
                <th scope="col">Nombre Producto</th>
                <th scope="col">Nombre Categoria</th>
                <th scope="col">cantidad</th>
                <th scope="col">Fecha Vencimiento</th>
                <th scope="col">Valor libra</th>
                <th scope="col">Saldo</th>
              </tr>
            </thead>
      
            <tbody>
            <?php
                $resultado = mysqli_query($conexion, $producto_cerdo);
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
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded btn " data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
              </tr>
              <?php
                } mysqli_free_result($resultado);
                ?>
            </tbody>
          </table>
        </div>
      </div>
  <?php
    $producto_chorizo = "SELECT * FROM producto WHERE NomCategoria = 'Chorizo' ";
  ?>
      <hr>
      
      <div class="card text-center col-sm-12 col-md-10 col-lg-10 col-xl-10">
        <div class="card-header">
          <ul class="nav nav-pills card-header-pills">
            <li class="nav-item">

              <h4><i class="fa fa-people me-2" aria-hidden="true"></i> Chorizo</h4>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
              <th scope="col">Id Producto</th>
                <th scope="col">Fecha Registro</th>
                <th scope="col">Nombre Producto</th>
                <th scope="col">Nombre Categoria</th>
                <th scope="col">cantidad</th>
                <th scope="col">Fecha Vencimiento</th>
                <th scope="col">Valor libra</th>
                <th scope="col">Saldo</th>
              </tr>
            </thead>
      
            <tbody>
            <?php
                $resultado = mysqli_query($conexion, $producto_chorizo);
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
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded btn " data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
              </tr>
              <?php
                } mysqli_free_result($resultado);
                ?>
            </tbody>
          </table>
        </div>
      </div>
      <hr>
</body>
</html>