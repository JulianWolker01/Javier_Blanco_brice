<?php

//datos
$servidor = "10.120.1.124";
$usuario = "jbricenoadmin";
$password = "suiza123456";
$nombreBD = "briceno_login";


// Creamos la conexión con la base de datos
$conexion = mysqli_connect($servidor, $usuario, $password,$nombreBD);
// Aquí se revisa la conexión con MySQL
if (!$conexion) {
    die("la conexión ha fallado: " . mysqli_connect_error());
}
// Cerramos la conexión
mysqli_close($conexion);
?>