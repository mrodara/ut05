<?php
        // INCLUIMOS LA CABECERA DEL PROYECTO 
        require_once("../../assets/header.php");

        //Incluimos el menú del proyecto
        require_once("../../assets/menu.php");

        //Incluimos las definiciones de nuestras funciones de usuario
        include_once "./utilidades/volumen.php";
?>

<!-- Content-->

<div class="container">
    <div class="row">
        <h2>Funciones de Usuario en PHP</h2>
        <div class="alert alert-info" role="alert">
        Las funciones son utilizadas para descomponer grandes problemas en tareas simples y para implementar 
        operaciones que son comúnmente utilizadas durante un programa y de esta manera reducir la cantidad de código.
        </div>
        
        <h4> <span class="badge bg-info text-dark">Ejemplo - Crear una función que calcule el IMC</span></h4>
        <div class="col-6">
            <?php 

                $p = 120;
                $e = 2.10;

                $resultado = 0;
                
                $resultado = calcular_imc($p, $e);

                echo "El IMC para un peso de $p kilogramos y de $e metros de estatura es de: " .calcular_imc($p,$e) . "</br>";
                echo "El IMC para un peso de $p kilogramos y de $e metros de estatura es de: " .round($resultado, 2) . "</br>";
            ?>
        </div>

        <h4> <span class="badge bg-info text-dark">
                Ejemplo - Crear una función que calcule el Volumen de un cilindro
            </span>
        </h4>
        <div class="col-6">
            <?php 
            
                $radio = 80;
                $altura = 39;

                $volumen = calcular_vol_cilindro($radio,$altura);

                echo "El volumen V de un cilindro de radio $radio cm y de altura $altura cm es de: " . $volumen . "</br>";
            
            ?>
        </div>

        
    </div>
</div>

<?php 
    // Footer
    require_once("../../assets/footer.php");
?>