<?php

    //Definición de una función
    function calcular_imc ($peso, $estatura){

        $imc = $peso / ($estatura**2);

        return round($imc,2);
    }


    function calcular_vol_cilindro ($radio, $altura){

        return round (pi() * ($radio**2) * $altura, 3);
    }

?>