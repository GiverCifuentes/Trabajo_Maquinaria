<?php

//session_start();

//if (!(isset($_SESSION["Nombre"]))) {
//header("location:../../Index.php");
//}


require_once('../../conexion.php');
require_once('../Modelo/Servicio.php');
require_once('../Modelo/CrudServicio.php');

$CrudServicio = new CrudServicio();
$ListaServicio = $CrudServicio->ListarServicio();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Servicios</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

    <h1 align="center">Servicios</h1>
    <br>
        <ul class="nav nav-fill">
            <li class="nav-item">
            <button type="button" class="btn btn-outline-success"><a class="nav-link active" href="IngresarServicio.php">Crear Servicio</a></button>
            <button type="button" class="btn btn-outline-danger"><a class="nav-link active" href="../../menu.php">Volver al menú</a></button>

            </li>
        </ul>
        <br>
        <table class="table table-bordered">
            <thead class="table-danger">
                    <tr>
                    <th scope="col">Id Servicio</th>
                    <th scope="col">Nombre Obra</th>
                    <th scope="col">Director Obra</th>
                    <th scope="col">Constructora</th>
                    <th scope="col">Mes</th>
                    <th scope="col">Maquina</th>
                    <th scope="col">Operario 1</th>
                    <th scope="col">Operario 2</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    </tr>
            </thead>
            <tbody>
            <?php
            foreach($ListaServicio as $Servicio) {
                    ?>
                    <tr>
                    <td><?php echo $Servicio->getIdServicio();?></td>
                    <td><?php echo $Servicio->getNombreObra();?></td>
                    <td><?php echo $Servicio->getDirectorObra();?></td>
                    <td><?php echo $Servicio->getConstructora();?></td>
                    <td><?php echo $Servicio->getMes();?></td>
                    <td><?php echo $Servicio->getMaquina();?></td>
                    <td><?php echo $Servicio->getOperario1();?></td>
                    <td><?php echo $Servicio->getOperario2();?></td>
                    <td>
                    <a href="EditarServicio.php?IdServicio=<?php echo $Servicio->getIdServicio();?>">Editar</a> 
                    </td>
                    <td>
                    <a href="../Controlador/ControladorServicio.php?IdServicio=<?php echo $Servicio->getIdServicio();?>&Accion=EliminarServicio">Eliminar</a> 
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