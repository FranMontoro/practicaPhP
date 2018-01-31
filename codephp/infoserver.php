<?php

//Nombre Ip del Servidor
echo $_SERVER["SERVER_ADDR"];
echo "<br>";
//Nombre del Host del Servidor
echo $_SERVER["SERVER_NAME"];
echo "<br>";
//El sistema Operativo que usa el Server
echo $_SERVER["SERVER_SOFTWARE"];
echo "<br>";
//Info sobre el agente de usuario que solicita el Script
echo $_SERVER["HTTP_USER_AGENT"];
echo "<br>";
//La IP desde que esta viendo el usuario
echo $_SERVER["REMOTE_ADDR"];


?>