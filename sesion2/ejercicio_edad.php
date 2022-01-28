<?php
    //Defición de Constantes
    define("PATH_IMAGEN","/home/manu/Descargas");

    //Alternativa a Defición de constantes
    const RUTA_IMAGEN="/home/manu/images"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio uso de variables</title>
</head>
<body>
    <?php
        //Declaración de variables
        $edad = 42;
        $altura = 1.8;

        $aleatorio = rand();
        $aleatorio2 = rand(0,10);

        echo "<h3>Manu tiene " . $edad . " años y mide " . $altura . " metros</h3>";
        echo "<h3>" . $aleatorio . "</h3>";
        echo "<h3>" . $aleatorio2 . "</h3>";

        echo PATH_IMAGEN . "<br>";
        
    ?>
</body>
</html>