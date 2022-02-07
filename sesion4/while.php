<?php
        // INCLUIMOS LA CABECERA DEL PROYECTO 
        require_once("../../assets/header.php");

        //Incluimos el menú del proyecto
        require_once("../../assets/menu.php");
?>

<!-- Content-->

<div class="container">
    <div class="row">
        <h2>Estructuras de Repetición</h2>
        <div class="alert alert-info" role="alert">
            Las estructuras de repetición nos permiten repetir una instrucción o un conjunto de instrucciones
            tantas veces como nosotros deseemos, de esta manera podemos ahorrarnos muchas líneas de código y 
            cálculo de operaciones.
        </div>
        <h3>Bucle While</h3>
        <div class="alert alert-warning" role="alert">
            El bucle While se caracteriza por repetir un conjunto de instrucciones un número INDETERMINADO 
            de veces, se encarga de ir evaluando una expresión y ejecutar las instrucciones. 
        </div>
        <div class="alert alert-danger" role="alert">
            Nosotros controlamos la variable que indicará cuando terminar el proceso, así que, si no lo 
            hacemos correctamente podemos provocar bucles infinitos 
        </div>

        <h4> <span class="badge bg-info text-dark">Ejemplo - Imprimir un rango de números por pantalla (While)</span></h4>
        <div class="col-6">
            <?php 
            
                $numero = 100;

                while($numero >= 0){

                    echo $numero . " ";

                    $numero = $numero - 2; // Aqui controlamos que no tengamos un bucle infinito
                }
            
            ?>
        </div>

        <h3>Bucle Do-While</h3>
        <div class="alert alert-warning" role="alert">
            El bucle Do-While se caracteriza por repetir al menos una vez un conjunto de instrucciones que puede 
            posteriormente ser INDETERMINADO. Se encarga de ir evaluando una expresión y ejecutar las instrucciones. 
        </div>
        <div class="alert alert-danger" role="alert">
            Nosotros controlamos la variable que indicará cuando terminar el proceso, así que, si no lo 
            hacemos correctamente podemos provocar bucles infinitos 
        </div>

        <h4> <span class="badge bg-info text-dark">Ejemplo - Imprimir un rango de números por pantalla (Do-While)</span></h4>
        <div class="col-6">
            <?php 
            
                $numero = 0;

                do {
                    # code...
                    echo $numero . " ";

                    $numero = $numero + 2;

                } while ($numero <= 100);               
            
            ?>
        </div>
    </div>
</div>

<?php 
    // Footer
    require_once("../../assets/footer.php");
?>