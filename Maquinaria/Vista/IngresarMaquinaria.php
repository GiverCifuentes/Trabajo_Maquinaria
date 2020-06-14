<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Maquinaria</title>
    <link rel="stylesheet" href="../../css/Maquinaria/IngresarMaquinaria.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.12/dist/sweetalert2.all.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body style="background-color: rgb(0, 0, 0);">

    <div style="background-color: #B52407;" class="card text-white mb-3">
        <div class="card-header">Ingrese los datos para registrar una máquina</div>
        <div class="card-body">
    <form id="FrmMaquinaria" name="FrmMaquinaria" action="../Controlador/ControladorMaquinaria.php" method="POST">
        <div class="form-group"style="text-align:center;">
        Nombre de la máquina:
        <br>
        <input title="escriba aca el nombre de la empresa" type="text" id="Nombre" name="Nombre"/>
        <label id="validacion_nombre"></label>
        <br>
        </div>
        <div class="form-group"style="text-align:center;">
        Capacidad:
        <br>
        <input type="text" id="Capacidad" name="Capacidad"/>
        <label id="validacion_Capacidad"></label>
        <br>
        </div>

        <input type="hidden" name="CrearMaquinaria" id="CreaMaquinaria">
        <button type="submit"  class="btn btn-secondary" name="btnregistrar_Maquinaria" id="btnregistrar_Maquinaria ">Registrar</button>
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