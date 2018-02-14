<!DOCTYPE html>
<html>

 <head>
      <meta charset="uft-8" />
      <title>ejercicio 5</title>
     </head>

 <body>

    <?php
    //rand () nos proporciona un numero aleatorio
    $numero = rand(1, 10);

    //ejecutamos la Tabla
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
    echo "</table>"
    ?>
 </body>
</html>