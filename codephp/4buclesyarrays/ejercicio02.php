<!DOCTYPE html>
<html>

 <head>
      <meta charset="uft-8" />
      <title>ejercicio02</title>
     </head>

 <body>

    <?php
    //el 1º FOR empieza por el numero 1, pasa al siguiente for y ejecuta la tabla
    //despues se reinicia y se suma +1, por lo que pasa ha 2, hasta un max de 10.
    for($numero = 1; $numero<=10; $numero++) {
        echo "Tabla del $numero";
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
    echo "<br />";
    }
    ?>
 </body>
</html>