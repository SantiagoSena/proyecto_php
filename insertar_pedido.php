<?php
include("conexion.php");

$id_pedido = $_POST['id_pedido'];
$id_cliente = $_POST['id_cliente'];
$fecha_emision = $_POST['fecha_emision'];
$estado = $_POST['estado'];
$valor_total = $_POST['valor_total'];


//Actualizar los datos

$insertar_pedido = "INSERT INTO pedido(IdPedido, IdUsuario, FechaEmision, Estado, ValorTotal) VALUES ('$id_pedido', '$id_cliente', '$fecha_emision', '$estado', '$valor_total')";

$resultado = mysqli_query($conexion, $insertar_pedido);

if ($resultado) {
    echo "<script>alert('Se ha registrado el pedido con éxito'); window.location='/pedidos.php'</script>";
} else {
    echo "<script>alert('No se pudo registrar el pedido: " . mysqli_error($conexion) . "'); window.history.go(-1);</script>";
}

?>