<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays Indexados</title>
</head>
<body>
    
    <h2>Creación de arrays indexandos en php</h2>
    <?php 

            
        //Constructor array()
        $frutas = array("Naranja", "Mandarina", "Pera", "Melón");

        //Mediante corchetes
        $semana = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sabado", "Domingo"];

        //Crear arrays vacios para luego llenarlos
        $vacio = array(10); // Variable es un array de 10 elementos.
        $vacio = array(); // Variable es un array sin tamaño especifico.
    ?>

    <h2>Acceso a los arrays</h2>
    <?php 
    
        //Accedemos haciendo uso de los []
        echo $frutas[1] . "</br>";
        
        var_dump($semana);
    ?>
</body>
</html>