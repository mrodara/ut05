<?php 

    session_start(); //Iniciamos la sesión

    /*Nosotros vamos a declarar la sesión usuario y tenemos que comprobar 
    si ese campo ya ha sido asignado, haciendo uso de otra función de PHP isset. */

    $_SESSION['usuario'] = array(); // En este caso lo definimos como un array asociativo

    if(!isset($_SESSION['usuario']['session_id'])){
        
        $_SESSION['usuario']['session_id'] = session_id(); // Asignamos un ID de sesión
        $_SESSION['usuario']['nombre'] = $_POST['txtNombre']; // Rellenamos con la campos de nuestro form de registro
        $_SESSION['usuario']['apellidos'] = $_POST['txtApellidos'];
        $_SESSION['usuario']['email'] = $_POST['txtEmail'];
        $_SESSION['usuario']['telefono'] = $_POST['txtTelefono'];
        $_SESSION['usuario']['pais'] = $_POST['txtPais'];
        $_SESSION['usuario']['saldo'] = $_POST['txtSaldo'];
        $_SESSION['usuario']['moneda'] = $_POST['txtMoneda'];
        
    }
    
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
                            <h5 class="card-title">¡¡¡ENHORABUENA <?php echo $_SESSION['usuario']['nombre'] ?>, REGISTRO COMPLETADO CON ÉXITO!!!</h5>
                            <div class="row">
                                <div class="col-12 d-grid gap-2 col-6 mx-auto">
                                <a class="btn btn-info" href="welcome.php">Ir a mi perfil</a>
                                    <a class="btn btn-danger" href="logout.php">Cerrar Sesión</a>
                                </div>
                            </div>
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