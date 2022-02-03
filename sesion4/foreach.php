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
        <h3>Bucle Foreach</h3>
        <div class="alert alert-warning" role="alert">
            Este bucle lo utilizamos para iterar a través de los arrays asociativos en cada uno de sus campos.
            Recordemos que los arrays asociativos usan pares clave => valor
        </div>
        <h4> <span class="badge bg-info text-dark">Ejemplo - Rellenar con los datos de una persona un perfil</span></h4>
        <div class="col-4">
            <?php 

                $persona = array(

                    "nombre"     => "Juan",
                    "apellidos"  => "Perez Martinez",
                    "email"      => "jupemar@iawsemipresencial.com",
                    "RRSS"       => "Twitter, Facebook, Instagram",
                    "estado"     => "Activo"   

                );
            
            ?>

            <div class="card" style="width: 18rem;">
                
                <div class="card-body">
                    <h5 class="card-title">Perfil de Usuario</h5>
                    <?php 
                        foreach ($persona as $key => $valor){

                            echo "<p class='card-text'>" . $key . ": " . $valor . "</p>";
                        }
                    ?>
                    <a href="#" class="btn btn-primary">Ver Perfil</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    // Footer
    require_once("../../assets/footer.php");
?>