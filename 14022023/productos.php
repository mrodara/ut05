
<?php 

    //Control de si el usuario ya está logueado
    session_start();

    
    

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
    <form action="carrito.php" method="post">
        <div>
            <table>
                <tr>
                    <td>Producto</td>
                    <td>Cantidad</td>
                    <td>Precio</td>
                    
                </tr>
                <?php 
                
                    for ($i=0; $i < 2; $i++) { 
                        # code...
                        echo "<tr><td><input type='text' name='txtNombre$i'></td>" .

                            "<td><input type='number' name='txtCantidad$i'></td>" .

                            "<td><input type='number' step='0.01' name='txtPrecio$i'></td>" .

                            "</tr>";
                    }
                ?>
            </table>
        </div>

        <input type="submit" value="Añadir artículos">
    </form>
</body>
</html>