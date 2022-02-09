<?php 

    //session_unset(); //Libera todas las variables de sesión

    /*
    destruye toda la información asociada con la sesión actual. 
    No destruye ninguna de las variables globales asociadas con la sesión, ni destruye la cookie de sesión. 
    Para volver a utilizar las variables de sesión se debe llamar a session_start().*/
    session_destroy();

    //Una vez cerrada la sesión redirigimos a la página de inicio de la misma
    header('Location: http://proyecto.site/ut05/sesion4/close_session.php');

?>