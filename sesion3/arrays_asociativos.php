<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de Arrays Asociativos</title>
</head>
<body>
    
    <h2>Creación de arrays asociativos</h2>
    <?php 

       
        $sistemas = array("so1" => "windows", "so2" => "linux", "so3" => "macos");

        $persona = array("nombre" => "Manu", "edad" => 42, "profesor" => true, "salario" => 5000.36);
    
    ?>

    <h2>Acceso a los arrays asociativos</h2>
    <?php 
    
        echo $sistemas["so3"] . "<br>";

        echo var_dump($sistemas) . "<br>";
        echo var_dump($persona) . "<br>";
    ?>
</body>
</html>