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
            <form action="tabla_destiny.php" method="post">
                <div class="form-group">
                    <input type="number" name="tabla" class="form-control" placeholder="Tabla del ...">
                    <input type="number" name="iteraciones" class="form-control" placeholder="Número de operaciones...">
                </div>
                <input type="submit" value="Enviar">              

            </form>
        </div>
    </div>
</div>

<?php 
    // Footer
    require_once("../../assets/footer.php");
?>