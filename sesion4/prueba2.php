<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="resultadoprueba.php" method="post">
        <?php 
        
            for($i = 1; $i<=$_POST['ncampos']; $i++){
                echo "<input type='number' name='campo" .$i. "'>";
            }
        ?>
        <br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>