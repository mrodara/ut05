
   <?php
        // INCLUIMOS LA CABECERA DEL PROYECTO 
        require_once("../../assets/header.php");
        require_once("../../assets/menu.php");
   ?> 
   
   <h2>Ejemplos de código embebido</h2>

   <h3>Para mostrar texto directamente</h3>
    <p> 
        <?php echo "Esto es un código embebido de php"?> 
    </p> 
    
    <h3>Para mostrar la ejecución de una función</h3>
    <p> 
        <?php
             /* MUESTRA INFORME DE LA CONFIGURACIÓN DE PHP */ 
             echo phpinfo(); 
             ?> 
     </p> 
     
     <?php $color_parrafo = "#0000ff;"; ?>

     <h3>Para modificar un atributo dentro de la etiqueta</h3>
      <p style="color:<?php echo $color_parrafo ?>"> 
          <?php echo "Esto es un código embebido de php"?> 
      </p> 
      
      <h3>Tambien se puede usar para automatizar acciones</h3>
      <?php 
        $alumnos = array("Manu", "Ismael", "Francisco", "Antonio");
      ?>
       <table style="border: 1px solid;">
           <tr>
               <td>#</td>
               <td>Nombre</td>
           </tr>
           <?php 
                for ($i=0;$i<sizeof($alumnos);$i++){
                    echo "<tr><td>" .$i. "</td><td>".$alumnos[$i]."</td></tr>";
                }
           ?>
       </table>

     
    <a href="http://proyecto.site">Volver</a>
</body>
</html>