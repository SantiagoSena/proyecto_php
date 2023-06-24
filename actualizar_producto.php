<?php
  include ("conexion.php");
  $id_producto = $_GET["id_producto"];
  $producto = "SELECT * FROM producto WHERE IdProducto = '$id_producto'";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar inventario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar " style="background-color: rgb(194, 16, 16);" data-bs-theme="dark" >
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">
            <img src="imagenes/logo_empresa.png" alt="Logo" width="70" height="70" class="d-inline-block align-text-top">
            Editar Productos</a>
              <div class="icon ml-4">
                <h5>
                  <a class="fa fa-envelope me-2 text-white btn" style="background-color: rgb(230, 72, 72);" href="#" data-toggle="tooltip" title="Correo" aria-hidden="true"></a>
                  <a class="fa fa-bell me-2 text-white btn" style="background-color: rgb(230, 72, 72);" href="#" data-toggle="tooltip" title="Notificaciones" aria-hidden="true"></a>
                  <a class="fa fa-close me-2 text-white btn" style="background-color: rgb(230, 72, 72);" href="index.php" data-toggle="tooltip" title="Cerrar" aria-hidden="true"></a>
                </h5>
              </div>
        </div>
    </nav>
    <div class="col-md-10 p-5 pt-5">
      <h3><i class="fa fa-shopping-basket me-2" aria-hidden="true"></i> Listado Productos</h3>
      <br>
      <div class="card text-center col-sm-12 col-md-10 col-lg-10 col-xl-10">
      </div>
      <br>
      <div class="card text-center col-sm-12 col-md-10 col-lg-10 col-xl-10">
        <div class="card-header">
          <ul class="nav nav-pills card-header-pills">
            <li class="nav-item">
              <h4><i class="fa fa-people me-2" aria-hidden="true"></i>Producto a editar</h4>
            </li>
          </ul>
        </div>
        <form class="card-body" action="procesar_actualizar.php" method="post">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">Fecha Registro</th>
                <th scope="col">Nombre Producto</th>
                <th scope="col"></th>
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
                <td><input type="hidden" value="<?php echo $row["IdProducto"];?>" name="id_producto"></td>
                <td><input type="date" value="<?php echo $row["FechaRegistro"];?>" name="fecha_registro"></td>
                <td><input type="text" value="<?php echo $row["NomProducto"];?>" name="nombre_producto"></td>
                <td><input type="hidden" value="<?php echo $row["NomCategoria"];?>" name="categoria"></td>
                <td><input type="number" value="<?php echo $row["cantidad"];?>" name="cantidad"></td>
                <td><input type="date" value="<?php echo $row["FechaVencimiento"];?>" name="fecha_vencimiento"></td>
                <td><input type="number" value="<?php echo $row["Valorlibra"];?>" name="valor_libra"></td>
                <td><input type="number" value="<?php echo $row["Saldo"];?>" name="saldo_producto"></td>
              </tr>
              <?php
                } mysqli_free_result($resultado);
                ?>
            </tbody>
          </table>
          <input class="btn btn-danger" type="submit" value="Actualizar" style="background-color: rgb(230, 72, 72);">
        </form>
      </div>
</body>
</html>