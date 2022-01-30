<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador de Asignación</title>
</head>
<body>
    
    <?php 

        $operando1 = 23;
        $operando2 = 14;

        echo $operando1 . "</br>";
        echo $operando2 . "</br>";

        echo ($operando1+=$operando2) . "</br>"; // $operando1 + $operando2
        echo ($operando1-=$operando2) . "</br>"; // $operando1 - $operando2
        echo ($operando1*=$operando2) . "</br>"; // $operando1 * $operando2
        echo ($operando1/=$operando2) . "</br>"; // $operando1 / $operando2
        echo ($operando1%=$operando2) . "</br>"; // $operando1 % $operando2

        
    
    ?>
</body>
</html>