
<!DOCTYPE html>
<html>

    <head>
     <meta charset="uft-8" />
     <title>Page title</title>
    </head>

    <body>
    <?php
    $numero = 8;
  
    echo "<table border=\"1\">";
 
    //la variable $i tiene valor 1, el echo ejecuta el Resultado

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
    // Comentario de una linea

/*
    Comentario de 
    Varias lineas
*/

/*
//Las Variables empiezan con $, y reservan en la memoria el dato asignado a la variable
$texto = "hola";
$numero = 20;
$precio = 100.75;

//Boleana, una variable de si o no.
$estaAprovado = true;

// echo ejecuta el script en navegador
echo $texto;
echo $numero;
echo $precio;
echo $estaAprovado;

for ($numero = 0; $numero <= 10; $numero++){
    echo "NUMERO: $numero";
    echo "<br>";
}
*/
    ?>
    </body>
</html>




