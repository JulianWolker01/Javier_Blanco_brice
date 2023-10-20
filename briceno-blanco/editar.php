<!DOCTYPE html>
<html>
<head>
    <title>Editar Usuario</title>
</head>
<body>
    <h1>Editar Usuario</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
        $id = $_GET["id"];
        
        // Conexión a la base de datos
        $mysqli = new mysqli("10.120.1.124", "jbricenoadmin", "suiza123456", "briceno_login");

        // Consulta SQL para obtener el usuario por ID
        $stmt = $mysqli->prepare("SELECT usuario, clave, nick FROM usuarios WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->bind_result($usuario, $clave, $nick);
        $stmt->fetch();
        $stmt->close();

        if ($usuario !== null) {
    ?>
            <form action="actualizar_usuario.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                Usuario: <input type="text" name="usuario" value="<?php echo $usuario; ?>"><br>
                Clave: <input type="password" name="clave" value="<?php echo $clave; ?>"><br>
                Nick: <input type="text" name="nick" value="<?php echo $nick; ?>"><br>
                <input type="submit" value="Guardar Cambios">
            </form>
    <?php
        } else {
            echo "Usuario no encontrado.";
        }

        // Cerrar la conexión a la base de datos
        $mysqli->close();
    } else {
        echo "ID de usuario no proporcionado.";
    }
    ?>
    <a href="index.php">Volver a la lista de usuarios</a>
</body>
</html>
