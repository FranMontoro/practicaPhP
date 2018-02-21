<?php

    //esto vincula un archivo .php
    include ("functions.php");

    //la variable coje el calculo que se realiza en el function inizializar_array
    $listaA = inicializar_array(10, 1, 20);
    echo "<pre>";
    //print_r para dar informacion legible al ojo humano
    print_r($listaA);
    echo "</pre>";

    $listaB = inicializar_array(30, -10, -20);
    echo "<pre>";
    //print_r para dar informacion legible al ojo humano
    print_r($listaB);
    echo "</pre>";

?>