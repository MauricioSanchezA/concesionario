<?php
// Incluye el archivo "conexion.php" para establecer la conexión a la base de datos
include("conexion.php");
// Conecta a la base de datos utilizando la función "connection()" del archivo "conexion.php"
$con = connection();

// Obtiene los datos del formulario de edición
$id_carro = $_POST['id_carro'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
// Crea una consulta SQL para actualizar los datos del vehículo en la tabla "cars" utilizando el ID como condición
$sql = "UPDATE cars SET marca='$marca', modelo='$modelo' WHERE id_carro='$id_carro'";




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
