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
        <a class="nav-link active text-white" href="categorias.php"><i class="fa fa-bookmark mx-2" aria-hidden="true"></i>Categorias</a>
        <hr class="bg-primary">
      </li>
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
                <th scope="col">N°</th>
                <th scope="col">Id_PQRS</th>
                <th scope="col">Nombre Cliente</th>
                <th scope="col">Id_Venta</th>
                <th scope="col">Id_Cliente</th>
                <th scope="col">PQRS</th>
                <th scope="col">Calificacion</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>74539</td>
                <td>Santiago León</td>
                <td>16295</td>
                <td>679406027</td>
                <td>Mejorar la calidad de producto</td>
                <td>
                  <i class="fa fa-star text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star-o text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star-o text-danger" aria-hidden="true"></i>
                </td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>51146</td>
                <td>Leidi Andrea Prieto Moreno</td>
                <td>82156</td>
                <td>36300750</td>
                <td>Buena asesoría</td>
                <td>
                  <i class="fa fa-star text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star-half-o text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star-o text-danger" aria-hidden="true"></i>
                </td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>17394</td>
                <td>Jonathan Reina</td>
                <td>16569</td>
                <td>3343397682</td>
                <td>Mejorar la calidad de la plataforma</td>
                <td>
                  <i class="fa fa-star text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star-o text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star-o text-danger" aria-hidden="true"></i>
                </td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
                </tr>
                <tr>
                <th scope="row">4</th>
                <td>36248</td>
                <td>Paula Fernanda Luna Muñoz</td>
                <td>60906</td>
                <td>71462483</td>
                <td>Mejorar la calidad del servicio</td>
                <td>
                  <i class="fa fa-star text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star-half-o text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star-o text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star-o text-danger" aria-hidden="true"></i>
                </td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
                </tr>
                <tr>
                <th scope="row">5</th>
                <td>15313</td>
                <td>Esteban Felipe Pérez Jaimes</td>
                <td>44159</td>
                <td>58256923</td>
                <td>Buena asesoría</td>
                <td>
                  <i class="fa fa-star text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star-half-o text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star-o text-danger" aria-hidden="true"></i>
                </td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
                </tr>
                <tr>
                <th scope="row">6</th>
                <td>15413</td>
                <td>Juan Giovanny Caro Galeano</td>
                <td>15298</td>
                <td>123230</td>
                <td>Pésimo servivio</td>
                <td>
                  <i class="fa fa-star text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star-half-o text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star-o text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star-o text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star-o text-danger" aria-hidden="true"></i>
                </td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
                </tr>
                <tr>
                <th scope="row">7</th>
                <td>87596</td>
                <td>Milton Oscar Rodríguez González</td>
                <td>15625</td>
                <td>31388353</td>
                <td>Mejorar la calidad de producto</td>
                <td>
                  <i class="fa fa-star text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star-half-o text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star-o text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star-o text-danger" aria-hidden="true"></i>
                </td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
                </tr>
                <tr>
                <th scope="row">8</th>
                <td>70636</td>
                <td>Sandra Luciana Carmona Sánchez</td>
                <td>61342</td>
                <td>9231375097</td>
                <td>Buen servicio</td>
                <td>
                  <i class="fa fa-star text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star text-danger" aria-hidden="true"></i>
                </td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
                </tr>
                <tr>
                <th scope="row">9</th>
                <td>58736</td>
                <td>Luz Daniela Vargas Salcedo</td>
                <td>29913</td>
                <td>12323</td>
                <td>Pésimo producto</td>
                <td>
                  <i class="fa fa-star text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star-0 text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star-o text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star-o text-danger" aria-hidden="true"></i>
                </td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
                </tr>
                <tr>
                <th scope="row">10</th>
                <td>39839</td>
                <td>Miguel Camilo Figueroa García</td>
                <td>44577</td>
                <td>8912468</td>
                <td>Buena asesoría</td>
                <td>
                  <i class="fa fa-star text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star-o text-danger" aria-hidden="true"></i>
                </td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
                </tr>
                <tr>
                <th scope="row">11</th>
                <td>98944</td>
                <td>Diana Daniela Gómez López</td>
                <td>32318</td>
                <td>3123325117</td>
                <td>Excelente producto</td>
                <td>
                  <i class="fa fa-star text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star text-danger" aria-hidden="true"></i>
                </td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
                </tr>
                <tr>
                <th scope="row">12</th>
                <td>14089</td>
                <td>Mriana Luisa Rosero Bravo</td>
                <td>57854</td>
                <td>3222637</td>
                <td>Falta de soporte en la plataforma</td>
                <td>
                  <i class="fa fa-star text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star-o text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star-o text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star-o text-danger" aria-hidden="true"></i>
                </td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
                </tr>
                <tr>
                <th scope="row">13</th>
                <td>28405</td>
                <td>Camilo Rodriguez</td>
                <td>13056</td>
                <td>3222637</td>
                <td>Buena asesoría</td>
                <td>
                  <i class="fa fa-star text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star text-danger" aria-hidden="true"></i>
                  <i class="fa fa-star-o text-danger" aria-hidden="true"></i>
                </td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
                </tr>
            </tbody>
        </table>
    </div>      
</body>
</html>