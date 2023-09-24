<?php
// Función para establecer la conexión a la base de datos
function connection(){
    // Definición de los datos de conexión
    $home = "localhost"; // Dirección del servidor de base de datos (en este caso, el servidor de base de datos se encuentra en la misma máquina)
    $usuario = "root"; // Nombre de usuario de la base de datos
    $pass = ""; // Contraseña de la base de datos (en este caso, está en blanco)

    $bd = "users_crud_php"; // Nombre de la base de datos que se utilizará

    // Establecer la conexión a la base de datos utilizando la función "mysqli_connect()"
    $connect = mysqli_connect($home, $usuario, $pass);

    // Seleccionar la base de datos utilizando la función "mysqli_select_db()"
    mysqli_select_db($connect, $bd);

    // Devolver la conexión establecida
    return $connect;
}
?>
