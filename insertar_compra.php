<?php
include("conexion.php");

$id_compra = $_POST['id_compra'];
$fecha_emision = $_POST['fecha_emision'];
$id_proveedor = $_POST['id_proveedor'];
$id_producto = $_POST['id_producto'];
$descripcion = $_POST['descripcion'];
$valor_producto = $_POST['valor_producto'];
$subtotal = $_POST['subtotal'];
$valor_total = $_POST['valor_total'];


//Actualizar los datos

$insertar_compra = "INSERT INTO compra(IdCompra, FechaEmision, IdProveedor, IdProducto, Descripcion, ValorProducto, SubTotal, ValorTotal) VALUES ('$id_compra', '$fecha_emision', '$id_proveedor', '$id_producto', '$descripcion', '$valor_producto', '$subtotal', '$valor_total')";

$resultado = mysqli_query($conexion, $insertar_compra);

if ($resultado) {
    echo "<script>alert('Se ha registrado la compra con éxito'); window.location='/compras.php'</script>";
} else {
    echo "<script>alert('No se pudo registrar la compra: " . mysqli_error($conexion) . "'); window.history.go(-1);</script>";
}

?>