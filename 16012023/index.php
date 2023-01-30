<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesión 1 para el 16/01/2023</title>
</head>
<body>

<table>
    <thead>
        <th>Operando1</th>
        <th>Operando2</th>
        <th>Resultado</th>
    </thead>
    <tbody>
        <?php
            for ($i=1; $i <= 10; $i++) { 
                # code...
                echo "<tr><td>3</td><td>". $i ."</td><td>". $i*3 ."</td></tr>";
            }
        ?>
        
    </tbody>
</table>


    


</body>
</html>