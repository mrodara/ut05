<?php 
    session_start();
 
    //Comprobamos que no esté iniciada la sesión del usuario para que no pueda acceder al formulario de registro
    //si ya está iniciada redirige al perfil del usuario.
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
                <div class="col-6">
                    <div class="card text-center bg-light bg-gradient border border-dark">
                        <div class="card-body">
                            <h5 class="card-title">REGISTRO DE USUARIO</h5>
                                                             
                                <form action="newaccount.php" method="post">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="text" id="txtNombre" name="txtNombre" placeholder="Nombre del usuario" required>
                                        <label for="txtNombre">Nombre </label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="text" id="txtApellidos" name="txtApellidos" placeholder="Apellidos del usuario" required>
                                        <label for="txtApellidos">Apellidos </label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="email" id="txtEmail" name="txtEmail" placeholder="nombre@dominio.extension" required>
                                        <label for="txtEmail">Dirección de Email</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="text" id="txtTelefono" name="txtTelefono" placeholder="Telefono del usuario" required>
                                        <label for="txtTelefono">Teléfono </label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="password" id="txtPassword" name="txtPassword" placeholder="Password" required>
                                        <label for="txtPassword">Password</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="text" id="txtPais" name="txtPais" placeholder="Pais del usuario" required>
                                        <label for="txtPais">Pais </label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="number" step="0.01" id="txtSaldo" name="txtSaldo" placeholder="Saldo del usuario" required>
                                        <label for="txtSaldo">Saldo </label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="text" id="txtMoneda" name="txtMoneda" placeholder="Moneda del usuario" required>
                                        <label for="txtMoneda">Moneda </label>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 d-grid gap-2 col-6 mx-auto">
                                            <button class="btn btn-primary" type="submit">Registrar</button>
                                            <a class="btn btn-danger" href="login.php">Login</a>
                                        </div>
                                    </div>
                                </form>
                        </div><!-- fin de card-body-->
                    </div><!-- fin de card-->
                </div><!-- fin de col-->
            </div><!-- fin de row-->
        </div><!-- fin de container-->
    </div>
</main>
        
    <script src="http://proyecto.site/ut05/js/bootstrap.js"></script>
</body>
</html>