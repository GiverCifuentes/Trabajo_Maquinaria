<?php

//session_start();

//if (!(isset($_SESSION["Nombre"]))) {
//header("location:../../Index.php");
//}


require_once('../../conexion.php');
require_once('../Modelo/Maquinaria.php');
require_once('../Modelo/CrudMaquinaria.php');

$CrudMaquinaria = new CrudMaquinaria();
$ListaMaquinaria = $CrudMaquinaria->ListarMaquinaria();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Maquinas</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

    <h1 align="center">Maquinas</h1>
    <br>
        <ul class="nav nav-fill">
            <li class="nav-item">
            <button type="button" class="btn btn-outline-success"><a class="nav-link active" href="IngresarMaquinaria.php">Crear Maquinaria</a></button>
            <button type="button" class="btn btn-outline-danger"><a class="nav-link active" href="../../menu.php">Volver al menú</a></button>

            </li>
        </ul>
        <br>
        <table class="table table-bordered">
            <thead class="table-danger">
                    <tr>
                    <th scope="col">Id Maquina</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Capacidad</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    </tr>
            </thead>
            <tbody>
            <?php
            foreach($ListaMaquinaria as $Maquinaria) {
                    ?>
                    <tr>
                    <td><?php echo $Maquinaria->getIdMaquina();?></td>
                    <td><?php echo $Maquinaria->getNombre();?></td>
                    <td><?php echo $Maquinaria->getCapacidad();?></td>
                    <td>
                    <a href="EditarMaquinaria.php?IdMaquina=<?php echo $Maquinaria->getIdMaquina();?>">Editar</a> 
                    </td>
                    <td>
                    <a href="../Controlador/ControladorMaquinaria.php?IdMaquina=<?php echo $Maquinaria->getIdMaquina();?>&Accion=EliminarMaquinaria">Eliminar</a> 
                    </td>

                
                <?php
            }
            ?>
            </tbody>
        </table>

    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>