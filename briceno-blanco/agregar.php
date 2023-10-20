<!DOCTYPE html>
<html>
<head>
    <title>Agregar Usuario</title>
</head>
<body>
    <h1>Agregar Usuario</h1>

    <form action="guardar_usuario.php" method="POST">
        Usuario: <input type="text" name="usuario"><br>
        Clave: <input type="password" name="clave"><br>
        Nick: <input type="text" name="nick"><br>
        <input type="submit" value="Agregar">
    </form>

    <a href="index.php">Volver a la lista de usuarios</a>
</body>
</html>
