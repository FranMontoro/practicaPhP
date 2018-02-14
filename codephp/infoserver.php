<?php

//Nombre Ip del Servidor
//Al tener corchete la Variable debemos concatenar el Texto = "texto".$variable[];
echo "IP: ".$_SERVER["SERVER_ADDR"];
echo "<br>";
//Nombre del Host del Servidor
echo "Nombre Host Server: ".$_SERVER["SERVER_NAME"];
echo "<br>";
//El sistema Operativo que usa el Server
echo "Sistema Operativo Server: ".$_SERVER["SERVER_SOFTWARE"];
echo "<br>";
//Info sobre el agente de usuario que solicita el Script
echo "Info Agente: ".$_SERVER["HTTP_USER_AGENT"];
echo "<br>";
//La IP desde que esta viendo el usuario
echo "IP usuario: ".$_SERVER["REMOTE_ADDR"];
echo "<br>";

?>