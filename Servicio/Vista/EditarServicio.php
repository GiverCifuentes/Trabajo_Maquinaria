<?php

// session_start();

// if (!(isset($_SESSION["Nombre"]))) {
// header("location:../../Index.php");
// }

require_once('../../conexion.php');
require_once('../Modelo/Servicio.php');
require_once('../Modelo/CrudServicio.php');


$CrudServicio = new CrudServicio();
$Servicio = $CrudServicio::ObtenerServicio($_GET['IdServicio']);

$mysqli = new mysqli('localhost', 'root', '', 'trabajo_maquinaria');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicio</title>
    <link rel="stylesheet" href="../../css/Servicio/IngresarServicio.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.12/dist/sweetalert2.all.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body style="background-color: rgb(0, 0, 0);">

    <div style="background-color: #B52407;" class="card text-white mb-3">
        <div class="card-header">Ingrese los datos para editar el servicio</div>
        <div class="card-body">
    <form id="FrmServicio" name="FrmServicio" action="../Controlador/ControladorServicio.php" method="POST">
        <div class="form-group"style="text-align:center;">
            Id de la obra:
            <br>
            <input type="text" id="IdServicio" name="IdServicio" readonly value="<?php echo $Servicio->getIdServicio();?>">
            <br>
        </div>
        <div class="form-group"style="text-align:center;">
            Nombre de la obra:
            <br>
            <input title="escriba aca el nombre de la empresa" type="text" id="NombreObra" name="NombreObra" value="<?php echo $Servicio->getNombreObra();?>">
            <label id="validacion_nombreempresa"></label>
            <br>
        </div>
        <div class="form-group"style="text-align:center;">
            Director de la obra:
            <br>
            <input type="text" id="DirectorObra" name="DirectorObra" value="<?php echo $Servicio->getDirectorObra();?>">
            <label id="validacion_directorobra"></label>
            <br>
        </div>
          <div class="form-group"style="text-align:center;">
            Constructora:
            <br>
            <input type="text" id="Constructora" name="Constructora" value="<?php echo $Servicio->getConstructora();?>">
            <label id="validacion_constructora"></label>
            <br>
          </div>
          <div class="form-group"style="text-align:center;">
            Fecha de servicio:
            <br>
            <input type="date" id="Mes" name="Mes" value="<?php echo $Servicio->getMes();?>">
            <label id="validacion_mes"></label>
            <br>
          </div>
          <div class="form-group"style="text-align:center;">
            Máquina:
            <br>
            <input id="Maquina" name="Maquina" value="<?php echo $Servicio->getMaquina();?>">
            <label id="validacion_maquina"></label>
            <br>
          </div>
          <div class="form-group"style="text-align:center;">
            Operario 1:
            <br>
            <input type="text" id="Operario1" name="Operario1" value="<?php echo $Servicio->getOperario1();?>">
            <label id="validacion_operario1"></label>
            <br>
          </div>
          <div class="form-group"style="text-align:center;">
            Operario 2:
            <br>
            <input type="text" id="Operario2" name="Operario2" value="<?php echo $Servicio->getOperario2();?>">
            <label id="validacion_operario2"></label>
            <br>
          </div>

          <input type="hidden" name="EditarServicio" id="EditarServicio">
          <button type="submit"  class="btn btn-secondary" name="btneditar_servicio" id="btneditar_servicio ">Editar Servicio</button>
          <!-- <button  class="btn btn-secondary" name="btnlimpiar" id="btnlimpiar">Limpiar</button>
          <button  class="btn btn-secondary" name="btnconsultar_maquina" id="btnconsultar_maquina">Consultar</button>
          <button  class="btn btn-secondary" name="btnVolver" id="btnVolver" onclick="location.href='practicacrud/navegar.php'"> Volver</button> -->
    </form>

    <footer>
      <div class="footer" style="margin-top: 5rem; color: black;">
        <i><b>GIVER CIFUENTES.</b></i>
      </div>
    </footer>

</div>
</div>

</body>
<!-- <script src="../../js/Maquinaria/Maquinaria.js"></script> -->
</html>