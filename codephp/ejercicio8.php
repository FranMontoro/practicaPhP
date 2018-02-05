<!DOCTYPE html>
<html>

 <head>
      <meta charset="uft-8" />
      <title>ejercicio 8</title>
 </head>

 <body>

  <form method="post">

    <div>
    <label for="name">Nombre:</label>
    <input type="text" name="nombre">
    </div>
    
    <div>
    <label for="name">Apellidos:</label>
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
    //Al usar el METHOD: POST, la variable se definen con $_POST
        if (!empty($_POST["nombre"]) && !empty($_POST["apellidos"]) && !empty($_POST["fecha"])) {
            echo "Nombre: ".$_POST["nombre"];
            echo "</br>";
            echo "Apellidos: ".$_POST["apellidos"];
            echo "</br>";
            echo "Fecha de Nacimiento: ".$_POST["fecha"];
            
        }
       

    ?>

</body>
</html>