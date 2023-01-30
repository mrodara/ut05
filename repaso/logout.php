<?php 

    session_start();

    $_SESSION['visitas'] = array();

    session_destroy();

    echo "Ya era hora de que te largaras";
?>