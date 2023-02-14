<?php 
   //var_dump($_POST);

   session_start();

   if(!isset($_SESSION['carrito']['id'])){

        $_SESSION['carrito'] = array();

        $_SESSION['carrito']['id'] = session_id();

        
        foreach($_POST as $campo => $valor){
            
            $_SESSION['carrito'][$campo] = $valor;
            
        }


   }


   
?>