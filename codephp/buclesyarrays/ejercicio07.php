<?php

    $frutas = array("limón", "naranja", "banana", "albaricoque");

    sort($frutas);

    for ($i = 0; $i < count($frutas); $i++){

        echo "<h2>".$frutas[$i]."</h2 >";
    }

?>