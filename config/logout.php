<?php
session_start();
session_destroy();
setcookie('usuario',"",time()-1);
header("Location: ../index.html");
?>

<!--<p> echo "Bienvenido" ." ". $_SESSION["user"];</p>--¡>