<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciación a sintaxis php</title>
</head>
<body>
    <h3>Variables en php</h3>
    <?php 
        //Declarar variables
        $edad=42; //Variable Global

        //echo o print para imprimir por pantalla
        echo $edad ."<br>";
        echo var_dump($edad) ."<br>";
        
    ?>

    <h3>Variables globales y locales</h3>
    <?php 
    
        //Declaración de la función
        function getEdad(){
            $inicio = "Tu tienes ";
            $edad = 53; //Variable local

            //Aqui se ejecuta un código específico
            echo $inicio .$edad. " años";
        }

        getEdad(); //Llamada a la función
        
        echo "<br>";

        echo var_dump(is_int($edad));

        $altura = 1.8 //Variable de tipo float
    ?>

</body>
</html>