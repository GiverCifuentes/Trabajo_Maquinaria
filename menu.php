<?php
session_start();
if(!(isset($_SESSION["NombreUsuario"]))){ //Si la session no exite redireccionar al login
    header("location:Index.php");
}
?> <h1> <?php echo "Bienvenido ".$_SESSION["NombreUsuario"]; ?> </h1> <?php
?>
<br>
<h2>¿Qué desea hacer?</h2>
<br>
<a href="Servicio/Vista/ListarServicio.php">Gestión de Servicio</a>
<br>
<a href="Maquinaria/Vista/ListarMaquinaria.php">Gestión de Maquinaria</a>
<br>
<a href="CerrarSesion.php">Cerrar Sesión</a>