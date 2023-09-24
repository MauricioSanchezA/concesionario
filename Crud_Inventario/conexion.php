<?php
// Función para establecer la conexión a la base de datos
function connection(){
    // Definición de los datos de conexión
    $home = "localhost"; // Dirección del servidor de base de datos
    $usuario = "root"; // Nombre de usuario de la base de datos
    $pass = ""; // Contraseña de la base de datos (en este caso, está en blanco)

    $bd = "users_crud_php"; // Nombre de la base de datos que se utilizará

    // Establecer la conexión a la base de datos
    $connect = mysqli_connect($home, $usuario, $pass);

    // Seleccionar la base de datos
    mysqli_select_db($connect, $bd);

    // Devolver la conexión establecida
    return $connect;
}
?>
