<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmeticos</title>
</head>
<body>
    
    <?php 

        $operando1 = 23;
        $operando2 = 14;

        echo "El resultado de la suma es: " . ($operando1 + $operando2) . "</br>"; 
        echo "El resultado de la resta es: " . ($operando1 - $operando2) . "</br>";
        echo "El resultado de la multiplicación es: " . $operando1 * $operando2 . "</br>";
        echo "El resultado de la división es: " . $operando1 / $operando2 . "</br>";
        echo "El resultado del módulo es: " . $operando1 % $operando2 . "</br>";
        echo "El resultado del exponente: " . $operando1 ** $operando2 . "</br>";
    
    ?>
</body>
</html>