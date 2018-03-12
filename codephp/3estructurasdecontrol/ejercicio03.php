<!DOCTYPE html>
<html>

 <head>
      <meta charset="uft-8" />
      <title>ejercicio 03</title>
     </head>

 <body>

  <h1>Dias de la semana</h1>

  <form method="post">
 
    <div>
    <label for="dia">introduce un dia: </label>
    <input type="number" name="dia" min="1" max="7" >
    </div>
    <br/>
    <button type="submit">Calcular</button>


  </form>
    <?php

     $dia=$_POST["dia"];

    // if (isset($variable)), determina que la Variable este definida y no es Null 
     if (isset($dia)){
         
        switch ($dia){
            case 1:
            echo "<h3>Lunes</h3>";
            break;

            case 2:
            echo "<h3>Martes</h3>";
            break;

            case 3:
            echo "<h3>Miercoles</h3>";
            break;

            case 4:
            echo "<h3>Jueves</h3>";
            break;

            case 5:
            echo "<h3>Viernes</h3>";
            break;

            case 6:
            echo "<h3>Sabado</h3>";
            break;

            case 7:
            echo "<h3>Domingo</h3>";
            break;

        }
    
     }
    ?>
 </body>
</html>