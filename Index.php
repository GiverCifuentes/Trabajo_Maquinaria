<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="css/estilosIndex.css"></link>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>
    <h1 align="center">Ingreso</h1>

    <form action="Usuario/Controlador/ControladorUsuario.php" method="POST" align="center">
        <div class="form-group">
            <label for="">Usuario</label>
            <br>
            <input type="text" class="form-control" id="NombreUsuario" name="NombreUsuario" >
            <br>
            <br>
        </div>
        <div class="form-group">
            <label for="">Contraseña</label>
            <br>
            <input type="password" class="form-control" id="Contrasena" name="Contrasena">
        </div>
        <br> <br>

        <button type="submit" name="Acceder" id="Acceder">Ingresar</button>
    </form>
</body>
</html>