<?php
//creamos la variablea aleatoria
$aleatorio = rand(0,1);

if ($aleatorio == 0){
    echo "<img src=\"../imagen/euro_cara.png\">";

} else{
    echo "<img src=\"../imagen/euro_cruz.jpg\">";

}

?>