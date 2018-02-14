<!DOCTYPE html>
<html>

 <head>
      <meta charset="uft-8" />
      <title>ejercicio 11</title>
     </head>

 <body>
    <form method="post">
     <!-- preparamos el formulario para marcar el numero de tiradas y el tipo de moneda -->
     <div>
      <!--etiqueta para seleccionar las tiradas a realizar -->
      <label for="tiradas">Monedas a lanzar: </label>
        <select name="tiradas">
          <option value="selecciona un numero" selected>selecciona un numero</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <!-- el selected nos marcará por defecto esta opcion en el formulario del navegador -->
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="15">14</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
        </select>
     </div>

     <div>
      <label for="coins">Tipo de Moneda: </label>
       <select name="coins">
          <option value="selecciona una moneda">selecciona una moneda</option>
          <option value="dolar">Dolar Americano</option>
          <option value="euro">Euro</option>
          <option value="yen">Yen Japones</option>
          <option value="libra">Libra Inglesa</option>
          <option value="franco">Franco Frances</option>
       </select>
     </div>

     <input type="submit" value="enviar">
    </form>

    <?php
    //definimos las variables en base a los valores que seleccionamos en el formulario
    $tiradas = $_POST["tiradas"];
    $coins = $_POST["coins"];
    
    //Las variables enlazadas con el formulario las ejecutamos y guardamos
    echo $tiradas;
    echo "<br/>"; 
    echo $coins;
    echo "<br/>";
    $resultados = array();
    for ($i = 0; $i < $tiradas; $i++){
        $resultados[$i] = rand(0,1);
    }

    //creamos un Array que asociamos a la variable $images, para guardar todas la posibles tiradas
    $images = array();
    //dentro del Array estamos asignando los datos(tipo moneda y lado) con la imagen a mostrar
    $images [dolar][cara] = "imagen/dolar_cara.jpg";
    $images [dolar][cruz] = "imagen/dolar_cruz.jpg";
    $images [euro][cara] = "imagen/euro_cara.jpg";
    $images [euro][cruz] = "imagen/euro_cruz.jpg";
    $images [yen][cara] = "imagen/yen_cara.jpg";
    $images [yen][cruz] = "imagen/yen_cruz.jpg";
    $images [libra][cara] = "imagen/libra_cara.jpg";
    $images [libra][cruz] = "imagen/libra_cruz.jpg";
    $images [franco][cara] = "imagen/franco_cara.jpg";
    $images [franco][cruz] = "imagen/franco_cruz.jpg";

    for($e = 0; $e < $tiradas; $e++){
        if($resultados[$e] == 0){
            echo "<img src=\"".$images[$coins]["cara"]."\"width=\"200\" height=\"200\">";
        } else {
            echo "<img src=\"".$images[$coins]["cruz"]."\"width=\"200\" height=\"200\">";
        }
    }                               

    ?>
 </body>
</html>