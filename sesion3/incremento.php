<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Incremento y decremento</title>
</head>
<body>
    
    <h3>Incremento</h3>
    <h4>Pueden ser de Pre y Post incremento</h4>
    <?php 
    
        //Preincremento $variable++
        //Primero muestra y luego incrementa

        $numero = 10; 

        echo $numero++; //Equivale a $numero = $numero + 1
        echo "</br>";
        echo $numero;
        echo "</br>";

        
        //Postincremento $variable++
        //Primero incrementa y luego muestra

        $numero2 = 10;

        echo ++$numero2; //Equivale a $numero = $numero + 1 pero primero se incrementa
        echo "</br>";
        echo $numero2;        
    
    ?>
    <h3>Decremento</h3>
    <h4>Pueden ser de Pre y Post Decremento</h4>
    <?php 
    
        //Predecremento $variable--
        //Primero muestra y luego incrementa

        $numero = 10;

        echo $numero--; //Equivale a $numero = $numero - 1
        echo "</br>";
        echo $numero;
        echo "</br>";

        
        //Postdecremento --$variable
        //Primero decrementa y luego muestra

        $numero2 = 10;

        echo --$numero2; //Equivale a $numero = $numero - 1 pero primero se decrementa
        echo "</br>";
        echo $numero2;        
    
    ?>
</body>
</html>