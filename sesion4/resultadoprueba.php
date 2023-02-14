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
        //var_dump($_POST);
        $aleatorio = rand(1, 999);

        echo $aleatorio;
        $valores = array();

        foreach ($_POST as $key => $value) {
            # code...

            array_push($valores, $value);
        }

        var_dump($valores);

        echo "<br><br>" . min($valores);
        echo "<br><br>" . max($valores);
        
        
    ?>
</body>
</html>