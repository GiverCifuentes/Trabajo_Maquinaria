<?php
session_start();
if(!(isset($_SESSION["NombreUsuario"]))){ //Si la session no exite redireccionar al login
    header("location:Index.php");
}
echo "Bienvenido ".$_SESSION["NombreUsuario"];
echo "<br>";
echo "¿Qué desea hacer?";
echo "<br>";


?>



<a href="#">N/A</a>
<br>
<a href="CerrarSesion.php">Cerrar Sesión</a>