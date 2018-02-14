<!DOCTYPE html>
<html>

 <head>
      <meta charset="uft-8" />
      <title>ejercicio 02</title>
     </head>

 <body>

  <h1>Calcula tu nota</h1>

  <form method="post">
 
    <div>
    <label for="nota">introduce tu nota: </label>
    <input type="number" name="nota" min="0" max="10" placeholder="nota">
    </div>
    <br/>
    <button type="submit">Calificar</button>


  </form>
    <?php

     $nota=$_POST["nota"];

    // if (isset($variable)), determina que la Variable este definida y no es Null 
     if (isset($nota)){
    //$nota >= 0, es que la nota sea MAYOR o IGUAL al valor que le demos (0)
        if ($nota >= 0 && $nota <5){
             echo "<h2>Insuficiente</h2>";
    //$var && $var, && nos sirve para establecer condiciones en base a 2 variables
        }else if ($nota >= 5 && $nota < 6){
            echo "<h2>Suficiente</h2>";
        }else if ($nota >= 6 && $nota < 7){
            echo "<h2>Bien</h2>";
        }else if ($nota >= 7 && $nota < 9){
            echo "<h2>Notable</h2>";
        }else if ($nota >= 9 && $nota <= 10){
            echo "<h2>Sobresaliente</h2>";
        }
    }
    ?>
 </body>
</html>