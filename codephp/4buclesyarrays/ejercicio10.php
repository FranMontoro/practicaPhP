<!DOCTYPE html>
<html>

 <head>
      <meta charset="uft-8" />
      <title>ejercicio10</title>
     </head>

 <body>


<?php
$pais_capital = array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");
$long = count($pais_capital);
//Ordenado el array de forma ascendentemente por clave
$orden = array();
$orden = ksort($pais_capital);
/*
//Recorre el array ordenado y lo muestra
    foreach ($pais_capital as $clave => $valor) {
        echo " Capital de $clave es $valor <br/>";
    }
*/
echo json_encode($orden);
?>

</body> 
</html>