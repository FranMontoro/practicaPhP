<?php
//Definimos la funcion, ejercicio01
    function imprimir_tabla_multiplicar ($numero){

        echo "<table border=\"1\">";
        
         for($i = 1; $i <= 10; $i++){
                $resultado = $numero * $i;
            echo "<tr>";
            echo "<td>$numero</td>";
            echo "<td> x </td>";
            echo "<td>$i</td>";
            echo "<td> = </td>";
            echo "<td>$resultado</td>";
            echo "</tr>";
            }
            echo "</table>";
    }
//Funciones ejercicio02
    
    function inicializar_array($numero_elementos, $min, $max) {
        
        //La variable $lista, solo se ejecutara en FUNCTION, luego morirá en el return.
        $lista = array();
        //$i++ los integra de 1 en 1
        for ($i = 0; $i < $numero_elementos; $i++){
            $lista[$i] = rand($min, $max);
        }
        //el return debe ponerse al final de la ejecucion de la funcion deseada, no antes
        return $lista;
    }
//Funciones ejercicio03

    function calcular_media($lista) {
        $suma = 0;
        $numero_elementos = count($lista);
        for ($i = 0; $i < $numero_elementos; $i++){
            $suma = $suma + $lista[$i];
        }
        $media = $suma / $numero_elementos;
        return $media;
    }
        


?>    