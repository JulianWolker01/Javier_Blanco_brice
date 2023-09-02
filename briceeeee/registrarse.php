<?php

//datos

$servidor = "10.120.1.124";
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
$NICK = $_POST["nick"];
$nombreBD = "briceno_login";


// Creamos la conexión con la base de datos
$conexion = mysqli_connect($servidor, $usuario, $clave,$nombreBD);
// Aquí se revisa la conexión con MySQL
if (!$conexion) {
    die("la conexión ha fallado: " . mysqli_connect_error());
}

$sql = "INSERT INTO users (id,usuario,clave,NICK,create_at,update_at,delete_at) VALUES (null,$usuario,$clave,$NICK,now(),null,null)";
$result = mysqli_query($conexion,$sql);
// Cerramos la conexión
mysqli_close($conexion);
?>