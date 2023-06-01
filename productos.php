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
          <a class="navbar-brand" href="index.html">
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
                  <a class="fa fa-close me-2 text-white btn" style="background-color: rgb(230, 72, 72);" href="index.html" data-toggle="tooltip" title="Cerrar" aria-hidden="true"></a>
                </h5>
              </div>
        </div>
    </nav>
    
    <div class="row no-gutters ">
      <div class="col-md-2 bg-danger mt-0 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
          <li class="nav-item">
            <a class="nav-link active text-white" href="categorias.html"><i class="fa fa-bookmark mx-2" aria-hidden="true"></i>Categorías</a>
            <hr class="bg-primary">
          </li>
          <li class="nav-item">
              <a class="nav-link active text-white" href="productos.html"><i class="fa fa-shopping-basket mx-2" aria-hidden="true"></i>Productos</a>
              <hr class="bg-primary">
          </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="usuarios.html"><i class="fa fa-book mx-2" aria-hidden="true"></i>Listado Usuarios</a>
          <hr class="bg-primary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="ventas.html"><i class="fa fa-book mx-2" aria-hidden="true"></i>Listado Ventas</a>
          <hr class="bg-primary"> 
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="pedidos.html"><i class="fa fa-cart-plus mx-2" aria-hidden="true"></i>Listado Pedidos</a>
          <hr class="bg-primary"> 
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="domicilios_db.html"><i class="fa fa-truck mx-2" aria-hidden="true"></i>Listado Domicilios</a>
          <hr class="bg-primary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="proveedores.html"><i class="fa fa-user fa-lg mx-2" aria-hidden="true"></i>Proveedores</a>
          <hr class="bg-primary"> 
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="calificaciones.html"><i class="fa fa-star mx-2" aria-hidden="true"></i>Atención Cliente</a>
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
      <br>
      <div class="card text-center col-sm-12 col-md-10 col-lg-10 col-xl-10">
        <div class="card-header">
          <ul class="nav nav-pills card-header-pills">
            <li class="nav-item">
              <h4><i class="fa fa-people me-2" aria-hidden="true"></i>Carne</h4>
            </li>
          </ul>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5 " id="exampleModalLabel">Nuevo Producto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form class="was-validated row g-3 mx-5" action="#">
              <div class="modal-body">
                <div class="col-12" style="text-align:left">
                  <label class="form-label">IdProducto</label>
                  <input class="form-control" type="text" required>
              </div>
              <br>
              <div class="col-12" style="text-align:left">
                <label class="form-label" >Nombre</label>
                <input class="form-control" type="text" required>
              </div>
              <br>
              <div class="col-12" style="text-align:left">
                <label class="form-label">FechaVencimiento</label>
                <input class="form-control" type="date" required>
              </div>
              <br>
              <div class="col-12" style="text-align:left">
                <label class="form-label">Categoria</label>
                <input class="form-control" type="text" required>
              </div>
              <br>
              <div class="col-12" style="text-align:left">
                <label class="form-label">ValorPorLibra</label>
                <input class="form-control" type="text" required>
              </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" style="background-color: rgb(230, 72, 72);">Cerrar</button>
                <button type="submit" class="btn btn-danger" style="background-color: rgb(230, 72, 72);">Agregar</button>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">N°</th>
                <th scope="col">IdProducto</th>
                <th scope="col">Nombre</th>
                <th scope="col">FechVencimiento</th>
                <th scope="col">Categoría</th>
                <th scope="col">ValorPorLibra</th>
              </tr>
            </thead>
      
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>5146</td>
                <td>Jamón</td>
                <td>07/07/2023</td>
                <td>Carnicos </td>
                <td>$5.0000</td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded btn " data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
              </tr>
      
              <tr>
                <th scope="row">2</th>
                <td>7895</td>
                <td>Filete de ternera</td>
                <td>08/07/2023</td>
                <td>Carncicos</td>
                <td>$10.000</td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded btn" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
              </tr>
      
              <tr>
                <th scope="row">3</th>
                <td>3648</td>
                <td>Lomo de ternera</td>
                <td>09/07/2023</td>
                <td>Carncicos</td>
                <td>$12.000</td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded btn" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
              </tr>
      
              <tr>
                <th scope="row">4</th>          
                <td>4357</td>
                <td>Chuleta de ternera</td>
                <td>10/07/2023</td>
                <td>Carnicos</td>
                <td>$7.000</td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded btn" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
              </tr>
              
              <tr>
                <th scope="row">5</th>
                <td>7893</td>
                <td>Pecho de res</td>
                <td>11/07/2023</td>
                <td>Carnicos</td>
                <td>$10.000</td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded btn" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>1513</td>
                <td>Morrillo</td>
                <td>12/07/2023</td>
                <td>Carnicos</td>
                <td>$14.000</td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded btn" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
              </tr>
              <tr>
                <th scope="row">7</th>
                <td>8423</td>
                <td>Falda</td>
                <td>13/07/2023</td>
                <td>Carnicos</td>
                <td>$10.000</td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded btn" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
              </tr>
              <tr>
                <th scope="row">8</th>
                <td>2256</td>
                <td>Costillar de res</td>
                <td>14/07/2023</td>
                <td>Carnicos</td>
                <td>$7.000</td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded btn" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
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
                <th scope="col">N°</th>
                <th scope="col">IdProducto</th>
                <th scope="col">Nombre</th>
                <th scope="col">FechVencimiento</th>
                <th scope="col">Categoría</th>
                <th scope="col">ValorPorLibra</th>
                
              </tr>
            </thead>
      
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>8796</td>
                <td>Muslos de pollo</td>
                <td>01/05/2023</td>
                <td>Pollo</td>
                <td>$5.000</td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded btn" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
              </tr>
      
              <tr>
                <th scope="row">2</th>
                <td>5983</td>
                <td>Alas</td>
                <td>02/05/2023</td>
                <td>Pollo</td>
                <td>$7.000</td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded btn" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
              </tr>
      
              <tr>
                <th scope="row">3</th>
                <td>7036</td>
                <td>Pechuga</td>
                <td>03/05/2023</td>
                <td>Pollo</td>
                <td>$10.000</td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded btn" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
              </tr>
      
              <tr>
                <th scope="row">4</th>          
                <td>8426</td>
                <td>Patas de pollo</td>
                <td>04/05/2023</td>
                <td>Pollo</td>
                <td>$3.000</td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded btn" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
              </tr>
              
              <tr>
                <th scope="row">5</th>
                <td>7586</td>
                <td>Espinazo</td>
                <td>05/05/2023</td>
                <td>Pollo</td>
                <td>$10.000</td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded btn" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
              </tr>
              
              <tr>
                <th scope="row">6</th>
                <td>5836</td>
                <td>Rabadilla</td>
                <td>06/05/2023</td>
                <td>Pollo</td>
                <td>$12.000</td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded btn" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
              </tr>
              
              <tr>
                <th scope="row">7</th>
                <td>6983</td>
                <td>Pescuezo</td>
                <td>07/05/2023</td>
                <td>Pollo</td>
                <td>$5.000</td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded btn" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
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
                <th scope="col">N°</th>
                <th scope="col">IdProducto</th>
                <th scope="col">Nombre</th>
                <th scope="col">FechVencimiento</th>
                <th scope="col">Categoría</th>
                <th scope="col">ValorPorLibra</th>
                
                
              </tr>
            </thead>
      
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>3939</td>
                <td>Chuleta de lomo </td>
                <td>08/06/2023</td>
                <td>Cerdo</td>
                <td>$11.000</td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded btn" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
              </tr>
      
              <tr>
                <th scope="row">2</th>
                <td>9949</td>
                <td>Cinta de lomo </td>
                <td>09/06/2023</td>
                <td>Cerdo</td>
                <td>$9.000</td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded btn" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
              </tr>
      
              <tr>
                <th scope="row">3</th>
                <td>9844</td>
                <td>Manitas de cerdo</td>
                <td>10/06/2023</td>
                <td>Cerdo</td>
                <td>$7.000</td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded btn" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
              </tr>
      
              <tr>
                <th scope="row">4</th>          
                <td>9898</td>
                <td>Costillas Carnosas</td>
                <td>11/06/2023</td>
                <td>Cerdo</td>
                <td>$13.000</td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded btn" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
              </tr>
              
              <tr>
                <th scope="row">5</th>
                <td>3569</td>
                <td>Paleta de cerdo</td>
                <td>11/06/2023</td>
                <td>Cerdo</td>
                <td>$11.000</td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded btn" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
              </tr>
                   
              <tr>
                <th scope="row">6</th>
                <td>1489</td>
                <td>Aguja de cerdo</td>
                <td>12/06/2023</td>
                <td>Cerdo</td>
                <td>$12.000</td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded btn" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
              </tr>
                   
              <tr>
                <th scope="row">7</th>
                <td>7598</td>
                <td>Papada de cerdo</td>
                <td>13/06/2023</td>
                <td>Cerdo</td>
                <td>$5.000</td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded btn" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
              </tr>
                   
              <tr>
                <th scope="row">8</th>
                <td>2569</td>
                <td>Panceta de cerdo</td>
                <td>14/06/2023</td>
                <td>Cerdo</td>
                <td>$8.000</td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded btn" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
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
                <th scope="col">N°</th>
                <th scope="col">IdProducto</th>
                <th scope="col">Nombre</th>
                <th scope="col">FechVencimiento</th>
                <th scope="col">Categoría</th>
                <th scope="col">ValorPorLibra</th>
                
                
              </tr>
            </thead>
      
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>6723</td>
                <td>Chorizo de leon </td>
                <td>20/08/2023</td>
                <td>Chorizo</td>
                <td>$10.000</td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded btn" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
              </tr>
      
              <tr>
                <th scope="row">2</th>
                <td>1784</td>
                <td>Chorizo Gallego</td>
                <td>21/08/2023</td>
                <td>Chorizo</td>
                <td>$11.000</td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded btn" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
              </tr>
      
              <tr>
                <th scope="row">3</th>
                <td>3658</td>
                <td>Chorizo Extremeño</td>
                <td>22/08/2023</td>
                <td>Chorizo</td>
                <td>$13.000</td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded btn" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
              </tr>
      
              <tr>
                <th scope="row">4</th>          
                <td>5789</td>
                <td>Chorizo de navarro </td>
                <td>23/08/2023</td>
                <td>Chorizo</td>
                <td>$15.000</td>
                <td><i class="fa fa-pencil-square-o bg-success p-2 text-white rounded btn" data-toggle="tooltip" title="Editar" aria-hidden="true"></i></td>
              </tr>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <hr>
</body>
</html>