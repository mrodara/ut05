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
        
        <h4> <span class="badge bg-info text-dark">Ejemplo - Usar sesiones para mantener la información de un usuario</span></h4>
        <div class="col-6">
            <?php 

                session_start(); //Iniciamos la sesión

                /*Nosotros vamos a declarar la sesión usuario y tenemos que comprobar 
                si ese campo ya ha sido asignado, haciendo uso de otra función de PHP isset. */

                $_SESSION['persona'] = array(); // En este caso lo definimos como un array asociativo

                //var_dump(isset($_SESSION['persona']['session_id']));

                if(!isset($_SESSION['persona']['session_id'])){
                    
                    $_SESSION['persona']['session_id'] = session_id();
                    $_SESSION['persona']['nombre'] = 'Pepe';
                    $_SESSION['persona']['apellidos'] = 'Perez Perez';
                    $_SESSION['persona']['email'] = 'correodepepe@gmail.coaquím';
                    $_SESSION['persona']['web'] = 'https://miweb.com';

                    echo "Se acaba de iniciar la sesión " . $_SESSION['persona']['session_id'] . "</br>";
                }
            ?>
            <h5>
                Pulsa <a href="http://proyecto.site/ut05/sesion4/comprobar_sesiones.php"> 
                    <span class="badge bg-warning">aquí</span></a> para ver la sesión que se ha creado</h5>
            
        </div>
                
    </div>
</div>

<?php 
    // Footer
    require_once("../../assets/footer.php");
?>