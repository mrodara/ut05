<?php 
    //Libreria de fun
    include('./funciones.php');
?>

<?php 

session_start();


//Controlamos la sesión
if(!isset($_SESSION['visitas']['session_id'])){
    
    $_SESSION['visitas'] = array();
    
    $_SESSION['visitas']['session_id'] = session_id();
    $_SESSION['visitas']['nvisitas'] = 1;

}else{

    $_SESSION['visitas']['nvisitas']++;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    
    <form action="ejercicio3.php" method="post">
        <label for="txtOperando1">Operando1: </label>
        <input type="number" name="txtOperando1" id="txtOperando1" step="0.01" required>
        <br><br>
        <label for="txtOperando2">Operando2: </label>
        <input type="number" name="txtOperando2" id="txtOperando2" step="0.01" required>
        <br><br>
        <select name="txtOperacion" id="txtOperacion" required>
            <option value="">Elija una operación...</option>
            <option value="+">Suma</option>
            <option value="-">Resta</option>
            <option value="*">Multiplicación</option>
            <option value="/">Divisón</option>
        </select>
        <button type="submit">Hacer el cálculo</button>
    </form>

    <?php 
        echo aritmeticos($_POST['txtOperando1'], $_POST['txtOperando2'], $_POST['txtOperacion']);
    ?>

    <br><br><br><br>

    <?php

        echo "<h2>Eres tan inutil que has tenido que visitar esta página " . $_SESSION['visitas']['nvisitas'] . "</h2>";
    
    ?>

    <a href="http://proyecto.site/ut05/repaso/logout.php">Pirate de aquí</a>

</body>
</html>