<?php
session_start();
session_destroy();
header("Location: ../index.php")
?>

<!--<p> echo "Bienvenido" ." ". $_SESSION["user"];</p>--¡>