<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PASO DE PARAMETROS POR URL   </title>
</head>
<body>
    <h2>Datos recibidos por URL</h2>

    <?php 

        /*if(isset($_GET['nombre'])){

            echo ("<p>{$_GET['nombre']}</p>");
        }else{
            echo "Aquí no hay nada";
        }*/
        
        echo $_GET['nombre'] . " " . $_GET['edad'] ." ". $_GET['email'];

        //echo var_dump($nombre);
    ?>
</body>
</html>