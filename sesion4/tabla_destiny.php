<?php
        // INCLUIMOS LA CABECERA DEL PROYECTO 
        require_once("../../assets/header.php");

        //Incluimos el menú del proyecto
        require_once("../../assets/menu.php");
?>

<!-- Content-->

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <table class="table table-hover table-striped">
                <thead>
                    <th>#</th>
                    <th>Op1</th>
                    <th>Op2</th>
                    <th>Resultado</th>
                </thead>
                <?php 
                    for ($i=0; $i <= $_POST['iteraciones'] ; $i++) { 
                        # code...
                        echo "<tr><td>" .$i. "</td><td>" .$_POST['tabla']. "</td><td>" . $i . "</td><td>". ($_POST['tabla'] * $i) . "</td></tr>";
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