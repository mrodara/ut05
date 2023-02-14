<?php 
    session_start();

    $_SESSION['session_login'] = array();

    session_destroy();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cierre de sesión</title>
</head>
<body>
    <h1>La sesión se ha cerrado correctamente, hasta la vista</h1>
</body>
</html>