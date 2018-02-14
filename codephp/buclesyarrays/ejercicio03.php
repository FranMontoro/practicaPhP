<!DOCTYPE html>
<html>

 <head>
      <meta charset="uft-8" />
      <title>ejercicio 03</title>
     </head>

 <body>

  <h1>Calcula la temperatura</h1>

  <form method="get">
 
    <div>
    <label for="numero_elementos">introduce un numero: </label>
    <input type="number" name="numero_elementos" min="1" max="100" value="10">
    </div>
    <br/>
    <button type="submit">Calcular</button>


  </form>

    <?php

     $numero_elementos=$_GET["numero_elementos"];
     $temperaturas = array();

     //comienza el array temperatura
     for ($i = 0; $i <  $numero_elementos; $i++) {
        $temperaturas[$i] = rand(1,30);
     }
     

     //calcular la suma y media
     $suma=0;

     for ($i = 0; $i <  $numero_elementos; $i++) {
         $suma = $suma + $temperaturas[$i];
     }
     $media = $suma / $numero_elementos;

    echo "<h4>Media: $media</h4>"; 

     //echo "<pre>"; lo que hace es mostrar tal cual lo escribimos en el archivo .php
     echo "<pre>";
     print_r($temperaturas);
     echo "</pre>";

    ?>
 </body>
</html>