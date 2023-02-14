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

        $tabla= 7;

        for ($i=10; $i >= 0; $i--) { 
            # code...
            echo ($tabla * $i) . " ";
            //echo $i;
        }
  
    ?>

    <hr>

    <?php 
    
        $a = 1;

        while ($a <= 3) {
            # code...
            echo "Hola caracola <br>";
            $a++;
        }
    ?>

    <hr>

    <?php 
    
        $persona1 = [

            'nombre'    => 'Pepe',
            'edad'      => 25
        ];

        $persona2 = [

            'nombre'    => 'Luisa',
            'edad'      => 33
        ];

       $array = array($persona1, $persona2);

       for ($i=0; $i < sizeof($array) ; $i++) { 
        # code...
        echo var_dump($array[$i]) . "<br>";
       }
      // echo sizeof($array);


    
    ?>


</body>
</html>