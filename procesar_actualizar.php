<?php
include("conexion.php");

$id_producto = $_POST['id_producto'];
$fecha_registro = $_POST['fecha_registro'];
$nombre_producto = $_POST['nombre_producto'];
$categoria = $_POST['categoria'];
$cantidad = $_POST['cantidad'];
$fecha_vencimiento = $_POST['fecha_vencimiento'];
$valor_libra = $_POST['valor_libra'];
$saldo = $_POST['saldo_producto'];


//Actualizar los datos

$actualizar = "UPDATE producto SET FechaRegistro='$fecha_registro' , NomProducto='$nombre_producto' , cantidad='$cantidad' , FechaVencimiento='$fecha_vencimiento' , Valorlibra='$valor_libra' , Saldo='$saldo' WHERE IdProducto='$id_producto'";

$resultado = mysqli_query($conexion, $actualizar);

if ($resultado) {
    echo "<script>alert('Se ha actualizado el producto con éxito'); window.location='/productos.php'</script>";
} else {
    echo "<script>alert('No se pudo actualizar el producto: " . mysqli_error($conexion) . "'); window.history.go(-1);</script>";
}
?>