<?php 

    //Perfil de usuario simulado tras proceso de login
    $usuario = array(
        "nombre"       => "Manuel",
        "apellidos"    => "Apellido1 Apellido2",
        "email"        => "manuel@gmail.com",
        "telefono"     => "+34666555444",
        "pais"         => "ES",
        "saldo"        => 1200.83,
        "moneda"       => "Euro"        
    );

    session_start();

    //Perfil de usuario que se acaba de registrar
    if(isset($_SESSION['usuario']['session_id'])){

        $usuario['nombre']      = $_SESSION['usuario']['nombre'];
        $usuario['apellidos']   = $_SESSION['usuario']['apellidos'];
        $usuario['email']       = $_SESSION['usuario']['email'];
        $usuario['telefono']    = $_SESSION['usuario']['telefono'];
        $usuario['pais']        = $_SESSION['usuario']['pais'];
        $usuario['saldo']       = $_SESSION['usuario']['saldo'];
        $usuario['moneda']      = $_SESSION['usuario']['moneda'];
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
                            <h5 class="card-title">PERFIL DE USUARIO</h5>
                                <div>
                                    <?php 
                                        //Controlamos dos condiciones con un expresión or
                                        // 1. Que el usuario ha hecho login con el mail manuel@gmail.com
                                        // 2. El usuario tiene una sesión iniciada y los datos provienen de newaccount.php
                                        if((isset($_POST['txtEmail']) && $_POST['txtEmail'] == 'manuel@gmail.com') || isset($_SESSION['usuario']['session_id'])){
                                            //Creamos el esquema de la tabla donde mostraremos los datos
                                            echo "<table class='table table-striped  table-hover'><thead><td>Campo</td><td>valor</td></thead>";
                                            
                                            //Recorremos el array
                                            foreach($usuario as $clave => $valor){
                                                //Damos formato al número flotante con number_format
                                                if($clave == "saldo"){
                                                    echo "<tr><td>" . ucfirst($clave). "</td><td>" .number_format($valor,2,",",".") . "</td></tr>";
                                                }else{

                                                    echo "<tr><td>" . ucfirst($clave). "</td><td>$valor</td></tr>";
                                                }
                                            }
                                            //Cerramos la etiqueta de la tabla
                                            echo "</table>";
                                        }else{
                                            echo "<p class='card-text'>El usuario especificado no existe, pulse en este 
                                                <a class='btn btn-outline-warning' href='register.php'>enlace</a> para registrarse</p>";
                                        }
                                    ?>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <?php 
                                            /*
                                            Solo mostraremos si el usuario viene del registro ya que el login es simulado
                                             y la sesión la iniciamos únicamente cuando registramos el usuario
                                             */
                                            if(isset($_SESSION['usuario']['session_id'])){

                                                echo "<a class='btn btn-danger' href='logout.php'>Cerrar Sesión</a>";
                                            }
                                        ?>
                                        
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