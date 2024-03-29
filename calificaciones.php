<?php
 include("conexion.php");
 $calificacion = "SELECT * FROM atencion_cliente"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Calificaciones</title>
</head>

<body>
  <nav class="navbar" style="background-color: rgb(194, 16, 16);" data-bs-theme="dark" >
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="imagenes/logo_empresa.png" alt="Logo" width="70" height="70" class="d-inline-block align-text-top">
        BIENVENIDO ADMINISTRADOR</a>
        <form class="d-flex col-sm-6 col-md-6 col-md-lg-6 col-xl-6" role="search">
          <input class="form-control me-2" type="search" placeholder="¿Qué buscas?" aria-label="Search">
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
        <h3><i class="fa fa-star me-2" aria-hidden="true"></i> Atención Cliente</h3>
        <hr>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                <th scope="col">Id PQRS</th>
                <th scope="col">FechaEmision</th>
                <th scope="col">Idventa</th>
                <th scope="col">IdCliente</th>
                <th scope="col">PQRS</th>
                <th scope="col">Calificacion</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $resultado = mysqli_query($conexion, $calificacion);
                while($row = mysqli_fetch_assoc($resultado)){
              ?>
              <tr>
                <td><?php echo $row["IdPQRS"];?></td>
                <td><?php echo $row["FechaEmision"];?></td>
                <td><?php echo $row["IdVenta"];?></td>
                <td><?php echo $row["IdCliente"];?></td>
                <td><?php echo $row["PQRS"];?></td>
                <td><?php echo $row["Calificacion"];?></td>
                
              </tr>
              <?php
                } mysqli_free_result($resultado);
                ?>
            </tbody>
        </table>
    </div>      
</body>
</html>