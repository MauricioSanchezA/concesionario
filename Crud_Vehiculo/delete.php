<?php
// Incluye el archivo "conexion.php" para establecer la conexión a la base de datos
include("conexion.php");

// Conecta a la base de datos utilizando la función "connection()" del archivo "conexion.php"
$con = connection();

// Obtiene el valor del parámetro 'id' de la URL
$id_carro = $_GET["id_carro"];
// Crea una consulta SQL para eliminar el vehículo de la tabla "cars" utilizando el ID como condición
$sql = "DELETE FROM cars WHERE id_carro='$id_carro'";


// Ejecuta la consulta
$query = mysqli_query($con, $sql);

// Comprueba si la eliminación fue exitosa
if ($query) {
    // Redirecciona a la página "index.php" si la eliminación fue exitosa
    header("Location: index.php");
} else {
    
}
?>
