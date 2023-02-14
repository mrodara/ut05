<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructuras de Selección</title>
    <style>
        code {
            background-color: #0f0f0f;
            color: #f2f2f2;
            padding: 6px;
            font-size: 16px;
            display: block;
            width: 33%;
        }

        .parrafo_imp {
            font-size: 18px;
            font-weight: bold;
            color: #c2c2c2;
            background-color: #0d0d0d;
            padding: 10px;
            display: inline-block;
            border-radius: 25px;
        }
    </style>
</head>
<body>
    <p class="parrafo_imp">  
        Las estructuras de selección me permiten decidir qué acciones realizar 
        en función de una o varias condiciones
    </p>
    <h2>IF</h2>
    
    <code>
        if (condicion){</br>
            acciones</br>
        }</br>
    </code>
    <br>
    <p>Ejemplo</p>
    <code>
        $a = 5;</br>
        $b = 4;</br>
        
        </br>
        if($a >= $b){</br>
            echo "A es mayor que B";</br>
        }</br>
    </code>
    </br>
    <?php 
    
        $a = 5;
        $b = 4;
        
        if ($a >= $b) {
            # code...
            echo "A es mayor que B";
        }

    ?>    
    </br>
    <h2>IF-ELSE</h2>
    <code>
        if (condicion){</br>
            acciones</br>
        }else{</br>
            acciones en caso contrario</br>
        }</br>
    </code>
    <br>
    <p>Ejemplo</p>
    <code>
        $a = 5;</br>
        $b = 7;</br>
        
        </br>
        if($a > $b){</br>
            echo "A es mayor que B";</br>
        }else{</br>
            echo "A es menor que B";</br>
        }</br>
    </code>
    </br>
    <?php 
    
        $a = 5;
        $b = 7;
        
        if ($a > $b) {
            # code...
            echo "A es mayor que B";
        }else{
            echo "A es menor que B";
        }

    ?>    
<br>
<h2>IF-ELSEIF-ELSE</h2>
    <code>
        if (condicion){</br>
            acciones</br>
        }elseif (otra condicion){</br>
            acciones si cumple su condición</br>
        }else{</br>
            acciones si no se cumple ninguna de las anteriores</br>
        }</br>
    </code>
    <br>
    <p>Ejemplo</p>
    <code>
        $registrado = true;</br>
        $confirmado = true;</br>
        
        </br>
        if($registrado && $confirmado){</br></br>
            echo "Bienvenid@ a la plataforma";</br></br>
        }elseif($registrado && !$confirmado){</br></br>
            echo "Debe terminar el proceso de alta confirmando en la url que ha recibido por mail";</br></br>
        }else{</br></br>
            echo "Lo sentimos el usuario especificado no aparece como registrado";
        }</br></br>
    </code>
    </br>
    <?php 
    
    $registrado = true;
    $confirmado = false;
        
        if ($registrado && $confirmado) {
            # code...
            echo "Bienvenid@ a la plataforma</br>";
        }elseif ($registrado & !$confirmado) {
            # code...
            echo "Debe terminar el proceso de alta confirmando en la url que ha recibido por mail</br>";
        }else{
            echo "Lo sentimos el usuario especificado no aparece como registrado</br>";
        }
               

    ?>    
</body>
</html>