<?php 

    session_start();
    
    //session_unset(); //Libera todas las variables de sesión

    //Destruimos las variables de sesión
    $_SESSION = array();

    /*
    destruye toda la información asociada con la sesión actual. 
    No destruye ninguna de las variables globales asociadas con la sesión, ni destruye la cookie de sesión. 
    Para volver a utilizar las variables de sesión se debe llamar a session_start().*/
    session_destroy();

    //Una vez cerrada la sesión redirigimos a la página de inicio de la misma
    //header('Location: http://proyecto.site/ut05/sesion5/login.php');

?>


<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Proyecto de pruebas en PHP</title>
<link rel="stylesheet" href="http://proyecto.site/ut05/css/bootstrap.css">
</head>
<body>
<main>
<div class="container py-4">
    <header class="pb-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        
        <span class="fs-4">CFGS ASIR-SP Implantación de Aplicaciones Web - UT05 Lenguajes de Script del Lado del Servidor</span><br>
        
    </a>
    </header>

    <!-- Content-->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card text-center bg-light bg-gradient border border-dark">
                    <div class="card-body">
                        <h5 class="card-title">LA SESIÓN SE HA CERRADO CON ÉXITO</h5>
                            <a class="btn btn-info" href="login.php">Iniciar Sesión</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
<script src="http://proyecto.site/ut05/js/bootstrap.js"></script>
</body>
</html>