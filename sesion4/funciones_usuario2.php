<?php include "./utilidades/volumen.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Continuación de funciones</title>
</head>
<body>
    <?php 
    
        $p = 120;
        $e = 2.10;

        $resultado = 0;

        $resultado = calcular_imc($p, $e);

        echo $resultado;
    ?>
</body>
</html>