<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H2>OPERADORES DE COMPARACIÓN</H2>
    <p>== comparación de si dos elementos tienen el mismo valor</p>
    <?php 
        $a=4;
        $b=4;
        
        echo var_dump($a==$b);

        
    ?>

    <p>=== exactamente igual</p>
    <?php 
        $a=4;
        $b='4';
            
        echo var_dump($a===$b);
    ?>

    <hr>

    <?php
    
        $a = 56;
        $b = 42;
        $c = 37;

        if($a>$b && $a>$c){
            echo $a . " es la mas mejor de las variables";
        }else{
            echo $a. " es una pm";
        }
    ?>
    
</body>
</html>