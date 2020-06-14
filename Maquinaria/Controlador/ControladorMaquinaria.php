<?php

require_once('../Modelo/CrudMaquinaria.php');
require_once('../Modelo/Maquinaria.php');

$Maquinaria = new Maquinaria();
$CrudMaquinaria = new CrudMaquinaria();

if(isset($_POST["CrearMaquinaria"])){

    $Maquinaria->setIdMaquina(null);
    $Maquinaria->setNombre($_POST["Nombre"]);
    $Maquinaria->setCapacidad($_POST["Capacidad"]);
    $CrudMaquinaria::InsertarMaquinaria($Maquinaria);
}

else if(isset($_POST["EditarMaquinaria"])){

    $Maquinaria->setIdMaquina(null);
    $Maquinaria->setNombre($_POST["Nombre"]);
    $Maquinaria->setCapacidad($_POST["Capacidad"]);
    $CrudMaquinaria::ModificarMaquinaria($Maquinaria);
}

else if ($_GET['Accion']== "EliminarMaquinaria") {

    $CrudMaquinaria::EliminarMaquinaria($_GET["IdMaquinaria"]);
}


?>