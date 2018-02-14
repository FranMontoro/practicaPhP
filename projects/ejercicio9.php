<!DOCTYPE html>
<html>

 <head>
      <meta charset="uft-8" />
      <title>ejercicio 9</title>
     </head>

 <body>

  <h1>INTRODUCE UN NUMERO: </h1>

  <form method="post">
 
    <div>
    <input type="text" name="numero">
    </div>

    <button type="submit">Calcular</button>

  </form>
    <?php
     //si no esta vacio, mostrara la tabla
     //defino que el numero que ponga en Post, Lo calcule en la tabla        
     $numero = (int) $_POST["numero"];

    if (!empty ($numero) && is_int($numero) ){

        //la tabla fuera, para que cree una sola tabla para todos los calculos
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

    ?>
 </body>
</html>