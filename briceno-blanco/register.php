<?php

//datos

$servidor = "10.120.1.124";
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
$nombreBD = "briceno_login";


// Creamos la conexión con la base de datos
$conexion = mysqli_connect($servidor, $usuario, $clave,$nombreBD);
// Aquí se revisa la conexión con MySQL
if (!$conexion) {
    die("La conexión ha fallado: " . mysqli_connect_error());
} else {
    echo "La conexión se ha realizado correctamente.";
}

$sql = "INSERT INTO users (id,usuario,clave,NICK,create_at,update_at,delete_at) VALUES (null,$usuario,$clave,now(),null,null)";
$result = mysqli_query($conexion,$sql);

if($result){

    echo "Funciona";
}else{
    echo "error en el registro";
    include("register.php");
    
}
// Cerramos la conexión
mysqli_close($conexion);
?>