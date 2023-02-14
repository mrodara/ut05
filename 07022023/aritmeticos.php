<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        //Operador suma +
        $op1=200.51;
        $op2=500.69;

        echo round($op1 * $op2,1);


        echo "<p>" .($op1 + $op2) . "</p>";

        //Resta -
        echo "<p>" .($op1 - $op2) . "</p>";

        //Multiplicación *
        echo "<p>" .($op1 * $op2) . "</p>";
        //Divisón /
        echo "<p>" .($op1 / $op2) . "</p>";
        
        
        //Módulo o resto %
        echo "<p>" .($op1 % $op2) . "</p>";
        
        //Potencia **
        echo "<p>" .($op1 ** $op2) . "</p>";

        //Incremento y Decremento
        $numero = 5;
        echo "<p>$numero</p>";
        
        echo "<p>". ++$numero. "</p>";


    ?>
</body>
</html>