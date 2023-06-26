<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="Css/index.css">
  <title>Carnicos De Luxe </title>

</head>

<body>
 <header>
    <div class="logo">
      <a href="index.php"><img src="imagenes/logo_asago1.png" alt=""></a>
      <h2>Asago S.A.S</h2>
    </div>

    <div class="login">
    <p><?php echo "Bienvenido" ." ". $_COOKIE['usuario'];?></p>
      <div class="dropdown">

      <p></p>
  </header>
  <div class="container">
    <p><h1></h1></p>
    <br>
    <br>
  </div>

  
  <div class="container">
    <div class="row">
      <div class="col-12">
        <p><h1 class="text-center">Productos Carnicos de luxe.</h1></p>
        <br>
        <br>
      </div>

  <div class="col-3 g-3">    
    <div class="card" style="width: 17rem;">
      <div class="card-body">
        <img src="imagenes/jamon.webp" class="card-img-top" alt="ProductoCarne"  width="500" height="200" >
        <h5 class="card-title mt-4">Jamón</h5>
        <p class="card-text">Precio por libra $2.000</p>
        <p class="card-text"><i>Cod.5146</i></p>

        <div class="d-grid gap-2">
          <br>
          
        </div>
      </div>
    </div>
  </div>

  <div class="col-3 g-3">
    <div class="card" style="width: 17rem;">
      <div class="card-body">
        <img src="imagenes/Filetes de espaldilla de Ternera Angus 500 g.jpg" class="card-img-top" alt="ProductoCarne"  width="500" height="200">
        <h5 class="card-title mt-4">Filetes de Ternera</h5>
        <p class="card-text">Precio por libra $7.500</p>
        <p class="card-text"><i>Cod.7895</i></p>
        <div class="d-grid gap-2">
          <br>
          
        </div>
      </div>
    </div>
  </div>  
  <div class="col-3 g-3">
    <div class="card" style="width: 17rem;">
      <div class="card-body">
        <img src="imagenes/chorizo_extremeño.jpg" class="card-img-top" alt="ProductoCarne"  width="500" height="200">
        <h5 class="card-title mt-4">Chorizo Extremeño</h5>
        <p class="card-text">Vienen 6 por el precio de $13.000</p>
        <p class="card-text"><i>Cod.1784</i></p>
        <div class="d-grid gap-2">
          <br>
          
        </div>
      </div>
    </div>
  </div>



  </body>
</html>