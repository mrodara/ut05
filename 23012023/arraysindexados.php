<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INdexados</title>
</head>
<body>
    <?php 

        $datos = array('melon', 23, True, 1200.36);

        $coches = ['ford', 'peugeot', 'ferrari'];

        $sistemas = array();
        $sistemas[0] = 'windows';
        $sistemas[1] = 'linux';
        $sistemas[2] = 'mac os';
    

        echo var_dump($datos);

        foreach($datos as $dato){
            echo $dato."<br>";
        }
    ?>
</body>
</html>