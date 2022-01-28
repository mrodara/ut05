<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introducción a la sintaxis PHP</title>
</head>
<body>
    <h3>Inicio y fin de un script php</h3>
    <p>Ver código fuente</p>

    <!-- Inicio del script
    <?php
        //Aquí va el contenido de nuestro código ejecutable
    ?>
    Fin del script -->
    <br>

    <h3>Extensión de un fichero web php</h3>
    <?php 
        echo "Los archivos deben tener la extensión .php";
    ?>
    <br>

    <h3>Finalización de las sentencias</h3>
    <?php 
        echo "<p>Todas las sentencias acaban con <b>;</b></p>";
    ?>
    <br>

    <h3>Comentarios</h3>
    <h4>De una línea se usan // o #</h4>
    <?php 
        //echo "<p>Todas las sentencias acaban con <b>;</b></p>";
        echo "<p>Si miras el fichero fuente verás que justo encima hay una
        línea comentada</p>";
    ?>
    <br>

    <h2>Variables</h2>
    <h3>Son contenedores para almacenar información y se declaran con $ por delante</h3>
    <?php 
        $edad = 42; //Recuerda que php es case-sensitive 
        $EDAD = 10;
        $altura = 1.80;
        $Altura = 2.20;

        echo "Manu tiene " .$edad. " años y mide " .$altura. " metros <br>";
        echo "Manu tiene " .$EDAD. " años y mide " .$Altura. " metros <br>";
    ?>
    <p>
        Otras consideraciones sobre variables <br>
        <ul>
            <li>no puede comenzar con un número</li>
            <li>solo puede contener caracteres alfanuméricos y guiones bajos (Az, 0-9 y _)</li>
            <li>debe comenzar con una letra o el carácter de subrayado</li>
        </ul>
    </p>

    <h2>Alcance de las variales (locales, globales y estáticas)</h2>
    <h3>En PHP, las variables se pueden declarar en cualquier parte del script.</h3>
    <p>Una variable declarada fuera de una función tiene un ALCANCE GLOBAL y
         solo se puede acceder fuera de una función</p>
    <?php 
        $global = "Soy una variable global al igual que las que hemos definido justo arriba de edad y altura";

        //Declaro una función, no te asustes que no toca verlo aún
        function miAltura(){
            $local = "Yo si que soy una variable local";
            //Si usamos una de las variables globales aquí, nos dará un error
            echo "Hemos dicho que la altura de Manu es " .$altura. "<br>";
            echo $local. "<br>";
        }

        //Llamo a la ejecución de esa función
        miAltura();
    ?>

    <h2>Tipos de Datos en Php</h2>
    <h3>Php soporta los siguientes tipos de datos</h3>
    <p>
        <ul>
            <li>String</li>
            <li>Integer</li>
            <li>Float (Double, nros. reales)</li>
            <li>Boolean (True o False)</li>
            <li>Array</li>                       
            <li>Object</li>                       
            <li>NULL</li>                       
            <li>Resource</li>                       
        </ul>
    </p>
    <h3>Php String</h3>
    <p>Ya lo hemos visto</p>
    <?php 
        $cadena = "Yo soy una cadena de texto";
        echo $cadena. "</br>";
    ?>

    <h3>Php Integer</h3>
    <p>es un número no decimal entre -2147483648 y 2147483647 en sistemas de 32 bits, 
        y entre -9223372036854775808 y 9223372036854775807 en sistemas de 64 bits</p>
    <?php 
        $x = 30;
        $y = 55;
        echo $x + $y. "</br>";
    ?>
    <p>Vamos a comprobar el tipo de dato mediante la función predefinida de php <b>is_int()</b></p><br>
    <?php 
        echo var_dump(is_int($x));
        echo "<br>";
        echo var_dump(is_int($cadena));
    ?>

<h3>Php Float</h3>
    <p>El tipo de datos flotante normalmente puede almacenar un valor de hasta 1,7976931348623E+308 (depende de la plataforma)
         y tener una precisión máxima de 14 dígitos.</p>
    <?php 
        $float_x = 30.236;
        $float_y = 55.896E-5;
        echo $float_x + $float_y. "</br>";
    ?>
    <p>Vamos a comprobar el tipo de dato mediante la función predefinida de php <b>is_float()</b></p><br>
    <?php 
        echo var_dump(is_float($float_x));
        echo "<br>";
        echo var_dump(is_float($x));
    ?>

</body>
</html>