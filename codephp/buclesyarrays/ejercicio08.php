<?php

    $alumnos = array("Antonio"=>"27", "María"=>"24", "Juan"=>"29", "Pepe"=>"35");

    //orden ascendente por Valor
    echo "<h1>ASCENDENTE POR VALOR (ASORT)</h1>";
    asort($alumnos);

    foreach ($alumnos as $clave => $valor) {

        echo "<h4>$clave = $valor</h4>";
    }

    //orden descendente por Valor
    echo "<h1>DESCENDENTE POR VALOR (ARSORT)</h1>";
    //CUIDADO CON LA R!!!!
    arsort($alumnos);

    foreach ($alumnos as $clave => $valor) {

        echo "<h4>$clave = $valor</h4>";
    }

    //orden ascendente por clave, orden alfabetico
    echo "<h1>ASCENDENTE POR CLAVE (KSORT)</h1>";
    ksort($alumnos);

    foreach ($alumnos as $clave => $valor) {

        echo "<h4>$clave = $valor</h4>";
    }

    //orden descendente por clave, orden alfabetico
    echo "<h1>DESSCENDENTE POR CLAVE (KRSORT)</h1>";
    //CUIDADO CON LA R!!!!! NO OLVIDAR
    krsort($alumnos);

    foreach ($alumnos as $clave => $valor) {

        echo "<h4>$clave = $valor</h4>";
    }

?>