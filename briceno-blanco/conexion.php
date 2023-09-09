<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Datos de conexión
$servidor = "10.120.1.124";
$usuario = "jbricenoadmin";
$password = "suiza123456";
$nombreBD = "briceno_login";

// Crear la conexión con la base de datos
$conexion = mysqli_connect($servidor, $usuario, $password, $nombreBD);

// Comprobar si la conexión se realizó con éxito
if (!$conexion) {
    die("La conexión ha fallado: " . mysqli_connect_error());
} else {
    echo "La conexión se ha realizado correctamente.";
}

// Cerrar la conexión
mysqli_close($conexion);
?>
