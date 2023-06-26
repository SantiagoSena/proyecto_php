<?php
include("conexion.php");

$id_venta = $_POST['id_venta'];
$fecha_emision = $_POST['fecha_emision'];
$id_pedido = $_POST['id_pedido'];
$id_cliente = $_POST['id_cliente'];
$id_producto = $_POST['id_producto'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$valor_producto = $_POST['valor_producto'];
$valor_subtotal = $_POST['valor_subtotal'];
$valor_total = $_POST['valor_total'];



//Actualizar los datos

$insertar_venta= "INSERT INTO venta(IdVenta, FechaEmision, IdPedido, IdCliente, IdProducto, Producto, Cantidad, ValorProducto, SubTotal, ValorTotal) VALUES ('$id_venta', '$fecha_emision', '$id_pedido', '$id_cliente', '$id_producto', '$producto', '$cantidad', '$valor_producto', '$valor_subtotal', '$valor_total')";

$resultado = mysqli_query($conexion, $insertar_venta);

if ($resultado) {
    echo "<script>alert('Se ha registrado la venta con éxito'); window.location='/ventas.php'</script>";
} else {
    echo "<script>alert('No se pudo registrar la venta: " . mysqli_error($conexion) . "'); window.history.go(-1);</script>";
}

?>