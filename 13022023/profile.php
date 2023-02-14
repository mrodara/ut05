
<?php 
    session_start();

    if(!isset($_SESSION['session_login']['session_id'])){

        if(isset($_POST['txtEmail']) && ($_POST['txtEmail']<>"")){

            $_SESSION['session_login'] = array();
    
            $_SESSION['session_login']['session_id'] = session_id();
            $_SESSION['session_login']['email'] = $_POST['txtEmail'];
            $_SESSION['session_login']['visitas'] = 1;
            $_SESSION['session_login']['error'] = false;
        
        }else{
            header('Location: login.php');
        }
                
    }else{
        $_SESSION['session_login']['visitas'] += 1;
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
</head>
<body>
    <?php 
        echo "<h2>Bienvenid@ tu email es " . $_SESSION['session_login']['email'] . "</h2>";
        echo "<hr>";
        echo "<p>Has visitado tu perfil " . $_SESSION['session_login']['visitas'] . "</p>";

        if($_SESSION['session_login']['error']){
            echo "Donde vas que ya estas loguad@!!!";
            $_SESSION['session_login']['error'] = false;
        }
    ?>

    <hr>

    <a href="logout.php">Cerrar Sesión</a>
</body>
</html>