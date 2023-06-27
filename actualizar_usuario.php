<?php
    include ("conexion.php");
    $id_usuario = $_GET["id_usuario"];
    $usuario = "SELECT * FROM usuarios WHERE IdUsuario = '$id_usuario'";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="Css/tables.css">
    <title>Usuarios</title>
</head>
<body>
    <section class="main">
                <div class="main-top">
                    <i class="fas uil uil-bill"></i>
                    <h1>Listado Usuarios</h1>
                    <p><?php echo "Bienvenido" ." ". $_COOKIE['usuario'];?></p>
                </div>
                <section class="dashboard">
                    <div class="dashboard-list">
                        <h1>Usuario a editar</h1>
                        <form class="card-body" action="procesar_usuario.php" method="post">
                        <table class="table">
                            <thead>      
                                <tr>                              
                                    <th></th>
                                    <th>Rol</th>
                                    <th>Estado</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>

                            <?php
                                $resultado = mysqli_query($conexion, $usuario);
                                while($row = mysqli_fetch_assoc($resultado)){
                            ?>
                            <tr>
                                <td><input type="hidden" value="<?php echo $row["IdUsuario"];?>" name="id_usuario"></td>
                                <td><input type="number" value="<?php echo $row["Rol"];?>" name="rol"></td>
                                <td><input type="number" value="<?php echo $row["Estado"];?>" name="estado"></td>
                                <td><input type="hidden" value="<?php echo $row["Nombres"];?>" name="nombres"></td>
                                <td><input type="hidden" value="<?php echo $row["Apellidos"];?>" name="apellidos"></td>
                                <td><input type="hidden" value="<?php echo $row["FechaNacimiento"];?>" name="fecha_nacimiento"></td>
                                <td><input type="hidden" value="<?php echo $row["Direccion"];?>" name="direccion"></td>
                                <td><input type="hidden" value="<?php echo $row["Telefono"];?>" name="telefono"></td>
                                <td><input type="hidden" value="<?php echo $row["Email"];?>" name="email"></td>
                                <td><input type="hidden" value="<?php echo $row["Contrasena"];?>" name="contrasena"></td>
                            </tr>
                            <?php
                                } mysqli_free_result($resultado);
                            ?>
                            </tbody>
                        </table>
                        <input class="btn btn-danger" type="submit" value="Actualizar" style="background-color: rgb(230, 72, 72);">
                        </form>
                    </div>
                </section>
    </section>
</body>
</html>