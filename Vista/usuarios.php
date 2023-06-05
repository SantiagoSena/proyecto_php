<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
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
        <a class="nav-link text-swhite" href="ventas.php"><i class="fa fa-book mx-2" aria-hidden="true"></i>Listado Ventas</a>
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
    <h3><i class="fa fa-book me-2" aria-hidden="true"></i>Listado Usuarios</h3>
    <hr>     
    <br>
    <div class="card col-sm-12 col-md-10 col-lg-10 col-xl-10">
      <div class="card-header">
        <ul class="nav nav-pills card-header-pills">
          <li class="nav-item">
            <h4><i class="fa fa-people me-2" aria-hidden="true"></i> Listado Clientes</h4>
          </li>
        </ul>
      </div>
      <div class="card-body">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th scope="col">N°</th>
              <th scope="col">Nombre Usuario</th>
              <th scope="col">Id</th>
              <th scope="col">Telefono</th>
              <th scope="col">Direccion</th>   
            </tr>
          </thead>
    
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Pedro Sanchez</td>
              <td>106475</td>
              <td>3296506723</td>
              <td>Calle 57sur # 12-23 </td>
              <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
            </tr>
    
            <tr>
              <th scope="row">2</th>
              <td>Camilo Rodriguez</td>
              <td>130564</td>
              <td>3174026556</td>
              <td>Carrera 78 # 18-45</td>
              <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
            </tr>
    
            <tr>
              <th scope="row">3</th>
              <td>Santiago Leon</td>
              <td>162950</td>
              <td>3058256923</td>
              <td>Carrera 45 # 34-12</td>
              <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
            </tr>
    
            <tr>
              <th scope="row">4</th>          
              <td>Jonathan Reina</td>
              <td>165694</td>
              <td>3137509712</td>
              <td>Calle 63 # 76-26</td>
              <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
            </tr>
            
            <tr>
              <th scope="row">5</th>
              <td>Paula Quiñones</td>
              <td>104137</td>
              <td>3283143068</td>
              <td>Calle 97 # 24-17</td>
              <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <hr>

    <div class="card text-center col-sm-12 col-md-10 col-lg-10 col-xl-10 col-xl-10">
      <div class="card-header">
        <ul class="nav nav-pills card-header-pills">
          <li class="nav-item">
            <h4><i class="fa fa-people me-2" aria-hidden="true"></i> Listado Vendedores</h4>
          </li>
        </ul>
      </div>
      <div class="card-body">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th scope="col">N°</th>
              <th scope="col">Nombre Usuario</th>
              <th scope="col">Id</th>
              <th scope="col">Telefono</th>
              
            </tr>
          </thead>
    
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Monica Ramirez</td>
              <td>115492</td>
              <td>3753496542</td>
              <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
            </tr>
    
            <tr>
              <th scope="row">2</th>
              <td>Alejandra Maldonado</td>
              <td>183456</td>
              <td>3193507225</td>
              <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
            </tr>
    
            <tr>
              <th scope="row">3</th>
              <td>Marisol Velazques</td>
              <td>102436</td>
              <td>3082106483</td>
              <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
            </tr>

            <tr>
              <th scope="row">4</th>          
              <td>Andrea Mendoza</td>
              <td>102545</td>
              <td>3710475693</td>
              <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
            </tr>
            
            <tr>
              <th scope="row">5</th>
              <td>Fernando Gonzales</td>
              <td>198574</td>
              <td>3284650275</td>
              <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
            </tr>
          </tbody>
      </table>  
      </div>
    </div> 
    <hr>

    <div class="card text-center col-sm-12 col-md-10 col-lg-10 col-xl-10 col-xl-10">
      <div class="card-header">
        <ul class="nav nav-pills card-header-pills">
          <li class="nav-item">
            <h4><i class="fa fa-people me-2" aria-hidden="true"></i> Listado Domiciliarios</h4>
          </li>
        </ul>
      </div>
      <div class="card-body">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
            <th scope="col">N°</th>
            <th scope="col">Nombre Domiciliario</th>
            <th scope="col">Id Domiciliario</th>
            <th scope="col">Telefono</th>
            <th scope="col">Correo</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Raul Rodriguez</td>
              <td>534268</td>
              <td>3017895462</td>
              <td>raul@gmail.com</td>
              <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
            </tr>

            <tr>
              <th scope="row">2</th>
              <td>Julia	Moreno</td>
              <td>397489</td>
              <td>3002225460</td>
              <td>Julia@yahoo.es</td>
              <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
            </tr>

            <tr>
              <th scope="row">3</th>
              <td>Gabo Garcia</td>
              <td>482985</td>
              <td>3195064123</td>
              <td>gabo@outlook.com</td>
              <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
            </tr>           
          </tbody>
        </table>
      </div>
    </div>
  </div>

</body>
</html>