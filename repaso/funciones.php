<?php 

function aritmeticos($op1, $op2, $operacion){
    $resultado = 0;
    
    //Controlamos el tipo de operación
    switch ($operacion) {
        case '/':
            # code...
            if($op2 != 0){

                $resultado = $op1 / $op2;
                break;
            }else {
                
                $resultado = -666;
                break;
            }

        case '+':
            # code...
            $resultado = $op1 + $op2;
            break;

        case '-':
            # code...
            $resultado = $op1 - $op2;
            break;

        case '*':
            # code...
            $resultado = $op1 * $op2;
            break;


        
        default:
            # code...
            //echo "<h2>Melooooooonnnnnn que no has seleccionado operación</h2>";
            break;

    }

    return number_format($resultado,2,",",".");

}

?>