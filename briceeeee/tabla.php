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



// La variable que creara la tabla en la base de datos.
$mi_tabla= "CREATE TABLE users(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
usuario VARCHAR(50) NOT NULL,
pwd VARCHAR(60) NOT NULL,
NICK VARCHAR(50),
fecha TIMESTAMP
)";
// Condicional PHP que creará la tabla
if (mysqli_query($conexion, $mi_tabla)) {
// Mostramos mensaje si la tabla ha sido creado correctamente!
    echo "Table MyGuests created successfully";
} else {
    // Mostramos mensaje si hubo algún error en el proceso de creación
    echo "Error al crear la tabla: " . mysqli_error($conexion);
}
// Cerramos la conexión
mysqli_close($conexion);
?>