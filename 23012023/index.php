<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables locales, globles y superglobales</title>
</head>
<body>
    <?php 
    
        //Definición de una constante
        //define("IMAGES_LOCAL_PATH", 'http://www.proyecto.site/ut05/23012023/images/');
        define('RUTA_IMAGEN', 'http://www.proyecto.site/ut05/23012023/images/');
        //Definición de una variable global
        $img_user = "avatar1.png";
    ?>

    <hr>

    <h2>PATH LOCAL DEL PROYECTO</h2>
    <?php 
    
        //echo IMAGES_LOCAL_PATH;
    ?>

    <hr>

    <h2>USO DE UNA VARIABLE GLOBAL JUNTO CON UNA CONSTANTE</h2>
    <h3>Ruta de la imagen del perfil de usuario</h3>
    <?php 

        echo var_dump($img_user);

        echo("<h5>" .RUTA_IMAGEN.$img_user. "</h5>")

        
    ?>

    <br><br>

    <p>Haciendo uso del código embebido para cargar la imagen</p>
    <img src="<?php echo RUTA_IMAGEN.$img_user ?>" height="200" width="200">

    <hr>

    <h3>Uso de variables locales</h3>
    <?php 

        $nombre = 'Manu'; //Esto es una variable global también

        //Definición de la función
        function getInfo($nombre){
            $edad = 43; //Esto es una variable local, no se puede usar fuera de la función

            echo("Hola {$nombre}, tienes {$edad} años");
            
            var_dump($edad);
        }
    
        //Llamada a la función
        getInfo($nombre);

        echo "<br>" . $img_user;
    ?>

    <br><br>

    <h4>Vamos a tratar de imprimir el valor de $edad</h4>
    <?php 
        echo("El valor de la variable es: {$edad} <br>");
        echo var_dump($edad);
    ?>

    <hr>

    <h2>VARIABLES SUPERGLOBALES</h2>
    <?php 
        echo $_SERVER['SERVER_NAME'] . "<br>";
        echo $_SERVER['SERVER_SOFTWARE'] . "<br>";
        echo $_SERVER['HTTP_USER_AGENT'] . "<br>";
        echo $_SERVER['HTTP_ACCEPT'] . "<br>";
        echo $_SERVER['SERVER_PORT'] . "<br>";
    
    ?>
</body>
</html>