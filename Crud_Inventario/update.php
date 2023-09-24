<?php
// Incluye el archivo "conexion.php" para establecer la conexión a la base de datos
include("conexion.php");
// Conecta a la base de datos utilizando la función "connection()" del archivo "conexion.php"
$con = connection();

// Obtiene los datos del formulario de edición
$id_inventario = $_POST['id_inventario'];
$gato = $_POST['gato'];
$cruceta = $_POST['cruceta'];
$botiquin = $_POST['botiquin'];
$radio = $_POST['radio'];
$observaciones = $_POST['observaciones'];

// Crea una consulta SQL para actualizar los datos del inventario en la tabla "inventario" utilizando el ID como condición
$sql = "UPDATE inventario SET gato='$gato', cruceta='$cruceta', botiquin='$botiquin', radio='$radio', observaciones='$observaciones' WHERE id_inventario='$id_inventario'";

// Ejecuta la consulta de actualización
$query = mysqli_query($con, $sql);

if ($query) {
    // Redirecciona a la página "index.php" si la actualización fue exitosa
    header("Location: index.php");
} else {
    // Muestra el mensaje de error de MySQL en caso de fallo
    echo "Error de actualización: " . mysqli_error($con);
}
?>
