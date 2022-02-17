<?php

session_start();

$productos = array();

$productos[$_POST['txtNombre']] = $_SESSION['stock'];

if (!isset($_SESSION['stock']['session_id'])) {

    $_SESSION['stock']['session_id'] = session_id();

} else {
    
    $cantidad_anterior = $_SESSION['stock']['cantidad'];

    $_SESSION['stock']['nombre'] = $_POST['txtNombre'];
    $_SESSION['stock']['precio'] = $_POST['txtPrecio'];
    $_SESSION['stock']['cantidad'] = $_POST['txtCantidad'];
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
</head>

<body>
    <form action="carrito.php" method="post">
        <input type="text" name="txtNombre" placeholder="Nombre del producto" required>
        <input type="number" name="txtPrecio" placeholder="Precio del producto" step="0.01" required>
        <input type="number" name="txtCantidad" placeholder="Cantidad del producto" required>

        <button type="submit">Añadir a stock</button>
    </form>

    <h2>Información del producto</h2>
    <?php

    if (
        isset($_SESSION['stock']['session_id']) &&
        $_SESSION['stock']['nombre'] == $_POST['txtNombre']
    ) {
        $_SESSION['stock']['cantidad'] = $cantidad_anterior + $_POST['txtCantidad'];
    }
    
    foreach($_SESSION['stock'] as $clave => $valor){

        echo strtoupper($clave) . ":" . $valor . "<br>";
    }

    ?>
</body>

</html>