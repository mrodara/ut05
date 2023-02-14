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
        <h3>Bucle For</h3>
        <div class="alert alert-warning" role="alert">
            El bucle for se caracteriza por repetir un conjunto de instrucciones un número repetido
            de veces que ya conococemos de antemano porque indicamos un valor inicial, un valor final y el incremento
            o decremento
        </div>
        <h4> <span class="badge bg-info text-dark">Ejemplo - Rellenar las filas de una tabla</span></h4>
        <div class="col-6">
            <table class="table table-striped table-hover">
                <tr>
                    <td>#</td>
                    <td>Op1</td>
                    <td>Op2</td>
                    <td>Resultado</td>
                </tr>
                <?php
                for ($i = 1; $i <= 20; $i++) {
                    # code...
                    echo "<tr><td>" . $i . "</td><td>6</td><td>" . $i . "</td><td>" . (6 * $i) . "</td></tr>";
                }
                ?>
            </table>
        </div>
    </div>
</div>

<?php
// Footer
require_once("../../assets/footer.php");
?>