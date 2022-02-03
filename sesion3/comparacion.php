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
        $texto = "23";

        echo $operando1 . "</br>";
        echo $operando2 . "</br>";
        echo $texto . "</br>";

        echo var_dump($operando1 == $operando2) . "</br>";    
        echo var_dump($operando1 == $texto) . "</br>";    // True
        echo var_dump($operando1 === $texto) . "</br>";   // False
        echo var_dump($operando1 != $operando2) . "</br>";  // Distinto  
        echo var_dump($operando1 <> $operando2) . "</br>";  // Distinto  
        echo var_dump($operando1 <> $texto) . "</br>";  // Distinto 

        $usuario = 'Manuel';

        echo $usuario == ''? "Hola Invitado":"Bienvenid@ " . $usuario; 

        
    
    ?>
</body>
</html>