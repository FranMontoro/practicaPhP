<?php

echo "<h1>GLOBAL</h1>";
foreach($GLOBALS){
    echo ;
    echo"<br>";
}


echo "<h1>SERVER</h1>";
foreach ($_SERVER as $key => $value){
    echo "$key : $value";
    echo "<br>";
}

?>