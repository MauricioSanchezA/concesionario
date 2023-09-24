<?php
// Incluye el archivo "conexion.php" para establecer la conexión a la base de datos
include("conexion.php");
// Conecta a la base de datos utilizando la función "connection()" del archivo "conexion.php"
$con = connection();

// Obtiene los datos del formulario de edición
$cedula_tecnico = $_POST['cedula_tecnico'];
$codigo_tecnico = $_POST['codigo_tecnico'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
// Crea una consulta SQL para actualizar los datos del tecnico en la tabla "tecnicos" utilizando el ID como condición
$sql = "UPDATE tecnicos SET nombre='$nombre', direccion='$direccion', telefono='$telefono' WHERE cedula_tecnico='$cedula_tecnico'";




// Ejecuta la consulta de actualización
$query = mysqli_query($con, $sql);

if ($query) {
    // Redirecciona a la página "index.php" si la actualización fue exitosa
    header("Location: index.php");
} else {
    // Muestra el mensaje de error de MySQL
    echo "Error de actualización: " . mysqli_error($con);
}

?>
