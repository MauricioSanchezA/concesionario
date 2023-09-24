<?php
// Incluye el archivo "conexion.php" para establecer la conexión a la base de datos
include("conexion.php");

// Conecta a la base de datos utilizando la función "connection()" del archivo "conexion.php"
$con = connection();

// Obtiene el valor del parámetro 'numero_revision' de la URL
$numero_revision = $_GET["numero_revision"];

// Crea una consulta SQL para eliminar una revisión con el número de revisión proporcionado
$sql = "DELETE FROM revisiones WHERE numero_revision='$numero_revision'";

// Ejecuta la consulta
$query = mysqli_query($con, $sql);

// Comprueba si la eliminación fue exitosa
if ($query) {
    // Redirecciona a la página "index.php" si la eliminación fue exitosa
    header("Location: index.php");
} else {
    // Puedes agregar código aquí para manejar errores en caso de que la eliminación falle
}
?>
