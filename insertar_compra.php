<?php
include("conexion.php");

$id_compra = $_POST['id_compra'];
$fecha_emision = $_POST['fecha_emision'];
$nombre_producto = $_POST['nombre_producto'];
$categoria = $_POST['categoria'];
$cantidad = $_POST['cantidad'];
$fecha_vencimiento = $_POST['fecha_vencimiento'];
$valor_libra = $_POST['valor_libra'];
$saldo = $_POST['saldo_producto'];


//Actualizar los datos

$insertar_producto = "INSERT INTO producto(IdProducto, FechaRegistro, NomProducto, NomCategoria, cantidad, FechaVencimiento, Valorlibra, Saldo) VALUES ('$id_compra', '$fecha_emision', '$nombre_producto', '$categoria', '$cantidad', '$fecha_vencimiento', '$valor_libra', '$saldo')";

$resultado = mysqli_query($conexion, $insertar_producto);

if ($resultado) {
    echo "<script>alert('Se ha registrado el producto con éxito'); window.location='/productos.php'</script>";
} else {
    echo "<script>alert('No se pudo registrar el producto: " . mysqli_error($conexion) . "'); window.history.go(-1);</script>";
}

?>