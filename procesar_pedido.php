<?php

    include("conexion.php");
    
    $id_pedido = $_POST['id_pedido'];
    $id_cliente = $_POST['id_cliente'];
    $fecha_emision = $_POST['fecha_emision'];
    $estado = $_POST['estado'];
    $valor_total = $_POST['valor_total'];
    
    
    $actualizar_pedido = "UPDATE pedido SET Estado='$estado', ValorTotal='$valor_total' WHERE IdPedido='$id_pedido'";
    
    $resultado_pedido = mysqli_query($conexion, $actualizar_pedido);
    
    if ($resultado_pedido) {
        echo "<script>alert('Se ha actualizado el pedido con éxito'); window.location='/pedidos.php'</script>";
    } else {
        echo "<script>alert('No se pudo actualizar el pedido: " . mysqli_error($conexion) . "'); window.history.go(-1);</script>";
    }
?>