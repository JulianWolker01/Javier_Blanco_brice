<!DOCTYPE html>
<html>
<head>
    <title>PIPIPI</title>
</head>
<body>
    <h1>Usuarios</h1>
    
    <?php
    // Conexión a la base de datos
    $mysqli = new mysqli("10.120.1.124", "jbricenoadmin", "suiza123456", "briceno_login");

    // Consulta SQL para obtener todos los usuarios
    $result = $mysqli->query("SELECT * FROM usuarios");

    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Usuario</th><th>Clave</th><th>Nick</th><th>Acciones</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["usuario"] . "</td>";
            echo "<td>" . $row["clave"] . "</td>";
            echo "<td>" . $row["nick"] . "</td>";
            echo "<td><a href='editar.php?id=" . $row["id"] . "'>Editar</a> | <a href='eliminar.php?id=" . $row["id"] . "'>Eliminar</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No hay usuarios en la base de datos.";
    }

    // Cerrar la conexión a la base de datos
    $mysqli->close();
    ?>

    <a href="agregar.php">Agregar usuario</a>
</body>
</html>
