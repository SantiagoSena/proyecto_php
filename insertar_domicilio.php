<?php
include("conexion.php");

$id_domicilio = $_POST['id_domicilio'];
$fecha_emision = $_POST['fecha_emision'];
$id_cliente = $_POST['id_cliente'];
$hora_entrega = $_POST['hora_entrega'];
$id_venta = $_POST['id_venta'];
$desc_domicilio = $_POST['desc_domicilio'];


//Actualizar los datos

$insertar_domicilio = "INSERT INTO domicilio(IdDomicilio, FechaEmision, IdUsuario, HoraEntrega, IdVenta, DescDomicilio) VALUES ('$id_domicilio', '$fecha_emision', '$id_cliente', '$hora_entrega', '$id_venta', '$desc_domicilio')";

$resultado = mysqli_query($conexion, $insertar_domicilio);

if ($resultado) {
    echo "<script>alert('Se ha registrado el domicilio con éxito'); window.location='/domicilios_db.php'</script>";
} else {
    echo "<script>alert('No se pudo registrar el domicilio: " . mysqli_error($conexion) . "'); window.history.go(-1);</script>";
}

?>