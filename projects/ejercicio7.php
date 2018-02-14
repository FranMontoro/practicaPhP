<!DOCTYPE html>
<html>

 <head>
      <meta charset="uft-8" />
      <title>ejercicio 7</title>
 </head>

 <body>

  <form method="get">

    <div>
    <label for="name">nombre:</label>
    <input type="text" name="nombre">
    </div>
    
    <div>
    <label for="name">apellidos:</label>
    <input type="text" name="apellidos">
    </div>

    <div>
    <label for="name">Fecha Nacimiento:</label>
    <input type="date" name="fecha">
    </div>

    <button type="submit">Enviar</button>

  </form>

    <?php
    
    //el ! delante de empty significa NO. Si empi NO está vacía, entra el echo.
    //con && concatenamos 2 variables para la comprobacion
        if (!empty($_GET["nombre"]) && !empty($_GET["apellidos"]) && !empty($_GET["fecha"])) {
            echo "Nombre: ".$_GET["nombre"];
            echo "</br>";
            echo "Apellidos: ".$_GET["apellidos"];
            echo "</br>";
            echo "Fecha de Nacimiento: ".$_GET["fecha"];
            
        }
       

    ?>

</body>
</html>