<?php
// Incluye el archivo "conexion.php" para establecer la conexión a la base de datos
include("conexion.php");

// Conecta a la base de datos utilizando la función "connection()" del archivo "conexion.php"
$con = connection();

// Obtiene el valor del parámetro 'id' de la URL
$id = $_GET["id"];

// Crea una consulta SQL para eliminar un usuario con el ID proporcionado
$sql = "DELETE FROM users WHERE id='$id'";

// Ejecuta la consulta
$query = mysqli_query($con, $sql);

// Comprueba si la eliminación fue exitosa
if ($query) {
    // Redirecciona a la página "index.php" si la eliminación fue exitosa
    header("Location: index.php");
} else {
    
}
?>
