<?php
// Conexión a la base de datos
include ("conexion.php");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sasg";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener el nombre filtrado del formulario
$nombre = $_POST['nombre'];

// Consulta SQL para filtrar los datos
$sql = "SELECT * FROM usuarios WHERE Nombre LIKE '%$nombre%'";
$resultado = $conn->query($sql);

// Mostrar los datos filtrados en una tabla
if ($resultado->num_rows>0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Apellido</th></tr>";
    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr><td>" . $fila['id'] . "</td><td>" . $fila['nombre'] . "</td><td>" . $fila['apellido'] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron resultados.";
}

// Cerrar conexión a la base de datos
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="filtro.php">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">
        <input type="submit" value="Filtrar">
    </form>
</body>
</html>