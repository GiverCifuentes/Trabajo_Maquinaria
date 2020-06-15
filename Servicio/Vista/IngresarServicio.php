<?php

// session_start();

// if (!(isset($_SESSION["Nombre"]))) {
//  header("location:../../Index.php");    
// }



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
        <div class="card-header">Ingrese los datos para registrar un servicio</div>
        <div class="card-body">
    <form id="FrmServicio" name="FrmServicio" action="../Controlador/ControladorServicio.php" method="POST">
        <div class="form-group"style="text-align:center;">
        Nombre de la obra:
        <br>
        <input title="escriba aca el nombre de la empresa" type="text" id="NombreObra" name="NombreObra"/>
        <label id="validacion_nombreempresa"></label>
        <br>
        </div>
        <div class="form-group"style="text-align:center;">
            Director de la obra:
            <br>
            <input type="text" id="DirectorObra" name="DirectorObra"/>
            <label id="validacion_directorobra"></label>
            <br>
        </div>
          <div class="form-group"style="text-align:center;">
            Constructora:
            <br>
            <input type="text" id="Constructora" name="Constructora"/>
            <label id="validacion_constructora"></label>
            <br>
          </div>
          <div class="form-group"style="text-align:center;">
            Fecha de servicio:
            <br>
            <input type="date" id="Mes" name="Mes"/>
            <label id="validacion_mes"></label>
            <br>
          </div>
          <div class="form-group"style="text-align:center;">
            Máquina:
            <br>
            <!-- <input id="Maquina" name="Maquina"> -->
            <select id="Maquina"  name= "Maquina" class="form-control">
                              <option value="0" >Seleccione una Maquina</option>
                              <?php
                              $query = $mysqli -> query ("SELECT * FROM maquinaria");
                              while ($valores = mysqli_fetch_array($query)) {
                              echo '<option style="color:black;" value="'.$valores[IdMaquina].'">'.$valores[Nombre].'</option>';
                              }
                              ?>
            </select>
            <label id="validacion_maquina"></label>
            <br>
          </div>
          <div class="form-group"style="text-align:center;">
            Operario 1:
            <br>
            <input type="text" id="Operario1" name="Operario1"/>
            <label id="validacion_operario1"></label>
            <br>
          </div>
          <div class="form-group"style="text-align:center;">
            Operario 2:
            <br>
            <input type="text" id="Operario2" name="Operario2"/>
            <label id="validacion_operario2"></label>
            <br>
          </div>

          <input type="hidden" name="CrearServicio" id="CreaServicio">
          <button type="submit"  class="btn btn-success" name="btnregistrar_servicio" id="btnregistrar_servicio ">Registrar</button>
          <!-- <button  class="btn btn-secondary" name="btnconsultar_maquina" id="btnconsultar_maquina">Consultar</button> -->
    </form>
      <!-- <br>
      <button  class="btn btn-secondary" name="btnlimpiar" id="btnlimpiar">Limpiar</button>
      <br> -->
    <br>
    <button  class="btn btn-info" onclick="location.href='ListarServicio.php'"> Volver</button>

    <footer>
      <div class="footer" style="margin-top: 5rem; color: black;">
        <i><b>GIVER CIFUENTES.</b></i>
      </div>
    </footer>

</div>
</div>

</body>
<!-- <script src="../../js/Servicio/IngresarServicio.js"></script> -->
</html>