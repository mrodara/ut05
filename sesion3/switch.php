<?php
        // INCLUIMOS LA CABECERA DEL PROYECTO 
        require_once("../../assets/header.php");

        //Incluimos el menú del proyecto
        require_once("../../assets/menu.php");
?>

<!-- Content-->

<div class="container">
    <div class="row">
        <h3>Sentencia Switch</h3>
        <div class="alert alert-info" role="alert">
            Es similar a la inclusión de múltiples sentencias if, en el que dependiendo del valor 
            que tenga una variable, ejecutará un determinado bloque de código.
        </div>
        <h4> <span class="badge bg-info text-dark">Ejemplo</span></h4>

        <?php 
            $operando1 = 10;
            $operando2 = 5;

            $operacion = "+";

            switch ($operacion) {
                case '+':
                    # code...
                    echo "El resultado de la suma es: " . ($operando1 + $operando2) . "<br>";
                    break;
                
                case '-':
                    echo "El resultado de la resta es: " . ($operando1 - $operando2) . "<br>";
                    break;
                
                case '*':
                    echo "El resultado de la multiplicación es: " . ($operando1 * $operando2) . "<br>";
                    break;

                case '/':
                    echo "El resultado de la división es: " . ($operando1 / $operando2) . "<br>";
                    break;

                default:
                    # code...
                    echo "No hay ninguna operación para realizar<br>";
                    break;
            }
        
        ?>
    </div>
</div>

<?php 
    // Footer
    require_once("../../assets/footer.php");
?>