<?php
// Incluye el archivo "conexion.php" para establecer la conexión a la base de datos
include("conexion.php");

// Conecta a la base de datos utilizando la función "connection()" del archivo "conexion.php"
$con = connection();

// Obtiene el valor del parámetro 'id' de la URL
$id_inventario = $_GET["id_inventario"];

// Crea una consulta SQL para eliminar un usuario con el ID proporcionado
$sql = "DELETE FROM inventario WHERE id_inventario='$id_inventario'";

// Ejecuta la consulta
$query = mysqli_query($con, $sql);

// Comprueba si la eliminación fue exitosa
if ($query) {
    // Redirecciona a la página "index.php" si la eliminación fue exitosa
    header("Location: index.php");
} else {
    // Si la eliminación no fue exitosa, aquí se podría manejar un mensaje de error o alguna otra acción
}
?>
