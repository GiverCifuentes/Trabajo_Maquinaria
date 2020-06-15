<?php
session_start();
if(!(isset($_SESSION["NombreUsuario"]))){ //Si la session no exite redireccionar al login
    header("location:Index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="Css/menu.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<h1 align="center"> <?php echo "Bienvenido ".$_SESSION["NombreUsuario"]; ?> </h1>
<br>
<h2 align="center">¿Qué desea hacer?</h2>
<br>
    <ul class="nav nav-fill">
        <li class="nav-item">
            <button type="button" class="btn btn-outline-info"><a class="nav-link active" href="Servicio/Vista/ListarServicio.php">Gestión de Servicio</a></button>
            <br>
            <br>
            <br>
            <button type="button" class="btn btn-outline-info"><a class="nav-link active" href="Maquinaria/Vista/ListarMaquinaria.php">Gestión de Maquinaria</a></button>
            <br>
            <br>
            <br>
            <button type="button" class="btn btn-outline-danger"><a class="nav-link active" href="CerrarSesion.php">Cerrar Sesión</a>
        </li>
    </ul>
</body>
</html>

