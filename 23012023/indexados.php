<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Arrays indexados</h2>
    <?php 
        //ARRAYS INDEXADOS
        $nombres = array('Manu', 'Yolanda', 'Ainhoa', 'Alma'); //constructor array

        $coches = ['Ford', 'Opel', 'Mazda']; //Uso de corchetes
        
        
        $frutas = array(5); //Indicando el tamaño o sin especificarlo ()

        $frutas[0] = 'Pera';
        $frutras[1] = 'Lima';
        $frutas[2] = 'Naranja';
        $frutas[3] = 'Melón';
        $frutas[4] = 'Piña';

        
        //Para recorrerlo el primer elmento es el 0

        echo $coches[0];
    ?>

    <hr>

    <h2>Recorrer un array Indexado</h2>
    <?php 
    
        foreach ($frutas as $fruta){
            echo $fruta . '<br>';
        }

        for ($i=0; $i <= sizeof($coches) ; $i++) { 
            # code...
            echo $coches[$i] . "<br>";
        }
    ?>

    <hr>

    <h2>Arrays Asociativos</h2>
    <?php 
        $persona = [

            'name'      => 'Manu',
            'lastname'  => 'Rodriguez',
            'email'     => 'manuel.rodriguez@iesalandalus.org',
            'age'       => 43,
            'active'    => True
        ];

        var_dump($persona);
    
    ?>
</body>
</html>