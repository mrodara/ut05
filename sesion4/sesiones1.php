<?php
        // INCLUIMOS LA CABECERA DEL PROYECTO 
        require_once("../../assets/header.php");

        //Incluimos el menú del proyecto
        require_once("../../assets/menu.php");

        
?>

<!-- Content-->

<div class="container">
    <div class="row">
        <h2>Sesiones PHP</h2>
        <div class="alert alert-info" role="alert">
        Se crean y se utilizan en el lado del servidor, PHP tiene para ello la variable reservada $_SESSION (puede ser una variable simple y también
        podemos decir que es un array()) y creamos un id de sesión con la función interna de PHP session_id();
        </div>
        
        <h4> <span class="badge bg-info text-dark">Ejemplo - Crear una variables de sesión que cuente las páginas visitadas</span></h4>
        <div class="col-6">
            <?php 

                session_start(); //Iniciamos la sesión

                /*Nosotros vamos a declarar el campo como num_paginas y tenemos que comprobar 
                si ese campo ya ha sido asignado, haciendo uso de otra función de PHP isset. */

                if(!isset($_SESSION['num_paginas'])){
                    
                    $_SESSION['num_paginas'] = 1;
                
                }else{

                    $_SESSION['num_paginas']++;
                }

                //Vamos a imprimir el valor que tiene este campo para cada vez que accede el usuario.
                echo "Has accedido a esta sección " . $_SESSION['num_paginas'] . " veces";

            ?>
                <a href="http://proye"></a>
        </div>
                
    </div>
</div>

<?php 
    // Footer
    require_once("../../assets/footer.php");
?>