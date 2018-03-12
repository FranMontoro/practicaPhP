<!DOCTYPE html>
<html>

 <head>
      <meta charset="uft-8" />
      <title>ejercicio 05-while</title>
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
     //cuando borramos, entra en ciclo muerto y no salta error
    
     if (!isset($numero_elementos) || empty($numero_elementos)) die;
     $temperaturas = array();

     //comienza el array temperatura
     $i = 0;
     while ($i <  $numero_elementos) {
        $temperaturas[$i] = rand(1,30);
        //para evitar bucle infinito, ponemos:
        $i++;
     }
     

     //calcular la suma y media
     $suma=0;
     $i = 0;

     while ($i <  $numero_elementos) {
         $suma = $suma + $temperaturas[$i];
         $i++;
     }
     $media = $suma / $numero_elementos;

    echo "<h4>Media: $media</h4>";
    
    //Calcular el Maximo
    $maximo = $temperaturas[0];
    $i = 1;

    while ($i <  $numero_elementos){
      if ($numero_elementos[$i] > $maximo){
        $maximo = $temperaturas[$i];
        
      }
      $i++;
    }

    echo "<h4>Maximo: $maximo</h4>";

    //Calcular el minimo
    $minimo = $temperaturas[0];
    $i= 1;
    while ($i <  $numero_elementos){
    
      if ($numero_elementos[$i] < $minimo){
        $minimo = $temperaturas[$i];
      }
      $i++;
    }

    echo "<h4>Minimo: $minimo</h4>";
    
    //echo "<pre>"; lo que hace es mostrar tal cual lo escribimos en el archivo .php
     echo "<pre>";
     print_r($temperaturas);
     echo "</pre>";

    ?>
 </body>
</html>