<?php 

function multiplicame($op1, $op2){
    return $op1 * $op2;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>

    <div style="border: 1px solid #c2c2c2; display: inline-block; padding: 10px;">
        <form action="ejercicio2.php" method="POST">
            <label for="txtTabla">Tabla: </label>
            <input type="number" name="txtTabla" id="txtTabla" placeholder="Tabla del ...">
            <br><br>
            <label for="txtIteracion">Iteraciones: </label>
            <input type="number" name="txtIteracion" id="txtIteracion" placeholder="Número de iteraciones">
            <br><br>
            <button type="submit">Calcular</button>
            <button type="reset">Limpiar</button>
        </form>
    </div>

    <br><br><br>

   
<?php
        var_dump($_POST);

       if(!($_POST['txtTabla'] == "" && $_POST['txtIteracion'] == '')){

           echo "<table style='border: 1px solid #000000;'>
               <thead>
                   <th>#</th>
                   <th>TABLA</th>
                   <th>ITERACIÓN</th>
                   <th>RESULTADO</th>
               </thead>";
   
               //$tabla=7; => $_POST['txtTabla'];
   
               //Generación de las filas de la tabla usando bucles
               for ($i=1; $i <=$_POST['txtIteracion']; $i++) { 
                   # code...
                   echo "<tr><td>$i</td><td>" .$_POST['txtTabla']. 
                        "</td><td>$i</td><td>" .multiplicame($_POST['txtTabla'],$i). "</td>";
               }

               echo "</table>";
       }elseif(!$_POST){ // Para controlar la primera vez que accedemos
            echo "<h2>Insertar los datos del formulario</h2>";
       }else{

            echo "<h2>Error: Proporciona todos los valores necesarios</h2>";

       }
        ?>
    
</body>
</html>