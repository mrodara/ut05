
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
    
        $nombre = "Manu";
        $apellidos = "Rodriguez";

        echo "<h2>Hola ".$nombre . " " .$apellidos."</h2>";

        $nombre = "Naroa";
        $apellidos = "Martín";
        $color_h1 = "#0b4563";


    ?>

    <br>

    <h1 style="color:<?php echo $color_h1; ?>;"><?php echo "Hola ".$nombre . " " .$apellidos;?></h1>
</body>
</html>