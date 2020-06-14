<?php

require_once('../Modelo/CrudServicio.php');
require_once('../Modelo/Servicio.php');

$Servicio = new Servicio();
$CrudServicio = new CrudServicio();

if (isset($_POST["CrearServicio"])) {

    $Servicio->setIdServicio(null);
    $Servicio->setNombreObra($_POST["NombreObra"]);
    $Servicio->setDirectorObra($_POST["DirectorObra"]);
    $Servicio->setConstructora($_POST["Constructora"]);
    $Servicio->setMes($_POST["Mes"]);
    $Servicio->setMaquina($_POST["Maquina"]);
    $Servicio->setOperario1($_POST["Operario1"]);
    $Servicio->setOperario2($_POST["Operario2"]);
    $CrudServicio::InsertarServicio($Servicio);
}

else if(isset($_POST["EditarServicio"])) {

    $Servicio->setIdServicio(null);
    $Servicio->setNombreObra($_POST["NombreObra"]);
    $Servicio->setDirectorObra($_POST["DirectorObra"]);
    $Servicio->setConstructora($_POST["Constructora"]);
    $Servicio->setMes($_POST["Mes"]);
    $Servicio->setMaquina($_POST["Maquina"]);
    $Servicio->setOperario1($_POST["Operario1"]);
    $Servicio->setOperario2($_POST["Operario2"]);
    $CrudServicio::ModificarServicio($Servicio);
}
else if ($_GET['Accion']== "EliminarServicio") {

    $CrudServicio::EliminarServicio($_GET["IdServicio"]);
}
?>