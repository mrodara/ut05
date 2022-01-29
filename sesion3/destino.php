<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de destino</title>
</head>
<body>
    
    <?php
        echo "<h3>Hola Bienvenid@ " . $_GET['nombre'] . "</h3>";
        echo "<p>Salario mensual: " . $_GET['salario'] . "<p>"; 

    ?>
</body>
</html>