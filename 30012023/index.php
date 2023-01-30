<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays Asociativos</title>
</head>
<body>
    <h2>Arrays Asociativos</h2>
    <p>A diferencia de los indexados el índice no es un número si no una clave y los asociamos
        mediante pares de clave valor <b>key => valor</b>
    </p>
    <br>

    <h4>Ejemplo de un array asociativo para identificar una persona</h4>
    <?php  
    
        $persona = [

            'nombre'    => 'Manu',
            'apellidos' => 'Rodriguez',
            'edad'      => 43,
            'email'     => 'manueljesus.rodriguez@iesalandalus.org' 
        ];

        //Veamos el contenido de $persona

        var_dump($persona);
    
    ?>

    <br>

    <h5>Podemos obtener el valor concreto de uno de los elementos indicando la key</h5>
    <?php 
        echo $persona['nombre'] . "<br>";
    ?>

    <hr>

    <h3>Podemos combinar arrays indexados y asociativos para almacenar tipos de datos complejos</h3>
    <?php 
        $empleado1 = [

            'nombre'    => 'Manu',
            'email'     => 'manueljesus.rodriguez@iesalandalus.org' 
        ];
        
        $empleado2 = [

            'nombre'    => 'Juan',
            'email'     => 'correo@prueba.es' 
        ];

        $empleados = array($empleado1, $empleado2);

        //Comprobamos el contenido de $empleados con var_dump
        var_dump($empleados);

        echo "<br><br>";

        //Lo veremos más adelante pero se recorrería así
        
    ?>

        <ul>
            <?php 
                foreach($empleados as $empleado){
                    echo "<li>".$empleado['nombre']."</li>";
                }
            ?>
        </ul>


</body>
</html>