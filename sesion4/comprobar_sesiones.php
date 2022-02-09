<?php 

    session_start();

    foreach($_SESSION['persona'] as $clave => $valor){

        echo $clave . ": " . $valor . "</br>";
    }

?>

<a href="http://proyecto.site/ut05/sesion4/logout_sesiones.php">Cerrar sesión</a>