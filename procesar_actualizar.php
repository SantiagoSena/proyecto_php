<?php
include("conexion.php");

//ACTUALIZAR LOS DATOS PRODUCTO

$id_producto = $_POST['id_producto'];
$fecha_registro = $_POST['fecha_registro'];
$nombre_producto = $_POST['nombre_producto'];
$categoria = $_POST['categoria'];
$cantidad = $_POST['cantidad'];
$fecha_vencimiento = $_POST['fecha_vencimiento'];
$valor_libra = $_POST['valor_libra'];
$saldo = $_POST['saldo_producto'];

$actualizar_producto = "UPDATE producto SET FechaRegistro='$fecha_registro' , NomProducto='$nombre_producto' , cantidad='$cantidad' , FechaVencimiento='$fecha_vencimiento' , Valorlibra='$valor_libra' , Saldo='$saldo' WHERE IdProducto='$id_producto'";

$resultado_producto = mysqli_query($conexion, $actualizar_producto);

if ($resultado_producto) {
    echo "<script>alert('Se ha actualizado el producto con éxito'); window.location='/productos.php'</script>";
} else {
    echo "<script>alert('No se pudo actualizar el producto: " . mysqli_error($conexion) . "'); window.history.go(-1);</script>";
}

//ACTUALIZAR LOS DATOS PEDIDO


?>