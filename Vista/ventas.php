<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ventas</title>
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
      <h3><i class="fa fa-book me-2" aria-hidden="true"></i> Listado Ventas</h3>
      <hr>
      <div class="d-grid gab-3 d-md-flex mt-2 mx-3 justify-content-md-start">
        <button type="button" class="btn btn-danger text-white " data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: rgb(230, 72, 72) ; ">
          Agregar Venta
        </button>
      </div>
      <br>
      <div class="card text-center col-sm-12 col-md-12 col-lg-10 col-xl-10">
        <div class="card-header">
          <ul class="nav nav-pills card-header-pills">
            <li class="nav-item">
              <h4><i class="fa fa-people me-2" aria-hidden="true"></i>Ventas</h4>
            </li>
          </ul>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5 " id="exampleModalLabel">Nueva Venta</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form class="was-validated row g-3 mx-5">
              <div class="modal-body">
                <h5 class="card-tittle"> Ingresa los datos para</h5>
                <p class="card-text">Agregar una nueva Venta</p>
                <hr>
                <div class="col-12" style="text-align:left">
                  <label class="form-label">Id Venta</label>
                  <input class="form-control" type="text" required>
                </div>
                <br>
                <div class="col-12" style="text-align:left">
                  <label class="form-label">Fecha Emisión</label>
                  <input class="form-control" type="date" required>
                </div>
                <br>
                <div class="col-12" style="text-align:left">
                  <label class="form-label">Id Pedido</label>
                  <input class="form-control" type="text" required>
                </div>
                <br>
                <div class="col-12" style="text-align:left">
                  <label class="form-label">Id Cliente</label>
                  <input class="form-control" type="text" required>
                </div>
                <br>
                <div class="col-12" style="text-align:left">
                  <label class="form-label">Id Producto</label>
                  <input class="form-control" type="text" required>
                </div>
                <br>
                <div class="col-12" style="text-align:left">
                  <label class="form-label">Productos</label>
                  <input class="form-control" type="text" required>
                </div>
                <br>
                <div class="col-12" style="text-align:left">
                  <label class="form-label">Cantidad</label>
                  <input class="form-control" type="text" required>
                </div>
                <br>
                <div class="col-12" style="text-align:left">
                  <label class="form-label">Valor Producto</label>
                  <input class="form-control" type="text" required>
                </div>
                <br>
                <div class="col-12" style="text-align:left">
                  <label class="form-label">Valor SubTotal</label>
                  <input class="form-control" type="text" required>
                </div>
                <br>
                <div class="col-12" style="text-align:left">
                  <label class="form-label">Valor Total</label>
                  <input class="form-control" type="text" required>
                </div>
                </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-danger" style="background-color: rgb(230, 72, 72);">Agregar</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" style="background-color: rgb(194, 16, 16);">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body">        
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">N°</th>
                <th scope="col">Id Venta</th>
                <th scope="col">Fecha Emisión</th>
                <th scope="col">Id Pedido</th>
                <th scope="col">Id Cliente</th>
                <th scope="col">Id Producto</th>
                <th scope="col">Productos</th>
                <th scope="col">Valor Total</th>
                
              </tr>
            </thead>

            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>83741</td>
                <td>01/02/2023</td>
                <td>17394</td>
                <td>106475</td>    
                <td>7893</td>
                <td><button type="button" class="btn btn-primary">Detalles</button></td>
                <td>55.000</td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded btn" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
              </tr>

              <tr>
                <th scope="row">2</th>
                <td>17593</td>
                <td>16/02/2023</td>
                <td>74539</td>
                <td>162950</td>
                <td>7036</td>
                <td><button type="button" class="btn btn-primary">Detalles</button></td>
                <td>42.000</td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded btn" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
              </tr>

              <tr>
                <th scope="row">3</th>
                <td>29504</td>
                <td>20/03/2023</td>
                <td>28405</td>
                <td>104137</td>
                <td>7586</td>
                <td><button type="button" class="btn btn-primary">Detalles</button></td>
                <td>44.000</td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded btn" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
              </tr>

              <tr>
                <th scope="row">4</th>
                <td>50273</td>
                <td>24/03/2023</td>
                <td>10365</td>
                <td>165694</td>
                <td>9844</td>
                <td><button type="button" class="btn btn-primary">Detalles</button></td>
                <td>60.000</td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded btn" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
              </tr>

              <tr>
                <th scope="row">5</th>
                <td>72017</td>
                <td>16/02/2023</td>
                <td>83649</td>
                <td>130564</td>
                <td>9898</td>
                <td><button type="button" class="btn btn-primary">Detalles</button></td>
                <td>50.000</td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded btn" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
              </tr>   
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>      
  
</body>
</html>