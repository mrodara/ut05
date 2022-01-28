<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de variables superglobales</title>
</head>
<body>
    <?php 
        echo "Nombre del Server: " . $_SERVER['SERVER_NAME'] . "</br>";
        echo "Software del Server: " . $_SERVER['SERVER_SOFTWARE'] . "</br>";
        echo "Puerto del Server: " . $_SERVER['SERVER_PORT'] . "</br>";
        echo "Puerto del Server: " . $_SERVER['DOCUMENT_ROOT'] . "</br>";
    ?>
</body>
</html>