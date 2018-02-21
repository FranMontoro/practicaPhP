<?php
include("functions.php");
//require (""); lo mismo, pero si no encuentra el archivo, peta

    $temperaturas = inicializar_array(10, -10, 40);
    //$temperaturas = array(10, -10, 40); calcula la media de estos 3 valores.

    $media = calcular_media($temperaturas);
    echo "<h2>Media: $media</h2>"


?>