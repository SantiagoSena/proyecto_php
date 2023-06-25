<?php
    include("conexion.php");

    $id_domicilio = $_POST['id_domicilio'];
    $fecha_emision = $_POST['fecha_emision'];
    $hora_entrega = $_POST['hora_entrega'];
    $desc_domicilio = $_POST['desc_domicilio'];


    //Actualizar los datos

    $actualizar_domicilio = "UPDATE domicilio SET HoraEntrega='$hora_entrega', DescDomicilio='$desc_domicilio' WHERE IdDomicilio='$id_domicilio'";

    $resultado_domicilio = mysqli_query($conexion, $actualizar_domicilio);

    if ($resultado_domicilio) {
        echo "<script>alert('Se ha actualizado el domicilio con éxito'); window.location='/domicilios_db.php'</script>";
    } else {
        echo "<script>alert('No se pudo actualizar el domicilio: " . mysqli_error($conexion) . "'); window.history.go(-1);</script>";
    }

?>