<?php 

    session_start();
 
    //Comprobamos que no esté iniciada la sesión del usuario para que no pueda acceder al formulario de registro
    if(isset($_SESSION['usuario']['session_id'])){
        header('Location:http://proyecto.site/ut05/sesion5/welcome.php');
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
            <div class="col-4">
                <div class="card text-center bg-light bg-gradient border border-dark">
                    <div class="card-body">
                        <h5 class="card-title">LOGIN</h5>

                        <form action="welcome.php" method="post">
                            <div class="form-floating mb-3">
                                <input class="form-control" type="email" id="txtEmail" name="txtEmail" placeholder="nombre@dominio.extension" required>
                                <label for="txtEmail">Dirección de Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="password" id="txtPassword" name="txtPassword" placeholder="Password" required>
                                <label for="txtPassword">Password</label>
                            </div>
                            
                            <div class="row">
                                <div class="col-12 d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-success" type="submit">Acceder</button>
                                    <a class="btn btn-info" href="register.php">Registro</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php 
    // Footer
    require_once("../../assets/footer.php");
?>