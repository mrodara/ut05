<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Lógicos</title>
    <style>
        code {
            background-color: #0f0f0f;
            color: #f2f2f2;
            padding: 6px;
            font-size: 16px;
            display: block;
            width: 33%;
        }
    </style>
</head>
<body>
    <h2>AND</h2>
    <p>Se representa mediante el símbolo and o &&</p>
    <p>Devuelve verdadero si a y b son ciertas, falso en caso contrario</p>
    <code>
        $a and $b $a && $b
    </code>
    <br>
    <p>Ejemplo</p>
    <code>
        $a = 5;</br>
        $b = 5;</br>
        $c = 10;</br>

        echo var_dump($a == $b && $a < $c);</br>
    </code>
    </br>
    <?php 
    
        $a = 5;
        $b = 5;
        $c = 10;

        echo var_dump($a == $b && $a < $c) . "</br>";

    ?>    

    <h2>OR</h2>
    <p>Se representa mediante el símbolo or o ||</p>
    <p>Devuelve verdadero si a o b son ciertas, falso si ambas son falsas</p>
    <code>
        $a or $b $a || $b
    </code>
    </br>
    <p>Ejemplo</p>
    <code>
       echo var_dump($a != $b || $a < $c);</br>
    </code>
    </br>
    <?php 
    
        echo var_dump($a != $b || $a < $c) . "</br>";

    ?>    
    <h2>NOT</h2>
    <p>Se representa mediante el símbolo !</p>
    <p>Devuelve verdadero si a es falso, falso si a es verdadero</p>
    <code>
        !$a
    </code>
    </br>
    <p>Ejemplo</p>
    <code>
       echo var_dump(!$z); </br>
    </code>
    </br>
    <?php 
    
        $z = 0;

        echo var_dump(!$z) . "</br>";

    ?>
</body>
</html>