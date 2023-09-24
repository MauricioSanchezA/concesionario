<?php
// Incluye el archivo "conexion.php" para establecer la conexión a la base de datos
include("conexion.php");

// Conecta a la base de datos utilizando la función "connection()" del archivo "conexion.php"
$con = connection();

// Obtiene el valor del parámetro 'id' de la URL
$cedula_tecnico = $_GET["cedula_tecnico"];

// Crea una consulta SQL para eliminar un usuario con el ID proporcionado
// Crea una consulta SQL para eliminar el tecnico de la tabla "tecnicos" utilizando el ID como condición
$sql = "DELETE FROM tecnicos WHERE cedula_tecnico='$cedula_tecnico'";


// Ejecuta la consulta
$query = mysqli_query($con, $sql);

// Comprueba si la eliminación fue exitosa
if ($query) {
    // Redirecciona a la página "index.php" si la eliminación fue exitosa
    header("Location: index.php");
} else {
    
}
?>
