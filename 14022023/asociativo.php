<?php 

$alumnos = [
    'nombre1'   => "Pepe",
    'nota1'     => 7,
    'nombre2'   => 'Antoñita',
    'nota2'     => 10
];

?>

<?php 

    echo  var_dump($alumnos);
    
    $alumnos['nombre3'] = 'Manu'; 
    $alumnos['nota3'] = 4.5; 
    
    echo "<br>";

    echo  var_dump($alumnos);
    echo "<br>";
?>

<?php 

    $notas = array();

    foreach( $alumnos as $clave => $valor){
        
        if(is_int($valor) || is_float($valor)){
            array_push($notas, $valor);
        }
    }

?>