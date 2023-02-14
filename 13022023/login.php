
<?php 

    //Control de si el usuario ya está logueado
    session_start();

    if(isset($_SESSION['session_login']['session_id'])){
        
        $_SESSION['session_login']['error'] = true;
        header('Location: profile.php');
    }else{
        $_SESSION['session_login']['error'] = false;
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Login</title>
</head>
<body>
    <form action="profile.php" method="post">
        <div>
            <input type="text" name="txtEmail" placeholder="Email de usuario" >
            <br>
            <input type="password" name="txtPassword" placeholder="Password de usuario" required>
            <br>
            <button type="submit">Login</button>
        </div>
    </form>
</body>
</html>